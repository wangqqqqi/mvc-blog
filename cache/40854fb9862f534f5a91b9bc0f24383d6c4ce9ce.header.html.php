<?php
/* Smarty version 3.1.30, created on 2017-11-08 03:41:42
  from "D:\wamp\www\web\mvcyyy\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a027cf6442cf9_69402846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b496d97467d4d702e9e4b8b46bce5e5585fb480' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\header.html',
      1 => 1510112496,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a027cf6442cf9_69402846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>头部</title>
    <script src="http://localhost/web/mvcyyy/static/js/jquery-3.2.1.js"></script>
    <script src="http://localhost/web/mvcyyy/static/js/header.js"></script>
    <link rel="stylesheet" href="http://localhost/web/mvcyyy/static/css/header.css">
</head>
<body>
<header>
    <h2>悦读</h2>
    <main>
        <h4><a href="index.php?m=index&f=index">首页</a></h4>
        <div class="search">
            <input type="text" placeholder="搜索">
            <div class="search-icon">&#xe672;</div>
        </div>
    </main>
    <div class="login"><a href="index.php?m=index&f=login">登录</a></div>
    <div class="reg"><a href="index.php?m=index&f=reg">注册</a></div>
</header>
</body>
</html><?php }
}
