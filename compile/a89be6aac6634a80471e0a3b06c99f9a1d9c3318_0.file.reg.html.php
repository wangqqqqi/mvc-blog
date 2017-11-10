<?php
/* Smarty version 3.1.30, created on 2017-11-10 07:22:44
  from "D:\wamp\www\web\mvcyyy\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0553c4af4d42_98684756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89be6aac6634a80471e0a3b06c99f9a1d9c3318' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\reg.html',
      1 => 1510280568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0553c4af4d42_98684756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
</head>
<style>
    @font-face {
        font-family: 'iconfont';  /* project id 449584 */
        src: url('http://at.alicdn.com/t/font_449584_ayb6lb1r47gjsjor.eot');
        src: url('http://at.alicdn.com/t/font_449584_ayb6lb1r47gjsjor.eot?#iefix') format('embedded-opentype'),
        url('http://at.alicdn.com/t/font_449584_ayb6lb1r47gjsjor.woff') format('woff'),
        url('http://at.alicdn.com/t/font_449584_ayb6lb1r47gjsjor.ttf') format('truetype'),
        url('http://at.alicdn.com/t/font_449584_ayb6lb1r47gjsjor.svg#iconfont') format('svg');
    }
    *{
        margin:0;
        padding:0;
        text-decoration: none;
        list-style: none;
    }
    body,html{
        width:100%;
        height:100%;
        background: #F1F1F1;
    }
    .head{
        float: left;
        padding-top:50px;
        padding-left: 50px;
        font-size: 50px;
    }
    .head>a{
        color: #4A80D6;
    }
    .login{
        width:362px;
        height:450px;
        padding:30px 20px;
        margin:30px auto;
        background: #fff;
        box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.2);
    }
    .headline{
        width:160px;
        height:40px;
        margin:0 auto;
    }
    .reg{
        width:50px;
        height:100%;
        float: right;
        text-align: center;
        line-height: 40px;
        border-bottom: 2px solid #4A80D6;
    }
    .reg>a{
        font-size: 20px;
        color: #4A80D6;
    }
    .log{
        width:50px;
        height:100%;
        float: left;
        text-align: center;
        line-height: 40px;
    }
    .log>a{
        font-size: 20px;
        color: #9d9d9d;
    }
    .log:hover{
        border-bottom: 2px solid #4A80D6;
    }
    .int{
        width:90%;
        height:300px;
        margin:0 auto;
        margin-top:30px;
        border-radius: 5px;
        border: 1px solid #9d9d9d;
        box-sizing: border-box;
        background: #F8F8F8;
    }
    .int>li{
        width:100%;
        height:16.666667%;
        font-family: iconfont;
        font-size: 14px;
        line-height: 50px;
        color: #9d9d9d;
        border-bottom: 1px solid #9d9d9d;
        box-sizing: border-box;
    }
    .int>li:last-child{
        border-bottom: none;
    }
    .int>li>input{
        width:50%;
        height:93%;
        background: none;
        border: none;
        outline: none;
    }
    .login>input{
        width:90%;
        height:42px;
        border-radius: 20px;
        border:none;
        background: #00b3ff;
        margin-left: 18px;
        margin-top: 30px;
        color: #fff;
        font-weight: bold;
    }
    .canvas{
        width:120px;
        height:45px;
        float: right;
        margin-top: 2px;
    }
    .canvas>img{
        width:100%;
        height:100%;
    }
</style>
<body>
<form action="index.php?m=index&f=reg&a=check" method="post">
    <div class="head">
        <a href="index.php?m=index">
        悦读
        </a>
    </div>
    <div class="login">
        <div class="headline">
            <div class="log"><a href="index?m=index&f=login">登录</a></div>
            <div class="reg"><a href="index?m=index&f=reg">注册</a></div>
        </div>
        <ul class="int">
            <li>&#xe600; <input id="uname" name="uname" type="text" placeholder ="请输入用户名"></li>
            <li>&#xe631; <input id="upass" name="upass" type="password" placeholder="请输入密码"></li>
            <li>&#xe631; <input id="upass2" name="upass2" type="password" placeholder="请确认密码"></li>
            <li>&#xe624; <input name="imgcode" type="text" placeholder="请输入验证码">
                <div class="canvas">
                    <img src="index.php?m=admin&f=login&a=imgcode" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer">
                </div>
            </li>
            <li>&#xe647; <input type="text" id="uphone" name="uphone" placeholder="请输入手机号"></li>
            <li>&#xe638; <input type="text" placeholder="请输入手机验证码"></li>
        </ul>
        <input type="submit" style="outline: none" value="注 册">
    </div>
</form>

</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/reg.js"><?php echo '</script'; ?>
><?php }
}
