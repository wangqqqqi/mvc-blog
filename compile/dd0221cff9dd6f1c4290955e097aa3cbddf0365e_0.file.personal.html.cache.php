<?php
/* Smarty version 3.1.30, created on 2017-11-08 05:56:57
  from "D:\wamp\www\web\mvcyyy\template\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a029ca9e3ef06_88487803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0221cff9dd6f1c4290955e097aa3cbddf0365e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\personal.html',
      1 => 1510120617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.html' => 1,
  ),
),false)) {
function content_5a029ca9e3ef06_88487803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '98385a029ca9df9531_16981117';
$_smarty_tpl->_subTemplateRender("file:./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/personal.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_URL;?>
/personal.css">
<section class="main">
    <ul class="main-left">
        <li><a href="index.php?m=index&f=personal&a=level" target="right">
            <ul class="name">
                <li>&#xe627;</li>
                <li>我的等级</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=personal&a=car" target="right">
            <ul class="name">
                <li>&#xe605;</li>
                <li>购物车</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=personal&a=dingdan" target="right">
            <ul class="name">
                <li>&#xe604;</li>
                <li>我的订单</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=personal&a=zhanghu" target="right">
            <ul class="name">
                <li>&#xe65e;</li>
                <li>我的账户</li>
            </ul>
        </a></li>
        <li><a href="index.php?m=index&f=personal&a=ziliao" target="right">
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
