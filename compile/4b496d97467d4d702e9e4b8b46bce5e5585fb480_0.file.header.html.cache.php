<?php
/* Smarty version 3.1.30, created on 2017-11-10 08:36:55
  from "D:\wamp\www\web\mvcyyy\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a056527c15c93_04813641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b496d97467d4d702e9e4b8b46bce5e5585fb480' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\header.html',
      1 => 1510303010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a056527c15c93_04813641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '150325a056527bc31f3_46224199';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>悦读</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/header.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/header.css">
</head>
<body>
<header>
    <h2>悦读</h2>
    <main>
        <h4><a href="">首页</a></h4>
        <div class="search">
            <input type="text" placeholder="搜索">
            <div class="search-icon">&#xe672;</div>
        </div>
    </main>
    <?php if ($_smarty_tpl->tpl_vars['userlogin']->value == "yes") {?>
    <div class="person">
        <div class="headImg">
            <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
        </div>
        <div class="angle"></div>
        <ul class="selects">
            <li><a href="">&#xe662; 我的主页</a></li>
            <li><a href="index.php?m=index&f=personal">&#xe600; 个人中心</a></li>
            <li><a href="index.php?m=index&f=login&a=logout">&#xe645; 退出登录</a></li>
        </ul>
    </div>
    <?php } else { ?>
    <div class="login"><a href="index.php?m=index&f=login">登录</a></div>
    <div class="reg"><a href="index.php?m=index&f=reg">注册</a></div>
    <?php }?>
</header>

<?php }
}
