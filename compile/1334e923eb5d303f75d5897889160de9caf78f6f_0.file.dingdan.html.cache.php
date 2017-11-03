<?php
/* Smarty version 3.1.30, created on 2017-10-29 15:32:48
  from "D:\wamp\www\web\mvcyyy\template\index\dingdan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f5f4a0430f36_26028392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1334e923eb5d303f75d5897889160de9caf78f6f' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\dingdan.html',
      1 => 1509291165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f5f4a0430f36_26028392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '736559f5f4a03f58e4_78993764';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单</title>
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
        list-style: none;
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
    .state{
        width:600px;
        height:50px;
        border:1px solid #DFDFDF;
        box-sizing: border-box;
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
    }
    .state>li{
        width:14%;
        height:30px;
        padding:10px 0px;
        border-right: 1px dashed #DFDFDF;
        text-align: center;
        line-height: 30px;
        color: #9d9d9d;
    }
    .car-main{
        width:598px;
        height:auto;
        margin-top: 20px;
        padding:15px 0px;
        border:1px solid #DFDFDF;
    }
    .car-main>li{
        width:578px;
        height:30px;
        padding:10px;
    }
    .cars{
        width:100%;
        height:100%;
        display: flex;
        justify-content: space-between;
    }
    .cars>li{
        width:14%;
        height:100%;
        text-align: center;
        line-height: 30px;
        font-size: 12px;
    }
    .cars>li>input{
        width:50px;
        height:30px;
        border-radius: 15px;
        border: 1px solid darkred;
        color: darkred;
        background: none;
        outline: none;
    }
    .ahead{
        width:30px;
        height:30px;
        float: left;
        border-radius: 50%;
        border:1px solid #9d9d9d;
    }
    .ahead>a{
        display: block;
        width:100%;
        height:100%;
    }
    .ahead>a>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .art-name{
        width:auto;
        height:30px;
        float: left;
        margin-left: 20px;
    }
</style>
<body>
<section class="level">
    <div class="head">
        <a href="">
            <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
        </a>
    </div>
    <div class="name">
        努力努力再努力qqqqi
    </div>
</section>
<ul class="state">
    <li style="width: 42%">商品详情</li>
    <li>时间</li>
    <li>金额</li>
    <li>状态</li>
    <li style="border: none;">操作</li>
</ul>
<ul class="car-main">
    <li>
        <ul class="cars">
            <li style="width: 42%;">
                <div class="ahead"><a href="">
                    <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                </a></div>
                <div class="art-name">
                    <h6>不要试图改变它，我们是个过客</h6>
                </div>
            </li>
            <li>2017.10.29</li>
            <li>2元</li>
            <li>已付款</li>
            <li>
                <input type="button" value="删除">
            </li>
        </ul>
    </li>
    <li>
        <ul class="cars">
            <li style="width: 42%;">
                <div class="ahead"><a href="">
                    <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                </a></div>
                <div class="art-name">
                    <h6>不要试图改变它，我们是个过客</h6>
                </div>
            </li>
            <li>2017.10.29</li>
            <li>2元</li>
            <li>待付款</li>
            <li>
                <input type="button" value="删除">
            </li>
        </ul>
    </li>
</ul>
</body>
</html><?php }
}
