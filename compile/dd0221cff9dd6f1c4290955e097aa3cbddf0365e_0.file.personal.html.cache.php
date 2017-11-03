<?php
/* Smarty version 3.1.30, created on 2017-10-29 15:39:49
  from "D:\wamp\www\web\mvcyyy\template\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f5f645205980_69706676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0221cff9dd6f1c4290955e097aa3cbddf0365e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\personal.html',
      1 => 1509291300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f5f645205980_69706676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2009559f5f6451d1791_11108126';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/personal.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/personal.css">
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
    <div class="person">
        <div class="head-img">
            <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
        </div>
        <div class="angle"></div>
        <ul class="select">
            <li><a href="">&#xe662; 我的主页</a></li>
            <li><a href="index.php?m=index&f=personal">&#xe600; 个人中心</a></li>
            <li><a href="">&#xe645; 退出登录</a></li>
        </ul>
    </div>
</header>
<section class="main">
    <ul class="main-left">
        <li><a href="index.php?m=index&f=level" target="right">
            <ul class="name">
                <li>&#xe627;</li>
                <li>我的等级</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=car" target="right">
            <ul class="name">
                <li>&#xe605;</li>
                <li>购物车</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=dingdan" target="right">
            <ul class="name">
                <li>&#xe604;</li>
                <li>我的订单</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=zhanghu" target="right">
            <ul class="name">
                <li>&#xe65e;</li>
                <li>我的账户</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=ziliao" target="right">
            <ul class="name">
                <li>&#xe648;</li>
                <li>资料设置</li>
            </ul>
        </a></li>
    </ul>
    <div class="main-right right">
        <iframe src="" name="right" frameborder="0"></iframe>
    </div>
</section>
</body>
</html><?php }
}
