<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:16:15
  from "D:\wamp\www\web\mvcyyy\template\admin\showAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad44f39ed21_27678924',
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
  'includes' => 
  array (
  ),
),false)) {
function content_59fad44f39ed21_27678924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2313359fad44f2f7173_32443471';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看管理员</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>
</td>
            <td><button class="btn btn-danger">删除</button></td>
            <td><button class="btn btn-info"></button>编辑</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
</body>
</html><?php }
}
