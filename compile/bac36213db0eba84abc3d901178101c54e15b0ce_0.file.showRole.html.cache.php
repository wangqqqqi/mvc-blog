<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:24:51
  from "D:\wamp\www\web\mvcyyy\template\admin\showRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad6538b0e56_05612825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac36213db0eba84abc3d901178101c54e15b0ce' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\showRole.html',
      1 => 1509591605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fad6538b0e56_05612825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1892159fad653767449_40669784';
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
                    <label class="control-label"><s>*</s>角色名称：</label>
                    <div class="controls">
                        <input type="hidden" name="roleid">
                        <input name="rname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">内容权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'增加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查询',value:'4' }] }">
                        <input type="hidden" name="con">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">留言权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'增加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查询',value:'4' }] }">
                        <input type="hidden" name="message">
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
/showRole.js"><?php echo '</script'; ?>
>
    <!-- script end -->
</div>
</body>
</html><?php }
}
