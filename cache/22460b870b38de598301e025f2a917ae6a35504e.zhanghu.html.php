<?php
/* Smarty version 3.1.30, created on 2017-10-30 11:00:05
  from "D:\wamp\www\web\mvcyyy\template\index\zhanghu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f70635eaaee2_50073822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd40cf8a4fc20050d5c109b04f092d1f3dfa63e11' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\zhanghu.html',
      1 => 1509091982,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59f70635eaaee2_50073822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的账户</title>
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
        text-decoration: none;
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
    .yue{
        width:auto;
        height:70px;
        font-size: 16px;
        line-height: 70px;
    }
    .yue>h4{
        font-weight: normal;
        color: #9d9d9d;
        float: left;
    }
    .yuan{
        float: left;
        margin-left: 30px;
        font-size: 30px;
        line-height: 60px;
    }
    .edit{
        width:auto;
        height:40px;
        padding:25px 0px;
    }
    .add{
        width:80px;
        height:100%;
        float: left;
        text-align: center;
        line-height: 40px;
        border-radius: 20px;
        border:1px solid green;
        box-sizing: border-box;
    }
    .add>a{
        display: block;
        width:100%;
        height:100%;
        color: green;
    }
    .add:hover{
        background: green;
    }
    .add:hover>a{
        color: #fff;
    }
    .tixian{
        width:80px;
        height:100%;
        float: left;
        margin-left: 30px;
        text-align: center;
        line-height: 40px;
        border-radius: 20px;
        border:1px solid green;
        box-sizing: border-box;
    }
    .tixian>a{
        display: block;
        width:100%;
        height:100%;
        color: green;
    }
    .tixian:hover{
        background: green;
    }
    .tixian:hover>a{
        color: #fff;
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
<section class="zhanghu">
    <div class="yue">
        <h4>账户余额</h4>
        <div class="yuan">7.77</div>元
    </div>
</section>
<section class="edit">
    <div class="add"><a href="">充值</a></div>
    <div class="tixian"><a href="">提现</a></div>
</section>
</body>
</html><?php }
}
