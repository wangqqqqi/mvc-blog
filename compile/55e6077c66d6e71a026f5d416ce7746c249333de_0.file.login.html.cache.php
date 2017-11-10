<?php
/* Smarty version 3.1.30, created on 2017-11-07 12:08:26
  from "D:\wamp\www\web\mvcyyy\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a01a23ab71b25_51404006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e6077c66d6e71a026f5d416ce7746c249333de' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\login.html',
      1 => 1510015855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a01a23ab71b25_51404006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155555a01a23aad7202_22199739';
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
    .headline{
        width:160px;
        height:40px;
        margin:0 auto;
    }
    .log{
        width:50px;
        height:100%;
        float: left;
        text-align: center;
        line-height: 40px;
        border-bottom: 2px solid #4A80D6;
    }
    .log>a{
        font-size: 20px;
        color: #4A80D6;
    }
    .reg{
        width:50px;
        height:100%;
        float: right;
        text-align: center;
        line-height: 40px;
    }
    .reg>a{
        font-size: 20px;
        color: #9d9d9d;
    }
    .reg:hover{
        border-bottom: 2px solid #4A80D6;
    }
    .int{
        width:90%;
        height:150px;
        margin:0 auto;
        margin-top:50px;
        border-radius: 5px;
        border: 1px solid #9d9d9d;
        box-sizing: border-box;
        background: #F8F8F8;
    }
    .int>li{
        width:100%;
        height:33.333333%;
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
        margin-top: 50px;
        margin-bottom: 20px;
        color: #fff;
        font-weight: bold;
        outline:none;
    }
    .login>span{
        margin-left: 84px;
        color: #9d9d9d;
        font-size: 12px;
    }
    .chat{
        width:218px;
        height:40px;
        margin: 0 auto;
        margin-top:20px;
        display:flex;
        justify-content: space-between;
    }
    .chat>li{
        width:40px;
        height:100%;
        border-radius:50%;
        background: red;
        font-family: iconfont;
        text-align: center;
        line-height: 40px;
        font-size: 20px;
        color: #fff;
    }
    .chat>li:first-child{
        background: #E05244;
    }
    .chat>li:nth-child(2){
        background: #00BB29;
    }
    .chat>li:nth-child(3){
        background: #498AD5;
    }
    .chat>li:nth-child(4){
        background: #F0F0F0;
        color: #9d9d9d;
        font-size: 10px;
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
<form action="index.php?m=index&f=login&a=check" method="post">
    <div class="head">
        悦读
    </div>
    <div class="login">
        <div class="headline">
            <div class="log"><a href="index?m=index&f=login">登录</a></div>
            <div class="reg"><a href="index?m=index&f=reg">注册</a></div>
        </div>
        <ul class="int">
            <li>&#xe600; <input type="text" name="uname" autocomplete="off" placeholder ="请输入用户名"></li>
            <li>&#xe631; <input type="password" name="upass" autocomplete="off" placeholder="请输入密码"></li>
            <li>&#xe624; <input type="text" name="imgcode" autocomplete="off" placeholder="请输入验证码">
                <div class="canvas">
                    <img src="index.php?m=admin&f=login&a=imgcode" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer">
                </div>
            </li>
        </ul>
        <input type="submit" value="登 录">
        <span> ———— &nbsp&nbsp社交账号登陆&nbsp&nbsp ———— </span>
        <ul class="chat">
            <li>&#xe658;</li>
            <li>&#xe601;</li>
            <li>&#xe63b;</li>
            <li>其他</li>
        </ul>
    </div>
</form>

</body>
</html><?php }
}
