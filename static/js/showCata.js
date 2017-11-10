function formatProgress(value){
    if (value){
        var s = '<div style="width:100%;border:1px solid #ccc">' +
            '<div style="width:' + value + '%;background:#cc0000;color:#fff">' + value + '%' + '</div>'
        '</div>';
        return s;
    } else {
        return '';
    }
}
var editingId;
function edit(){
    if (editingId != undefined){
        $('#tg').treegrid('select', editingId);
        return;
    }
    var row = $('#tg').treegrid('getSelected');
    if (row){
        editingId = row.id
        $('#tg').treegrid('beginEdit', editingId);
    }
}
//1、后台执行的地址
//2、传递那一条数据
//3、要修改的值
$('#tg').treegrid({ 'onAfterEdit':function(a,b){
    var obj={};
    obj.cid=editingId;
    for (var i in b){
        obj.field=i;
        obj.val=b[i];
    }
    $.ajax({
        url:"index.php?m=admin&f=cata&a=editCata",
        data:obj,
        type:"post",
        success:function (e) {
            if(e=="ok"){
                alert("编辑成功");
                location.href="index.php?m=admin&f=cata&a=showCataCon";
            }else{
                alert("编辑失败");
                location.href="index.php?m=admin&f=cata&a=showCataCon";
            }
        }
    })
}})


function save(){
    if (editingId != undefined){
        var t = $('#tg');
        t.treegrid('endEdit', editingId);
        editingId = undefined;
        var persons = 0;
        var rows = t.treegrid('getChildren');
        for(var i=0; i<rows.length; i++){
            var p = parseInt(rows[i].persons);
            if (!isNaN(p)){
                persons += p;
            }
        }
        var frow = t.treegrid('getFooterRows')[0];
        frow.persons = persons;
        t.treegrid('reloadFooter');
    }
}
function cancel(){
    if (editingId != undefined){
        $('#tg').treegrid('cancelEdit', editingId);
        editingId = undefined;
    }
}
function del(){
    var row = $('#tg').treegrid('getSelected');
    if (row){
        editingId = row.id
    }
    if (editingId != undefined){
        $('#tg').treegrid('remove', editingId);
        return;
    }
}