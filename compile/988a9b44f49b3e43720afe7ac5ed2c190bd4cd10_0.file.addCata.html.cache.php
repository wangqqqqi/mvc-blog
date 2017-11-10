<?php
/* Smarty version 3.1.30, created on 2017-11-07 03:58:31
  from "D:\wamp\www\web\mvcyyy\template\admin\addCata.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a012f67b58055_14673016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '988a9b44f49b3e43720afe7ac5ed2c190bd4cd10' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\addCata.html',
      1 => 1510027107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a012f67b58055_14673016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '106295a012f67b02447_36725556';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>添加分类</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/icon.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="margin:20px 0;"></div>
<div class="easyui-panel" title="添加分类" style="width:100%;max-width:400px;padding:30px 60px;">
    <form id="ff" action="index.php?m=admin&f=cata&a=addCataCon" method="post">
        <div style="margin-bottom:20px">
            <input class="easyui-combotree" name="pid" data-options="url:'index.php?m=admin&f=cata&a=showCata',method:'get',label:'选择分类:',labelPosition:'top'" style="width:100%">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cname" style="width:100%" data-options="label:'分类名称:',required:true">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cinfo" style="width:100%;height:60px" data-options="label:'分类简介:',multiline:true">
        </div>
        <div style="text-align:center;padding:5px 0">
            <input type="submit" value="添加" class="easyui-linkbutton" style="width: 80px">
            <!--<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">添加</a>-->
            <!--<a href="javascript:void(0)" class="easyui-linkbutton" onclick="clear Form()" style="width:80px">清除</a>-->
            <input type="button" value="清除" class="easyui-linkbutton" onclick="clearForm()" style="width: 80px">
        </div>
    </form>
</div>
<?php echo '<script'; ?>
>
    function submitForm(){
        $('#ff').form('submit');
    }
    function clearForm(){
        $('#ff').form('clear');
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
