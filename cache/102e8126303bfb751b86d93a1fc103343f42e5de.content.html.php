<?php
/* Smarty version 3.1.30, created on 2017-11-08 06:20:51
  from "D:\wamp\www\web\mvcyyy\template\index\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02a243a1bce5_63763925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd412f731048a84d1430079c5aa12f0e932400bda' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\content.html',
      1 => 1510113305,
      2 => 'file',
    ),
    '4b496d97467d4d702e9e4b8b46bce5e5585fb480' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\header.html',
      1 => 1510122042,
      2 => 'file',
    ),
    '72ff2a97af36feb9cb351198170590f96bf9ff82' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\footer.html',
      1 => 1510113406,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a02a243a1bce5_63763925 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!--<div class="headImg">-->
            <!--<img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt="">-->
        <!--</div>-->
        <!--<div class="angle"></div>-->
        <!--<ul class="selects">-->
            <!--<li><a href="">&#xe662; 我的主页</a></li>-->
            <!--<li><a href="index.php?m=index&f=personal">&#xe600; 个人中心</a></li>-->
            <!--<li><a href="">&#xe645; 退出登录</a></li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</header>-->
<style>
    .article{
        width:700px;
        height:auto;
        margin:0 auto;
        margin-top: 50px;
    }
    .article-main{
        width:600px;
        margin:0 auto;
    }
    .article-main>span{
        font-size: 32px;
        font-weight: bold;
    }
    .author{
        width:100%;
        height:50px;
        padding:35px 0px;
    }
    .head{
        width:50px;
        height:50px;
        border-radius: 50%;
        float: left;
        border:1px solid #DFDFDF;
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
    .message{
        width:auto;
        height:100%;
        float: left;
        margin-left: 20px;
    }
    .message1{
        width:100%;
        height:23px;
    }
    .message1>span{
        float: left;
    }
    .message1>span>a{
        color: #000;
        font-size: 12px;
    }
    .guanzhu{
        width:50px;
        height:20px;
        float: left;
        margin-top: 3px;
        margin-left: 10px;
        border: 1px solid #4A80D6;
        border-radius: 10px;
        box-sizing: border-box;
        text-align: center;
    }
    .guanzhu>a{
        display: block;
        width:100%;
        height:100%;
        color: #4A80D6;
        font-size: 12px;
    }
    .message2{
        width:100%;
        height:20px;
        color: #9d9d9d;
        font-size: 11px;
        margin-top:5px;
    }
    .peitu{
        width:100%;
        height:400px;
    }
    .peitu>img{
        width:100%;
        height:100%;
    }
    .page{
        width:100%;
        height:auto;
        padding-bottom: 30px;
    }
    .page>h4{
        line-height: 190px;
        font-weight: normal;
    }
    .page>p{
        line-height: 32px;
    }
    .writer{
        width:660px;
        height:120px;
        padding:20px;
        margin-top: 30px;
        background: #f1f1f1;
        border:1px solid #DFDFDF;
        border-radius: 5px;
    }
    .bottom{
        width:100%;
        height:50px;
        position: relative;
        padding-bottom: 20px;
        border-bottom: 1px solid #DFDFDF;
    }
    .big-guanzhu{
        width:80px;
        height:30px;
        border-radius: 15px;
        position: absolute;
        top:0;
        right:0;
        bottom: 0;
        margin:auto;
        background: #4A80D6;
        text-align: center;
    }
    .big-guanzhu>a{
        display: block;
        width:100%;
        height:100%;
        font-size: 16px;
        line-height: 30px;
        color: #fff;
    }
    .writer>p{
        font-size: 12px;
        color: #9d9d9d;
        line-height: 68px;
    }
    .zanshang{
        width:100%;
        height:150px;
        border-bottom:1px solid #DFDFDF;
    }
    .zanshang>p{
        text-align: center;
        margin:0 auto;
        line-height: 50px;
    }
    .zhichi{
        width:90px;
        height:40px;
        background: #4A80D6;
        margin:0 auto;
        border-radius: 20px;
        text-align: center;
        line-height: 40px;
    }
    .zhichi>a{
        display: block;
        width:100%;
        height:100%;
        color: #fff;
    }
    .circle{
        width:40px;
        height:40px;
        margin:0 auto;
        margin-top: 15px;
        border-radius: 50%;
    }
    .circle>a{
        display: block;
        width:100%;
        height:100%;
    }
    .circle>a>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .like{
        width:100%;
        height:50px;
        padding:40px 0px;
    }
    .xihuan{
        width:180px;
        height:100%;
        float: left;
        border-radius: 25px;
        border:1px solid #4A80D6;
        box-sizing: border-box;
        text-align: center;
        line-height: 50px;
        transition: all 0.6s;
    }
    .xihuan>a{
        display: block;
        width:100%;
        height:100%;
        color: #4A80D6;
        font-family: iconfont;
    }
    .xihuan:hover{
        background: rgba(74,128,214,0.3);
    }
    .share{
        width:180px;
        height:100%;
        float: right;
        display: flex;
        justify-content: space-between;
    }
    .share>li{
        width:50px;
        height:50px;
        border-radius: 50%;
        border: 1px solid #9d9d9d;
        text-align: center;
        line-height: 50px;
    }
    .share>li:hover{
        background: #dfdfdf;
    }
    .share>li>a{
        display: block;
        width:100%;
        height:100%;
        font-size: 22px;
        font-family: iconfont;
    }
    .comment{
        width:700px;
        height:auto;
        margin:0 auto;
        margin-top: 30px;
    }
    .fabiao{
        width:100%;
        height:90px;
    }
    .author-head{
        width:40px;
        height:40px;
        float: left;
        border-radius: 50%;
        border: 1px solid #9d9d9d;
    }
    .author-head>img{
        width:100%;
        height:100%;
        border-radius: 50%;
    }
    .fabiao>textarea{
        float: left;
        resize: none;
        background: #DFDFDF;
        border-radius: 5px;
        padding:10px;
        margin-left: 20px;
        outline: none;
    }
    .fabiao>input{
        width:70px;
        height:30px;
        float: right;
        background: #4A80D6;
        border-radius: 15px;
        border: none;
        margin-left: 10px;
        margin-top: 35px;
        outline: none;
        color: #fff;
    }
    .pinglun{
        width:700px;
        height:auto;
        margin:0 auto;
        margin-top:30px;
        border-top:1px solid #DFDFDF;
    }
    .pinglun-main{
        width:100%;
        height:auto;
    }
    .pinglun-main>li{
        width:100%;
        height:auto;
        padding:15px 0px;
        border-bottom: 1px solid #DFDFDF;
    }
    .authors{
        width:100%;
        height:40px;
    }
    .pingluns{
        width:100%;
        height:auto;
        padding:20px 0px;
    }
    .pingluns>h4{
        font-weight: normal;
    }
    .zan{
        width:100%;
        height:14px;
        padding:5px 0px;
        font-size: 14px;
    }
    .zans{
        float: left;
    }
    .zans>a{
        font-family: iconfont;
        color: #9d9d9d;
    }
    .zans>a:hover{
        color: #000;
    }
    .huifu{
        font-size: 14px;
        float: left;
        margin-left: 20px;
    }
    .huifu>a{
        font-family: iconfont;
        color: #9d9d9d;
    }
    .huifu>a:hover{
        color: #000;
    }
    .other{
        width:100%;
        margin-top: 20px;
        padding: 0px 20px;
        border-left: 2px solid #DFDFDF;
        box-sizing: border-box;
        height:auto;
    }
    .other>li{
        width:100%;
        height:55px;
        padding:10px;
        border-bottom: 1px dashed #DFDFDF;
    }
    .other>li:last-child{
        border-bottom:none;
    }
    .other>li>span{
        display: block;
        font-size: 14px;
        color: #000;
        margin-bottom: 10px;
    }
    .other>li>span>a{
        color: #4A80D6;
    }
    .time{
        float: left;
        font-size: 14px;
        color: #9d9d9d;
    }
</style>
    <section class="article">
        <div class="article-main">
            <span>时间告诉你，毕业一年后，真的有比一纸文凭更重要的东西</span>
            <div class="author">
                <div class="head"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <div class="message">
                    <div class="message1">
                        <span><a href="">潇洒小兔</a></span>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </div>
                    <div class="message2">
                        2017.10.26 07:01 字数 2260 阅读 4908 评论 94 喜欢 210
                    </div>
                </div>
            </div>
        </div>
        <div class="peitu">
            <img src="http://localhost/web/mvcyyy/static/img/t.jpg" alt="">
        </div>
        <div class="page">
            <h4>文/潇洒小猫</h4>
            <p><b>01</b><br><br>
                实不相瞒，高中的我，性格很内向，从不主动说话，也不主动做事，同学只记得我这人，老师只知道我这名，不拔尖但也不调皮，平凡得就宛如沙滩上的一小粒沙子，丝毫没有成就感和存在感。﻿<br><br>
                可能是上天看倦了我的平凡，便格外开了一次恩让我感受一下不一样的生活。高一下学期一次偶然的机会，作文竟获得了全县第一，跟随老师去了重庆最好的大学参加比赛，那时候别提自己有多开心了，仿佛中了五百万彩票。<br><br>
                那时候我的心飞扬，坐在窗明几净的教室里，看着窗外人来人往的大学生，别提我有多羡慕了，恨不得此刻的我就是以准大学生的身份坐在教室里，每天能够做自己想做的事情，过自己想要的生活，那样多好啊！﻿﻿那次比赛所有的开销都是由学校负责的，还顺便去附近有名的景点玩了几个小时，吃了一顿火锅，酒足饭饱，那是我第一次真正感受到文字带给我的魅力。﻿﻿那天晚上，我一个人睡在宾馆的床上，开始想象10年后的自己，那时候我刚好26岁，处于一个正好青春的年纪，不知道我是过着怎样的生活，又该在为什么而努力呢？﻿﻿<br><br>
                想着想着，不禁睡意袭来，第二天起了个大早乘车回学校。回去后，朋友问了我很多问题，全是关于大学的，我兴高采烈地把自己看到的很多新鲜的东西都告诉了她，并且还和她说我们一起努力，争取能够考上那所大学。﻿正是因为缺乏自信，往往容易在稍微一点的成就中高估自己，失去重心，变得飘飘然。﻿﻿﻿<br><br>
                ﻿﻿<b>02</b><br><br>
                实不相瞒，高中的我，性格很内向，从不主动说话，也不主动做事，同学只记得我这人，老师只知道我这名，不拔尖但也不调皮，平凡得就宛如沙滩上的一小粒沙子，丝毫没有成就感和存在感。﻿<br><br>
                可能是上天看倦了我的平凡，便格外开了一次恩让我感受一下不一样的生活。高一下学期一次偶然的机会，作文竟获得了全县第一，跟随老师去了重庆最好的大学参加比赛，那时候别提自己有多开心了，仿佛中了五百万彩票。<br><br>
                那时候我的心飞扬，坐在窗明几净的教室里，看着窗外人来人往的大学生，别提我有多羡慕了，恨不得此刻的我就是以准大学生的身份坐在教室里，每天能够做自己想做的事情，过自己想要的生活，那样多好啊！﻿﻿那次比赛所有的开销都是由学校负责的，还顺便去附近有名的景点玩了几个小时，吃了一顿火锅，酒足饭饱，那是我第一次真正感受到文字带给我的魅力。﻿﻿那天晚上，我一个人睡在宾馆的床上，开始想象10年后的自己，那时候我刚好26岁，处于一个正好青春的年纪，不知道我是过着怎样的生活，又该在为什么而努力呢？﻿﻿<br><br>
                想着想着，不禁睡意袭来，第二天起了个大早乘车回学校。回去后，朋友问了我很多问题，全是关于大学的，我兴高采烈地把自己看到的很多新鲜的东西都告诉了她，并且还和她说我们一起努力，争取能够考上那所大学。﻿正是因为缺乏自信，往往容易在稍微一点的成就中高估自己，失去重心，变得飘飘然。﻿﻿﻿<br><br>
                ﻿﻿<b>03</b><br><br>
                实不相瞒，高中的我，性格很内向，从不主动说话，也不主动做事，同学只记得我这人，老师只知道我这名，不拔尖但也不调皮，平凡得就宛如沙滩上的一小粒沙子，丝毫没有成就感和存在感。﻿<br><br>
                可能是上天看倦了我的平凡，便格外开了一次恩让我感受一下不一样的生活。高一下学期一次偶然的机会，作文竟获得了全县第一，跟随老师去了重庆最好的大学参加比赛，那时候别提自己有多开心了，仿佛中了五百万彩票。<br><br>
                那时候我的心飞扬，坐在窗明几净的教室里，看着窗外人来人往的大学生，别提我有多羡慕了，恨不得此刻的我就是以准大学生的身份坐在教室里，每天能够做自己想做的事情，过自己想要的生活，那样多好啊！﻿﻿那次比赛所有的开销都是由学校负责的，还顺便去附近有名的景点玩了几个小时，吃了一顿火锅，酒足饭饱，那是我第一次真正感受到文字带给我的魅力。﻿﻿那天晚上，我一个人睡在宾馆的床上，开始想象10年后的自己，那时候我刚好26岁，处于一个正好青春的年纪，不知道我是过着怎样的生活，又该在为什么而努力呢？﻿﻿<br><br>
                想着想着，不禁睡意袭来，第二天起了个大早乘车回学校。回去后，朋友问了我很多问题，全是关于大学的，我兴高采烈地把自己看到的很多新鲜的东西都告诉了她，并且还和她说我们一起努力，争取能够考上那所大学。﻿正是因为缺乏自信，往往容易在稍微一点的成就中高估自己，失去重心，变得飘飘然。﻿﻿﻿
            </p>
        </div>
        <div class="writer">
            <div class="bottom">
                <div class="head"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
                <div class="message">
                    <div class="message1">
                        <span><a href="">潇洒小兔</a></span>
                        <div class="big-guanzhu"><a href="">+ 关注</a></div>
                    </div>
                    <div class="message2">
                        2017.10.26 07:01 字数 2260 阅读 4908 评论 94 喜欢 210
                    </div>
                </div>
            </div>
            <p>大三师范生 《大学生活》专题副编辑，电台签约作者 微博:怡安女孩 个人公众号：怡安学姐 （那儿是一个有趣的地方）欢迎</p>
        </div>
        <div class="zanshang">
            <p>你的一次赞赏，是对我的莫大鼓励</p>
            <div class="zhichi"><a href="">赞赏支持</a></div>
            <div class="circle"><a href=""><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></a></div>
        </div>
        <div class="like">
            <div class="xihuan"><a href="">&#xe65c; 喜欢 | 158</a></div>
            <ul class="share">
                <li><a href="" style="color: #00BB29">&#xe601;</a></li>
                <li><a href="" style="color: #E05244">&#xe658;</a></li>
                <li><a href="" style="color: #4A80D6">&#xe63b;</a></li>
            </ul>
        </div>
    </section>
    <section class="comment">
        <div class="fabiao">
            <div class="author-head"><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></div>
            <textarea name="" id="" cols="80" rows="3"></textarea>
            <input type="submit" value="发 送">
        </div>
    </section>
    <section class="pinglun">
        <ul class="pinglun-main">
            <li>
                <div class="authors">
                    <div class="author-head"><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></div>
                    <div class="message">
                        <div class="message1">
                            <span><a href="">小文青</a></span>
                        </div>
                        <div class="message2">
                            2楼 2017.10.26 07:01
                        </div>
                    </div>
                </div>
                <div class="pingluns">
                    <h4>电影，看别人的演绎，体会自己的人生，就要看你心里成熟了多少，又去做了多少</h4>
                </div>
                <div class="zan">
                    <div class="zans"><a href="">&#xe64d; 7人赞</a></div>
                    <div class="huifu"><a href="">&#xe802; 5人回复</a></div>
                </div>
            </li>
            <li>
                <div class="authors">
                    <div class="author-head"><img src="http://localhost/web/mvcyyy/static/img/q8.jpg" alt=""></div>
                    <div class="message">
                        <div class="message1">
                            <span><a href="">小文青</a></span>
                        </div>
                        <div class="message2">
                            2楼 2017.10.26 07:01
                        </div>
                    </div>
                </div>
                <div class="pingluns">
                    <h4>电影，看别人的演绎，体会自己的人生，就要看你心里成熟了多少，又去做了多少</h4>
                </div>
                <div class="zan">
                    <div class="zans"><a href="">&#xe64d; 7人赞</a></div>
                    <div class="huifu"><a href="">&#xe802; 5人回复</a></div>
                </div>
                <ul class="other">
                    <li>
                        <span><a href="">@潇洒小兔</a>：<a href="">@小文青</a>一部电影，一本书，一场人生。</span>
                        <div class="time">2017.10.26 07:01</div>
                        <div class="huifu"><a href="">&#xe802; 回复</a></div>
                    </li>
                    <li>
                        <span><a href="">@潇洒小兔</a>：<a href="">@小文青</a>肖申克的救赎 我的最爱 推荐给你们</span>
                        <div class="time">2017.10.26 07:01</div>
                        <div class="huifu"><a href="">&#xe802; 回复</a></div>
                    </li>
                    <li>
                        <span><a href="">@潇洒小兔</a>：<a href="">@小文青</a>一部电影，一本书，一场人生。</span>
                        <div class="time">2017.10.26 07:01</div>
                        <div class="huifu"><a href="">&#xe802; 回复</a></div>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <footer>
    <ul class="select">
        <li><a href="">关于悦读</a></li>
        <li><a href="">联系我们</a></li>
        <li><a href="">加入我们</a></li>
    </ul>
    <p>©2012-2017 上海佰集信息科技有限公司 / 悦读 / 沪ICP备11018329号-5 / 沪公网安备31010402002252号 /    沪公网安备31010402002252号 /     举报电话：021-34770013</p>
</footer>
<style>
    footer{
        width:700px;
        height:100px;
        margin:0 auto;
        margin-top:50px;
    }
    .select{
        width:200px;
        height:12px;
        display: flex;
        justify-content: space-between;
    }
    .select>li{
        width:32%;
        height:100%;
    }
    .select>li>a{
        color: #9d9d9d;
        font-size: 12px;
        line-height: 12px;
    }
    .select>li>a:hover{
        color: #4A80D6;
    }
    footer>p{
        margin-top:15px;
        color: #dcdcdc;
        font-size: 12px;
    }
</style>
</body>
</html><?php }
}
