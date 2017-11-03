<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:16:15
  from "D:\wamp\www\web\mvcyyy\template\admin\showAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad44f4612c4_89296422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c080b079a57b17dc85bb9182de5fb28d4a22827' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\showAdmin.html',
      1 => 1509610572,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59fad44f4612c4_89296422 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看管理员</title>
    <link rel="stylesheet" href="http://localhost/web/mvcyyy/static/css/bootstrap.css">
</head>
<style>
    tr,th,td{
        text-align: center;
    }
</style>
<body>
aaa
    <table class="table table-bordered text-center">
        <tr>
            <th>姓名</th>
            <th>角色</th>
            <th colspan="2">操作</th>
        </tr>
        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: message in D:\wamp\www\web\mvcyyy\templates_c\5c080b079a57b17dc85bb9182de5fb28d4a22827_0.file.showAdmin.html.cache.php on line <i>48</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0018</td><td bgcolor='#eeeeec' align='right'>370256</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0125</td><td bgcolor='#eeeeec' align='right'>741976</td><td bgcolor='#eeeeec'>route->set(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>49</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0131</td><td bgcolor='#eeeeec' align='right'>761672</td><td bgcolor='#eeeeec'>index->showAdmin(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\route.class.php' bgcolor='#eeeeec'>...\route.class.php<b>:</b>31</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0212</td><td bgcolor='#eeeeec' align='right'>781216</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp\www\web\mvcyyy\modules\admin\index.class.php' bgcolor='#eeeeec'>...\index.class.php<b>:</b>65</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0212</td><td bgcolor='#eeeeec' align='right'>781216</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0230</td><td bgcolor='#eeeeec' align='right'>828528</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0268</td><td bgcolor='#eeeeec' align='right'>903320</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0279</td><td bgcolor='#eeeeec' align='right'>929744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0299</td><td bgcolor='#eeeeec' align='right'>986192</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0924</td><td bgcolor='#eeeeec' align='right'>2287112</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0925</td><td bgcolor='#eeeeec' align='right'>2287112</td><td bgcolor='#eeeeec'>content_59fad44f39ed21_27678924(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in D:\wamp\www\web\mvcyyy\templates_c\5c080b079a57b17dc85bb9182de5fb28d4a22827_0.file.showAdmin.html.cache.php on line <i>48</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0018</td><td bgcolor='#eeeeec' align='right'>370256</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0125</td><td bgcolor='#eeeeec' align='right'>741976</td><td bgcolor='#eeeeec'>route->set(  )</td><td title='D:\wamp\www\web\mvcyyy\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>49</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0131</td><td bgcolor='#eeeeec' align='right'>761672</td><td bgcolor='#eeeeec'>index->showAdmin(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\route.class.php' bgcolor='#eeeeec'>...\route.class.php<b>:</b>31</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0212</td><td bgcolor='#eeeeec' align='right'>781216</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='D:\wamp\www\web\mvcyyy\modules\admin\index.class.php' bgcolor='#eeeeec'>...\index.class.php<b>:</b>65</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0212</td><td bgcolor='#eeeeec' align='right'>781216</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0230</td><td bgcolor='#eeeeec' align='right'>828528</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0268</td><td bgcolor='#eeeeec' align='right'>903320</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>0.0279</td><td bgcolor='#eeeeec' align='right'>929744</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>0.0299</td><td bgcolor='#eeeeec' align='right'>986192</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>0.0924</td><td bgcolor='#eeeeec' align='right'>2287112</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>0.0925</td><td bgcolor='#eeeeec' align='right'>2287112</td><td bgcolor='#eeeeec'>content_59fad44f39ed21_27678924(  )</td><td title='D:\wamp\www\web\mvcyyy\libs\smarty\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>

    </table>
</body>
</html><?php }
}
