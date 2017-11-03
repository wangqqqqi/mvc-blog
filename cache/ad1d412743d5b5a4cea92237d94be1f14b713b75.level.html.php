<?php
/* Smarty version 3.1.30, created on 2017-10-30 11:00:03
  from "D:\wamp\www\web\mvcyyy\template\index\level.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f70633db0932_34520510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67cb17b004ed13f4bc7c6423355233c22b44360b' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\level.html',
      1 => 1509090616,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f70633db0932_34520510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的等级</title>
</head>
<style>
    @font-face {
        font-family: 'iconfont';  /* project id 449584 */
        src: url('http://at.alicdn.com/t/font_449584_cjetp5qp1qe3766r.eot');
        src: url('http://at.alicdn.com/t/font_449584_cjetp5qp1qe3766r.eot?#iefix') format('embedded-opentype'),
        url('http://at.alicdn.com/t/font_449584_cjetp5qp1qe3766r.woff') format('woff'),
        url('http://at.alicdn.com/t/font_449584_cjetp5qp1qe3766r.ttf') format('truetype'),
        url('http://at.alicdn.com/t/font_449584_cjetp5qp1qe3766r.svg#iconfont') format('svg');
    }
    *{
        margin:0;
        padding:0;
    }
    .level{
        width:100%;
        height:70px;
        padding:10px 0px;
        border-bottom: 1px solid #DFDFDF;
    }
    .head{
        width:70px;
        height:100%;
        float: left;
        border-radius: 50%;
        border:1px solid #DFDFDF;
        box-sizing: border-box;
    }
    .head>a{
        display: block;
        width:100%;
        height:100%;
    }
    .head>a>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .name{
        width:auto;
        height:100%;
        float: left;
        margin-left:20px;
        line-height: 70px;
    }
    .message{
        width:100%;
        height:auto;
        margin-top: 20px;
    }
    .lv{
        width:50px;
        height:30px;
        float: left;
        background-image: -webkit-linear-gradient(90deg,#F6F3B4 50%,#F9A528);
        box-shadow: 0px 2px 10px 0px rgba(150,52,3,0.4);
        border-radius: 5px;
        text-align: center;
        line-height: 30px;
        color: #963403;
        font-weight: bold;
    }
    .star{
        width:auto;
        height:100%;
        float: left;
        line-height: 30px;
        margin-left: 20px;
        font-family: iconfont;
        color: #F8C944;
    }
</style>
<body>
    <section class="level">
        <div class="head">
            <a href="">
                <img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt="">
            </a>
        </div>
        <div class="name">
            努力努力再努力qqqqi
        </div>
    </section>
    <section class="message">
        <div class="lv">Lv 3</div>
        <div class="star">&#xe644; &#xe644; &#xe644;</div>
    </section>
</body>
</html><?php }
}
