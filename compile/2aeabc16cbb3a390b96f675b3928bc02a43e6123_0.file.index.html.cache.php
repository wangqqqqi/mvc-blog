<?php
/* Smarty version 3.1.30, created on 2017-11-01 06:59:02
  from "D:\wamp\www\web\mvcyyy\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f970b6ed1b59_87940139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aeabc16cbb3a390b96f675b3928bc02a43e6123' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\index.html',
      1 => 1509446496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f970b6ed1b59_87940139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2221359f970b6e962e5_10769708';
?>
<!DOCTYPE HTML>
<html>
 <head>
  <title> BUI 管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo CSS_URL;?>
/dpl-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo CSS_URL;?>
/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo CSS_URL;?>
/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
        <a href="http://www.builive.com" title="文档库地址" target="_blank"><!-- 仅仅为了提供文档的快速入口，项目中请删除链接 -->
          <span class="lp-title-port">BUI</span><span class="dl-title-text">前端框架</span>
        </a>
      </div>

    <div class="dl-log">欢迎，<a href="index?m=admin&f=login&a=logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">管理员管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">用户管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">内容管理</div></li>
        <!--<li class="nav-item"><div class="nav-item-inner nav-supplier">详情页</div></li>-->
        <!--<li class="nav-item"><div class="nav-item-inner nav-marketing">图表</div></li>-->
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/bui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/config.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/common/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/main.js"><?php echo '</script'; ?>
>
 </body>
</html>
<?php }
}
