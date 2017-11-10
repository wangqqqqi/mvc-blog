<?php
/* Smarty version 3.1.30, created on 2017-11-08 06:06:57
  from "D:\wamp\www\web\mvcyyy\template\index\zhuye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a029f01196c91_20386492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb9255c920624062075570e6a8beaa70159e202' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\zhuye.html',
      1 => 1510121173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5a029f01196c91_20386492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14365a029f01151165_12214843';
$_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/zhuye.js"><?php echo '</script'; ?>
>
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
        border-radius: 50%;
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
        border-radius: 50%;
    }
    .xiangqing{
        width:auto;
        height:70px;
        padding:10px;
        float: left;
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
                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
            </a>
        </div>
        <div class="xiangqing">
            <h3>努力努力再努力qqqqi</h3>
            <ul class="num">
                <li>
                    <div class="nums">23</div>
                    <div class="names">关注</div>
                </li>
                <li>
                    <div class="nums">56</div>
                    <div class="names">粉丝</div>
                </li>
                <li>
                    <div class="nums">3</div>
                    <div class="names">文章</div>
                </li>
                <li style="border-right: none">
                    <div class="nums">32</div>
                    <div class="names">收获喜欢</div>
                </li>
            </ul>
        </div>
        <div class="guanzhu">+ 关注</div>
    </div>
    <ul class="headline">
        <li><a href="index.php?m=index&f=zhuye&a=guanzhu" target="bottom">&#xe666; 关注</a></li>
        <li><a href="index.php?m=index&f=zhuye&a=fensi" target="bottom">&#xe667; 粉丝</a></li>
        <li><a href="index.php?m=index&f=zhuye&a=wenzhang" target="bottom">&#xe687; 文章</a></li>
        <li><a href="index.php?m=index&f=zhuye&a=pinglun" target="bottom">&#xe632; 评论</a></li>
        <li><a href="index.php?m=index&f=zhuye&a=remen" target="bottom">&#xe649; 热门</a></li>
    </ul>
    <div class="bottom">
        <iframe src="" id="iframeId" name="bottom" frameborder="0" scrolling="no"></iframe>
    </div>
</section>
</body>
</html><?php }
}
