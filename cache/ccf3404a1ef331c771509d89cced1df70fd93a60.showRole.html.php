<?php
/* Smarty version 3.1.30, created on 2017-11-02 07:08:09
  from "D:\wamp\www\web\mvcyyy\template\admin\showRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fac459d21935_41893438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c93dc145c7621c683392774e8bc3f04a3e5aedc' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\showRole.html',
      1 => 1509591605,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_59fac459d21935_41893438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>
    <!-- 此文件为了显示Demo样式，项目中不需要引入 -->

    <link href="http://localhost/web/mvcyyy/static/css/bs3/dpl-min.css" rel="stylesheet">
    <link href="http://localhost/web/mvcyyy/static/css/bs3/bui-min.css" rel="stylesheet">

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


    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
    <script src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"></script>
    <script src="http://g.alicdn.com/bui/bui/1.1.21/config.js"></script>

    <!-- script start -->
    <script src="http://localhost/web/mvcyyy/static/js/showRole.js"></script>
    <!-- script end -->
</div>
</body>
</html><?php }
}
