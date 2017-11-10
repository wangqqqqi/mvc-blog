<?php
/* Smarty version 3.1.30, created on 2017-11-10 08:27:24
  from "D:\wamp\www\web\mvcyyy\template\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0562ec819436_38314343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0221cff9dd6f1c4290955e097aa3cbddf0365e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\personal.html',
      1 => 1510120617,
      2 => 'file',
    ),
    '4b496d97467d4d702e9e4b8b46bce5e5585fb480' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\index\\header.html',
      1 => 1510302380,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5a0562ec819436_38314343 (Smarty_Internal_Template $_smarty_tpl) {
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
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: userlogin in D:\wamp\www\web\mvcyyy\compile\4b496d97467d4d702e9e4b8b46bce5e5585fb480_0.file.header.html.cache.php on line <i>43</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0006</td><td bgcolor='#eeeeec' align='right'>369960</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0096</td><td bgcolor='#eeeeec' align='right'>737360</td><td bgcolor='#eeeeec'>route->set(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>49</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0588</td><td bgcolor='#eeeeec' align='right'>752336</td><td bgcolor='#eeeeec'>personal->init(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\route.class.php' bgcolor='#eeeeec'>...\route.class.php<b>:</b>31</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0590</td><td bgcolor='#eeeeec' align='right'>756696</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp\www\web\mvcyyy\modules\index\personal.class.php' bgcolor='#eeeeec'>...\personal.class.php<b>:</b>12</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0590</td><td bgcolor='#eeeeec' align='right'>756696</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1126</td><td bgcolor='#eeeeec' align='right'>804008</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1188</td><td bgcolor='#eeeeec' align='right'>878768</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1194</td><td bgcolor='#eeeeec' align='right'>905192</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1324</td><td bgcolor='#eeeeec' align='right'>961608</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967680</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967680</td><td bgcolor='#eeeeec'>content_5a029ca9e3ef06_88487803(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967816</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->_subTemplateRender(  )</td><td title='D:\wamp\www\web\mvcyyy\compile\dd0221cff9dd6f1c4290955e097aa3cbddf0365e_0.file.personal.html.cache.php' bgcolor='#eeeeec'>...\dd0221cff9dd6f1c4290955e097aa3cbddf0365e_0.file.personal.html.cache.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.1470</td><td bgcolor='#eeeeec' align='right'>971496</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>348</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.1473</td><td bgcolor='#eeeeec' align='right'>976768</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.1473</td><td bgcolor='#eeeeec' align='right'>976768</td><td bgcolor='#eeeeec'>content_5a0562cf0d93c6_14778271(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in D:\wamp\www\web\mvcyyy\compile\4b496d97467d4d702e9e4b8b46bce5e5585fb480_0.file.header.html.cache.php on line <i>43</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0006</td><td bgcolor='#eeeeec' align='right'>369960</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0096</td><td bgcolor='#eeeeec' align='right'>737360</td><td bgcolor='#eeeeec'>route->set(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>49</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0588</td><td bgcolor='#eeeeec' align='right'>752336</td><td bgcolor='#eeeeec'>personal->init(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\route.class.php' bgcolor='#eeeeec'>...\route.class.php<b>:</b>31</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0590</td><td bgcolor='#eeeeec' align='right'>756696</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp\www\web\mvcyyy\modules\index\personal.class.php' bgcolor='#eeeeec'>...\personal.class.php<b>:</b>12</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0590</td><td bgcolor='#eeeeec' align='right'>756696</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.1126</td><td bgcolor='#eeeeec' align='right'>804008</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.1188</td><td bgcolor='#eeeeec' align='right'>878768</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.1194</td><td bgcolor='#eeeeec' align='right'>905192</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.1324</td><td bgcolor='#eeeeec' align='right'>961608</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967680</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967680</td><td bgcolor='#eeeeec'>content_5a029ca9e3ef06_88487803(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>0.1466</td><td bgcolor='#eeeeec' align='right'>967816</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->_subTemplateRender(  )</td><td title='D:\wamp\www\web\mvcyyy\compile\dd0221cff9dd6f1c4290955e097aa3cbddf0365e_0.file.personal.html.cache.php' bgcolor='#eeeeec'>...\dd0221cff9dd6f1c4290955e097aa3cbddf0365e_0.file.personal.html.cache.php<b>:</b>26</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>0.1470</td><td bgcolor='#eeeeec' align='right'>971496</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>348</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>0.1473</td><td bgcolor='#eeeeec' align='right'>976768</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>15</td><td bgcolor='#eeeeec' align='center'>0.1473</td><td bgcolor='#eeeeec' align='right'>976768</td><td bgcolor='#eeeeec'>content_5a0562cf0d93c6_14778271(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
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

<script src="http://localhost/web/mvcyyy/static/js/personal.js"></script>
<link rel="stylesheet" href="http://localhost/web/mvcyyy/static/css/personal.css">
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
