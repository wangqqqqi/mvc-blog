<?php
/* Smarty version 3.1.30, created on 2017-11-08 06:30:50
  from "D:\wamp\www\web\mvcyyy\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02a49a984923_55639480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab26013822189ffc9b18d14ffa5ffa83e50f00d' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\user.html',
      1 => 1510122647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02a49a984923_55639480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '53745a02a49a928987_53983401';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->

    <link href="<?php echo CSS_URL;?>
/bs3/dpl-min.css" rel="stylesheet">
    <link href="<?php echo CSS_URL;?>
/bs3/bui-min.css" rel="stylesheet">
</head>
<style>
    td{
        text-align: center;
    }
</style>
<body>
<div class="demo-content">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>用户名：</label>
                    <div class="controls">
                        <input type="hidden" name="uid">
                        <input name="uname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>用户密码：</label>
                    <div class="controls">
                        <input name="upass" type="password" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">用户等级：</label>
                    <div class="controls">
                        <input name="ulevel" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">用户电话：</label>
                    <div class="controls">
                        <input name="uphone" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>

    <!-- script start -->
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/showUser.js"><?php echo '</script'; ?>
>
    <!-- script end -->
</div>
</body>
</html><?php }
}
