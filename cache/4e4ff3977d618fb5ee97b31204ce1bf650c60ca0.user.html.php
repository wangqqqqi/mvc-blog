<?php
/* Smarty version 3.1.30, created on 2017-11-08 09:08:39
  from "D:\wamp\www\web\mvcyyy\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02c9970075d3_17379405',
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
  'cache_lifetime' => 3600,
),true)) {
function content_5a02c9970075d3_17379405 (Smarty_Internal_Template $_smarty_tpl) {
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


    <script src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"></script>
    <script src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"></script>
    <script src="http://g.alicdn.com/bui/bui/1.1.21/config.js"></script>

    <!-- script start -->
    <script src="http://localhost/web/mvcyyy/static/js/showUser.js"></script>
    <!-- script end -->
</div>
</body>
</html><?php }
}
