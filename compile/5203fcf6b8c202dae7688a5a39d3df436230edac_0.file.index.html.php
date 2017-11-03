<?php
/* Smarty version 3.1.30, created on 2017-10-31 03:49:36
  from "D:\wamp\www\web\mvcyyy\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f7f2d03ce0e2_59378701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5203fcf6b8c202dae7688a5a39d3df436230edac' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\index.html',
      1 => 1509421773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7f2d03ce0e2_59378701 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index.css">
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
    <section id="banner">
        <ul class="banner">
            <li style="z-index: 2"><a href=""><img src="<?php echo IMG_URL;?>
/b1.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/b2.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/q1.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/q5.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/sbanner.jpg" alt=""></a></li>
        </ul>
        <ul class="button">
            <li> < </li>
            <li> > </li>
        </ul>
        <ul class="thumb" style="z-index: 3">
            <li style="transform: scale(1.15)"><a href=""><img src="<?php echo IMG_URL;?>
/b1.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/b2.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/q1.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/q5.jpg" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_URL;?>
/sbanner.jpg" alt=""></a></li>
        </ul>
    </section>
    <section class="main">
        <div class="main-left">
            <ul class="catagory">
                <li><a href="index.php?m=index&f=zhuanti">
                    <img src="<?php echo IMG_URL;?>
/six1.jpg" alt=""><div class="cataname">手绘</div>
                </a></li>
                <li><a href="index.php?m=index&f=zhuanti">
                    <img src="<?php echo IMG_URL;?>
/six2.jpg" alt=""><div class="cataname">旅行，在路上</div>
                </a></li>
                <div class="more"><a href="index.php?m=index&f=more">查看更多热门专题 > </a></div>
            </ul>
            <ul class="message">
                <li>
                    <div class="message-left">
                        <div class="head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <span class="username"><a href="index.php?m=index&f=zhuye">潇洒小兔</a></span>
                        <span class="time">10小时前</span><br><br>
                        <h4 class="conname"><a href="index.php?m=index&f=content">我想劝你，别让熬夜摧毁你的生活</a></h4>
                        <p class="con">01 在我小的时候，熬夜还是一件不常见的事情。那个时候身边的人的作息都十分有规律，唯一需要熬夜的日子只有年关。 然而现在，熬夜似乎已经成了一种生活的常态。 并不是有非要熬夜才...</p>
                        <div class="cata"><a href="">心理</a></div>
                        <ul class="read">
                            <li><a href="index.php?m=index&f=content">&#xe63f; 2323</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe603; 55</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe634; 43</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe640; 1</a></li>
                        </ul>
                    </div>
                    <div class="message-right">
                        <img src="<?php echo IMG_URL;?>
/six2.jpg" alt="">
                    </div>
                </li>
                <li>
                    <div class="message-left">
                        <div class="head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <span class="username"><a href="index.php?m=index&f=zhuye">潇洒小兔</a></span>
                        <span class="time">10小时前</span><br><br>
                        <h4 class="conname"><a href="index.php?m=index&f=content">我想劝你，别让熬夜摧毁你的生活</a></h4>
                        <p class="con">01 在我小的时候，熬夜还是一件不常见的事情。那个时候身边的人的作息都十分有规律，唯一需要熬夜的日子只有年关。 然而现在，熬夜似乎已经成了一种生活的常态。 并不是有非要熬夜才...</p>
                        <div class="cata"><a href="">心理</a></div>
                        <ul class="read">
                            <li><a href="index.php?m=index&f=content">&#xe63f; 2323</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe603; 55</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe634; 43</a></li>
                            <li><a href="index.php?m=index&f=content">&#xe640; 1</a></li>
                        </ul>
                    </div>
                    <div class="message-right">
                        <img src="<?php echo IMG_URL;?>
/six2.jpg" alt="">
                    </div>
                </li>
            </ul>
            <div class="read-more"><a href="">悦读更多</a></div>
        </div>
        <div class="main-right">
            <div class="ribao">
                <ul class="ribao-head">
                    <li>悦读日报</li>
                    <li><a href="index.php?m=index&f=zhuanti">查看往期</a></li>
                </ul>
                <ul class="ribao-main">
                    <li><a href="index.php?m=index&f=content">简婶揭秘013 —— 为什么社交软件让我们越来越寂寞？</a></li>
                    <li><a href="index.php?m=index&f=content">简影喵009—简书电影@釜山国际电影节系列①：《追·踪》</a></li>
                </ul>
                <ul class="ribao-head">
                    <li>推荐作者</li>
                    <li><a href="">换一批</a></li>
                </ul>
                <ul class="author">
                    <li>
                        <div class="autor-head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <div class="author-name">
                            <h5><a href="index.php?m=index&f=zhuye">名贵的考拉熊</a></h5>
                            <h6>写了10.8k字 6.1k喜欢</h6>
                        </div>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </li>
                    <li>
                        <div class="autor-head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <div class="author-name">
                            <h5><a href="index.php?m=index&f=zhuye">名贵的考拉熊</a></h5>
                            <h6>写了10.8k字 6.1k喜欢</h6>
                        </div>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </li>
                    <li>
                        <div class="autor-head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <div class="author-name">
                            <h5><a href="index.php?m=index&f=zhuye">名贵的考拉熊</a></h5>
                            <h6>写了10.8k字 6.1k喜欢</h6>
                        </div>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </li>
                    <li>
                        <div class="autor-head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <div class="author-name">
                            <h5><a href="index.php?m=index&f=zhuye">名贵的考拉熊</a></h5>
                            <h6>写了10.8k字 6.1k喜欢</h6>
                        </div>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </li>
                    <li>
                        <div class="autor-head">
                            <a href="index.php?m=index&f=zhuye">
                                <img src="<?php echo IMG_URL;?>
/q8.jpg" alt="">
                            </a>
                        </div>
                        <div class="author-name">
                            <h5><a href="index.php?m=index&f=zhuye">名贵的考拉熊</a></h5>
                            <h6>写了10.8k字 6.1k喜欢</h6>
                        </div>
                        <div class="guanzhu"><a href="">+ 关注</a></div>
                    </li>
                </ul>
                <div class="all"><a href="index.php?m=index&f=all">查看全部 > </a></div>
            </div>
        </div>
    </section>
    <footer>
        <ul class="select">
            <li><a href="">关于悦读</a></li>
            <li><a href="">联系我们</a></li>
            <li><a href="">加入我们</a></li>
        </ul>
        <p>©2012-2017 上海佰集信息科技有限公司 / 悦读 / 沪ICP备11018329号-5 / 沪公网安备31010402002252号 /<br>    沪公网安备31010402002252号 /     举报电话：021-34770013</p>
    </footer>
</body>
</html><?php }
}
