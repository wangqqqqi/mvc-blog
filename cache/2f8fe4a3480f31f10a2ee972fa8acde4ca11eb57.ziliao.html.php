<?php
/* Smarty version 3.1.30, created on 2017-10-30 11:00:06
  from "D:\wamp\www\web\mvcyyy\template\index\ziliao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f70636ddeec9_91440146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bad437e44849c7198218314680f198156ca7277' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\ziliao.html',
      1 => 1509348648,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f70636ddeec9_91440146 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资料设置</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        text-decoration: none;
        list-style: none;
    }
    main{
        width:600px;
        height:auto;
    }
    .head{
        width:100%;
        height:100px;
    }
    .img{
        width:100px;
        height:100%;
        float: left;
        border-radius: 50%;
        border:1px solid #9d9d9d;
        box-sizing: border-box;
    }
    .img>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .change{
        width:100px;
        height:30px;
        float: left;
        margin-left: 100px;
        margin-top: 30px;
        border-radius: 15px;
        border:1px solid green;
        text-align: center;
        line-height: 30px;
        color: green;
        font-size: 12px;
        position: relative;
    }
    .change:hover{
        background: green;
        color: #fff;
    }
    .change>input{
        position: absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        opacity: 0;
    }
    .nicheng{
        width:100%;
        height:50px;
        padding:25px 0px;
        border-bottom: 1px solid #9d9d9d;
        line-height: 50px;
        color: #9d9d9d;
    }
    .nicheng>input{
        width:250px;
        height:30px;
        outline: none;
        background: #f0f0f0;
        border-radius: 5px;
        border:1px solid #9d9d9d;
    }
    .sex{
        width:100%;
        height:50px;
        padding:25px 0px;
        border-bottom: 1px solid #9d9d9d;
        line-height: 50px;
        color: #9d9d9d;
    }
    .phone{
        width:100%;
        height:50px;
        padding:25px 0px;
        border-bottom: 1px solid #9d9d9d;
        line-height: 50px;
        color: #9d9d9d;
        position: relative;
    }
    .changep{
        width:100px;
        height:30px;
        position: absolute;
        top:30px;
        left:200px;
        border-radius: 15px;
        border:1px solid green;
        text-align: center;
        line-height: 30px;
        color: green;
        font-size: 12px;
    }
    .changep:hover{
        background: green;
        color: #fff;
    }
    .save{
        width:100px;
        height:30px;
        background: green;
        border-radius: 15px;
        text-align: center;
        line-height: 30px;
        color: #fff;
        font-size: 12px;
        margin-top: 30px;
    }
</style>
<body>
    <main>
        <div class="head">
            <div class="img"><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></div>
            <div class="change">更改头像<input type="file"></div>
        </div>
        <div class="nicheng">昵称 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"></div>
        <div class="phone">手机 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;178****5934 <div class="changep">更改手机</div></div>
        <div class="nicheng">更改密码 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"></div>
        <div class="nicheng">确认密码 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"></div>
        <div class="save">保 存</div>
    </main>
</body>
</html><?php }
}
