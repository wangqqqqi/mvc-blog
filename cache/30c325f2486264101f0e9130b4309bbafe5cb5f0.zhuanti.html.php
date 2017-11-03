<?php
/* Smarty version 3.1.30, created on 2017-10-31 03:43:01
  from "D:\wamp\www\web\mvcyyy\template\index\zhuanti.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f7f1450dfd94_29782982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d8f7fcccfbec240dd81a77a00204c5c1345f10' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\zhuanti.html',
      1 => 1509421377,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f7f1450dfd94_29782982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>专题</title>
    <script src="http://localhost/web/mvcyyy/static/js/jquery-3.2.1.js"></script>
    <script src="http://localhost/web/mvcyyy/static/js/zhuye.js"></script>
</head>
<style>
    @font-face {
        font-family: 'iconfont';  /* project id 449584 */
        src: url('http://at.alicdn.com/t/font_449584_9wm0mipbfenrk9.eot');
        src: url('http://at.alicdn.com/t/font_449584_9wm0mipbfenrk9.eot?#iefix') format('embedded-opentype'),
        url('http://at.alicdn.com/t/font_449584_9wm0mipbfenrk9.woff') format('woff'),
        url('http://at.alicdn.com/t/font_449584_9wm0mipbfenrk9.ttf') format('truetype'),
        url('http://at.alicdn.com/t/font_449584_9wm0mipbfenrk9.svg#iconfont') format('svg');
    }
    *{
        margin: 0;
        padding:0;
        text-decoration: none;
        list-style: none;
        user-select: none;
    }
    header{
        width:100%;
        height:56px;
        border-bottom: 1px solid #f0f0f0;
        position: relative;
    }
    header>h2{
        color: #4A80D6;
        margin-left: 20px;
        line-height: 56px;
        font-weight: normal;
        float: left;
    }
    header>main{
        width:944px;
        height:100%;
        margin:0 auto;
    }
    main>h4:first-child>a{
        line-height: 56px;
        color: #4A80D6;
        font-weight: normal;
        float: left;
        margin-right: 40px;
    }
    main>h4:nth-child(2)>a{
        color: #000;
        line-height: 56px;
        font-weight: normal;
        float: left;
        margin-right: 40px;
    }
    .search{
        width:160px;
        height:40px;
        margin-top: 6px;
        margin-right: 10px;
        border-radius:20px;
        float: right;
        position: relative;
    }
    .search>input{
        width:140px;
        height:100%;
        padding-left: 20px;
        border: none;
        background:#eeeeee;
        color: #a0a0a0;
        border-radius:20px;
        outline: none;
    }
    .search-icon{
        width:30px;
        height:30px;
        border-radius: 50%;
        position: absolute;
        top:5px;
        right: 5px;
        z-index: 3;
        font-family:iconfont;
        color: #fff;
        text-align: center;
        line-height: 30px;
        cursor: pointer;
    }
    .login{
        width:60px;
        height:30px;
        border: 1px solid #4A80D6;
        border-radius: 15px;
        line-height: 30px;
        text-align: center;
        position: absolute;
        top:10px;
        right:80px;
        font-size: 12px;
    }
    .login>a{
        display: block;
        width:100%;
        height:100%;
        color:#4A80D6;
    }
    .login:hover{
        background: #4A80D6;
    }
    .login:hover>a{
        color: #fff;
    }
    .reg{
        width:60px;
        height:30px;
        border: 1px solid #4A80D6;
        border-radius: 15px;
        line-height: 30px;
        text-align: center;
        position: absolute;
        top:10px;
        right:10px;
        font-size: 12px;
    }
    .reg>a{
        display: block;
        width:100%;
        height:100%;
        color:#4A80D6;
    }
    .reg:hover{
        background: #4A80D6;
    }
    .reg:hover>a{
        color: #fff;
    }
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
    <div class="login"><a href="">登录</a></div>
    <div class="reg"><a href="">注册</a></div>
</header>
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
        <li><a href="index.php?m=index&f=remen" target="bottom">&#xe649; 热门</a></li>
    </ul>
    <div class="bottom">
        <iframe src="" id="iframeId" name="bottom" frameborder="0" scrolling="no"></iframe>
    </div>
</section>
</body>
</html><?php }
}
