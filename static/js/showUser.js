BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store,
        // enumObj = {'1':'增加','2' : '删除','3' : '修改','4' : '查询'},
        columns = [
            {title : 'id',dataIndex :'uid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '用户名', dataIndex :'uname'},
            {title : '用户密码', dataIndex :'upass'},
            {title : '等级',dataIndex : 'ulevel'},
            {title : '电话',dataIndex : 'uphone'},
            {title : '注册日期',dataIndex : 'date'},
            {title : '操作',renderer : function(){
                return '<span class="grid-command btn-edit">编辑</span>'
            }}
        ];

    var isAddRemote = false,
        editing = new Grid.Plugins.DialogEditing({
            contentId : 'content', //设置隐藏的Dialog内容
            triggerCls : 'btn-edit', //触发显示Dialog的样式
            editor : {
                title : '编辑',
                success:function(){
                    var edtor = this,
                        form = edtor.get('form'),
                        editType = editing.get('editType'),
                        url="";
                    if(editType =='add'){
                        url="index.php?m=admin&f=user&a=addUser";
                    }else if(editType =='edit'){
                        url="index.php?m=admin&f=user&a=editUser";
                    }
                    url += '&saveType=' + editType;
                    form.valid();
                    if(form.isValid()){
                        form.ajaxSubmit({
                            url:url,
                            type:'post',
                            data:form.serializeToObject(),
                            datatype:'text',
                            success:function(data){
                                if(editType=='add'){
                                    form.setFieldValue("uid",data);
                                    $('input[name=uid]').val(data);
                                    edtor.accept();
                                }else if(editType=='edit'){
                                    edtor.accept();
                                }
                            }
                        })
                    }
                }
            }
        }),
        store = new Store({
            url:"index.php?m=admin&f=user&a=selectUser",
            // params:{rolids=data},
            // method:'post',
            autoLoad:true
        }),
        grid = new Grid.Grid({
            render:'#grid',
            columns : columns,
            width : 700,
            forceFit : true,
            tbar:{ //添加、删除
                items : [{
                    btnCls : 'button button-small',
                    text : '<i class="icon-plus"></i>添加',
                    listeners : {
                        'click' : addFunction
                    }
                },
                    {
                        btnCls : 'button button-small',
                        text : '<i class="icon-remove"></i>删除',
                        listeners : {
                            'click' : delFunction
                        }
                    }]
            },
            plugins : [editing,Grid.Plugins.CheckSelection],
            store : store
        });

    grid.render();

    //添加记录
    function addFunction(){
        var newData = {uname : 0};
        editing.add(newData,'a',0); //添加记录后，直接编辑
    }
    //删除选中的记录
    function delFunction(){
        var selections = grid.getSelection();
        var data="";
        selections.map(function(a){
            data+=a.uid+',';
        })
        data="("+data.slice(0,-1)+")";
        $.ajax({
            url:"index.php?m=admin&f=user&a=delUser",
            type:"post",
            data:"uid="+data,
            success:function(){
                store.remove(selections);
            }
        })

    }
});