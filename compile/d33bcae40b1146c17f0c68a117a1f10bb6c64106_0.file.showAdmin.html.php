<?php
/* Smarty version 3.1.30, created on 2017-11-02 15:25:36
  from "D:\wamp\www\web\mvcyyy\template\admin\showAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fb38f0eb4538_42058028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33bcae40b1146c17f0c68a117a1f10bb6c64106' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\showAdmin.html',
      1 => 1509636110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fb38f0eb4538_42058028 (Smarty_Internal_Template $_smarty_tpl) {
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
    button>a{
        display: block;
        width:100%;
        height:100%;
        color: #fff;
    }
</style>
<body>
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
            <td><button class="btn btn-danger"><a href="">删除</a></button></td>
            <td><button class="btn btn-info"><a href="">编辑</a></button></td>
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
