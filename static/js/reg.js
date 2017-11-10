$(function(){
    // $("input[name=imgcode]").focus(function(){
    //     $("#imgcode-error").css("display","block");
    // })
    $.validator.addMethod("tel", function(value, element) {
        var tel=/^(134|135|136|137|178)\d{8}$/;
        return tel.test(value) || this.optional(element);
    })

    $.validator.addMethod("ran", function(value, element) {
        var tel=/^[\u4e00-\u9fa5 a-z A-Z][\w \u4e00-\u9fa5]{2,7}$/;
        return tel.test(value) || this.optional(element);
    },"输入3-8位(含中文)")


    $("form").validate({
        rules:{
            uname:{
                required:true,
                ran:true,
                remote:{
                    url:"index.php?m=index&f=reg&a=checkUser",
                    data:{uname:function(){
                        return $('#uname').val();
                    }},
                    type:"post",
                    dataType:"text",
                    dataFilter:function(data){
                        if (data=="true"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            upass:{
                required:true,
                minlength:6
            },
            upass2:{
                required:true,
                minlength:6,
                equalTo:"#upass"
            },
            uphone:{
                required: true,
                tel:true
            },
            imgcode:{
                required:true
            }
        },
        messages:{
            uname:{
                required:"用户名不能为空！",
                remote:"用户名已被占用！"
            },
            upass:{
                required:"密码不能为空！",
                minlength:"长度不能小于6！"
            },
            upass2:{
                required:"密码不能为空！",
                minlength:"长度不能小于6！",
                equalTo:"两次密码不一致！"
            },
            uphone: {
                required: "手机号必填",
                tel:"请输入正确的手机号"
            },
            imgcode:{
                required:"验证码必填"
            }
        }
    })
})