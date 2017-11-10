<?php
/* Smarty version 3.1.30, created on 2017-11-07 08:29:04
  from "D:\wamp\www\web\mvcyyy\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a016ed0963fb3_78399951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8476d8c3ca51dd6fa39f0a4f3b7c63a25a11bf4e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\login.html',
      1 => 1510015801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a016ed0963fb3_78399951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '227855a016ed08a0ee1_26338291';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
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
        color: #4A80D6;
        font-size: 50px;
    }
    .login{
        width:362px;
        height:450px;
        padding:30px 20px;
        margin:30px auto;
        background: #fff;
        box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.2);
    }
    .log{
        width:50px;
        height:40px;
        margin:0 auto;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        color: #4A80D6;
        border-bottom: 2px solid #4A80D6;
    }
    .int{
        width:90%;
        height:250px;
        margin:0 auto;
        margin-top:50px;
        border-radius: 5px;
        border: 1px solid #9d9d9d;
        box-sizing: border-box;
        background: #F8F8F8;
    }
    .int>li{
        width:100%;
        height:20%;
        font-family: iconfont;
        font-size: 16px;
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
        outline: none;
    }
    .canvas{
        width:120px;
        height:50px;
        float: right;
    }
    .canvas>img{
        width:100%;
        height:100%;
    }
</style>
<body>
<form action="index.php?m=admin&f=login&a=check" method="post">
    <div class="head">
        悦读
    </div>
    <div class="login">
        <div class="log">登录</div>
        <ul class="int">
            <li>&#xe600; <input name="aname" type="text" autocomplete="off" placeholder ="请输入用户名"></li>
            <li>&#xe631; <input name="apass" type="password" autocomplete="off" placeholder="请输入密码"></li>
            <li>&#xe624; <input name="imgcode" type="text" autocomplete="off" placeholder="请输入验证码">
                <div class="canvas">
                    <img src="index.php?m=admin&f=login&a=imgcode" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer">
                </div>
            </li>
            <li>&#xe647; <input type="text" autocomplete="off" placeholder="请输入手机号"></li>
            <li>&#xe638; <input type="text" autocomplete="off" placeholder="请输入手机验证码"></li>
        </ul>
        <input type="submit" value="登 录">
    </div>
</form>

</body>
</html><?php }
}
