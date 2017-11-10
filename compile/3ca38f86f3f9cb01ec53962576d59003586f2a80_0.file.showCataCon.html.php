<?php
/* Smarty version 3.1.30, created on 2017-11-07 12:10:43
  from "D:\wamp\www\web\mvcyyy\template\admin\showCataCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a01a2c38ae775_37553728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca38f86f3f9cb01ec53962576d59003586f2a80' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\showCataCon.html',
      1 => 1510056635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a01a2c38ae775_37553728 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>查看分类</title>
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
<div style="margin:20px 0;">
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">编辑</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">保存</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">取消</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="del()">删除</a>
</div>
<table id="tg" class="easyui-treegrid" title="分类管理" style="width:700px;height:250px"
       data-options="
				iconCls: 'icon-ok',
				rownumbers: true,
				animate: true,
				collapsible: true,
				fitColumns: true,
				url: 'index.php?m=admin&f=cata&a=tableCata',
				method: 'get',
				idField: 'id',
				treeField: 'cname',
				showFooter: true
			">
    <thead>
    <tr>
        <th data-options="field:'cname',width:100,editor:'text'">分类名称</th>
        <th data-options="field:'cinfo',width:140,align:'right',editor:'text'">分类简介</th>
        <!--<th data-options="field:'begin',width:80,editor:'datebox'">Begin Date</th>-->
        <!--<th data-options="field:'end',width:80,editor:'datebox'">End Date</th>-->
        <!--<th data-options="field:'progress',width:120,formatter:formatProgress,editor:'numberbox'">Progress</th>-->
    </tr>
    </thead>
</table>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/showCata.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
