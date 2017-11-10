<?php
/* Smarty version 3.1.30, created on 2017-11-08 06:13:54
  from "D:\wamp\www\web\mvcyyy\template\index\more.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02a0a27691a4_17563324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d77bb0f478d8f916dbbb2f931b259f6af384f88' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\more.html',
      1 => 1509420390,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a02a0a27691a4_17563324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更多</title>
    <script src="http://localhost/web/mvcyyy/static/js/jquery-3.2.1.js"></script>
    <script src="http://localhost/web/mvcyyy/static/js/index.js"></script>
</head>
<style>
    @font-face {
        font-family: 'iconfont';  /* project id 449584 */
        src: url('http://at.alicdn.com/t/font_449584_0kcd4idcubnsif6r.eot');
        src: url('http://at.alicdn.com/t/font_449584_0kcd4idcubnsif6r.eot?#iefix') format('embedded-opentype'),
        url('http://at.alicdn.com/t/font_449584_0kcd4idcubnsif6r.woff') format('woff'),
        url('http://at.alicdn.com/t/font_449584_0kcd4idcubnsif6r.ttf') format('truetype'),
        url('http://at.alicdn.com/t/font_449584_0kcd4idcubnsif6r.svg#iconfont') format('svg');
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
    main{
        width:944px;
        height:auto;
        margin:0 auto;
    }
    .main{
        width:100%;
        height:auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .main>li{
        width:250px;
        height:280px;
        padding:0px 15px;
        margin-top: 90px;
        border:1px solid #DFDFDF;
        background: #F8F8F8;
        border-radius: 5px;
        transition: all 0.6s;
        position: relative;
        text-align: center;
    }
    .main>li:hover{
        transform:translateY(-8px);
        box-shadow: 0px 2px 10px 0px rgba(157,157,157,0.5);
    }
    .head-img{
        width:70px;
        height:70px;
        border-radius: 4px;
        border:1px solid #f8f8f8;
        position: absolute;
        top:-35px;
        left:0;
        right:0;
        margin:auto;
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
    .main>li>h3{
        margin-top: 50px;
    }
    .main>li>p{
        font-size: 14px;
        margin-top:20px;
    }
    .guanzhu{
        width:100px;
        height:40px;
        border-radius: 20px;
        background: green;
        margin:0 auto;
        margin-top: 20px;
        text-align: center;
        color: #fff;
        line-height: 40px;
    }
    .connum{
        width:100%;
        height:40px;
        border-top: 1px solid #DFDFDF;
        margin-top: 30px;
        text-align: center;
        line-height: 40px;
        font-size: 14px;
    }
    .more{
        width:200px;
        height:40px;
        border-radius: 20px;
        background: #9d9d9d;
        margin:20px auto;
        color: #fff;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
    }
</style>
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
    <main>
        <ul class="main">
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
            <li>
                <div class="head-img"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <h3>散文</h3>
                <p>一缕墨香伴清茶。花开总有花落，但至少曾经绚烂的绽放过。</p>
                <div class="guanzhu">+ 关注</div>
                <div class="connum">131720篇文章 · 1345.2K人关注</div>
            </li>
        </ul>
        <div class="more">加载更多</div>
    </main>
</body>
</html><?php }
}
