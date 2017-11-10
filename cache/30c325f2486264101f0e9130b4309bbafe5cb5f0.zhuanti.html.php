<?php
/* Smarty version 3.1.30, created on 2017-11-08 06:10:17
  from "D:\wamp\www\web\mvcyyy\template\index\zhuanti.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a029fc92f2762_86348029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d8f7fcccfbec240dd81a77a00204c5c1345f10' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\zhuanti.html',
      1 => 1510121415,
      2 => 'file',
    ),
    '4b496d97467d4d702e9e4b8b46bce5e5585fb480' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\header.html',
      1 => 1510119837,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a029fc92f2762_86348029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>悦读</title>
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
<!--<header>-->
    <!--<h2>悦读</h2>-->
    <!--<main>-->
        <!--<h4><a href="">首页</a></h4>-->
        <!--<div class="search">-->
            <!--<input type="text" placeholder="搜索">-->
            <!--<div class="search-icon">&#xe672;</div>-->
        <!--</div>-->
    <!--</main>-->
    <!--<div class="person">-->
        <!--<div class="head-img">-->
            <!--<img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt="">-->
        <!--</div>-->
        <!--<div class="angle"></div>-->
        <!--<ul class="select">-->
            <!--<li><a href="">&#xe662; 我的主页</a></li>-->
            <!--<li><a href="index.php?m=index&f=personal">&#xe600; 个人中心</a></li>-->
            <!--<li><a href="">&#xe645; 退出登录</a></li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</header>-->
<style>
    .main{
        width:700px;
        height:auto;
        margin:0 auto;
        margin-top: 20px;
    }
    .head{
        width:100%;
        height:90px;
    }
    .head-img{
        width:90px;
        height:90px;
        float: left;
        border-radius: 5px;
        border:1px solid #9d9d9d;
    }
    .head-img>a{
        display: block;
        width:100%;
        height:100%;
    }
    .head-img>a>img{
        width:100%;
        height:100%;
        border-radius: 5px;
    }
    .xiangqing{
        width:auto;
        height:70px;
        padding:10px;
        float: left;
        line-height: 70px;
    }
    .num{
        width:240px;
        height:35px;
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }
    .num>li{
        width:24.9%;
        height:100%;
        border-right: 1px dashed #DFDFDF;
        text-align: center;
        font-size: 14px;
    }
    .names{
        color: #9d9d9d;
    }
    .guanzhu{
        width:100px;
        height:30px;
        background: green;
        margin-top:20px;
        float: right;
        text-align: center;
        line-height: 30px;
        font-size: 14px;
        color: #fff;
        border-radius: 20px;
    }
    .headline{
        width:100%;
        height:50px;
        padding:10px 0px;
        border-bottom: 1px solid #DFDFDF;
        display: flex;
        justify-content: space-between;
    }
    .headline>li{
        width:20%;
        height:100%;
        text-align: center;
        line-height: 50px;
    }
    .headline>li>a{
        display: block;
        width:100%;
        height:100%;
        color: #9d9d9d;
        font-family: iconfont;
        font-weight: bold;
    }
    .bottom{
        width:100%;
        height:600px;
    }
    .bottom>iframe{
        width:100%;
        height:100%;
    }
</style>
<section class="main">
    <div class="head">
        <div class="head-img">
            <a href="">
                <img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt="">
            </a>
        </div>
        <div class="xiangqing">
            <h3>散文</h3>
        </div>
        <div class="guanzhu">+ 关注</div>
    </div>
    <ul class="headline">
        <li><a href="index.php?m=index&f=zhuye&a=remen" target="bottom">&#xe649; 热门</a></li>
    </ul>
    <div class="bottom">
        <iframe src="" id="iframeId" name="bottom" frameborder="0" scrolling="no"></iframe>
    </div>
</section>
</body>
</html><?php }
}
