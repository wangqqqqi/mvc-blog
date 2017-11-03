<?php
/* Smarty version 3.1.30, created on 2017-11-02 09:49:56
  from "D:\wamp\www\web\mvcyyy\template\admin\addAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59faea4459f549_34906612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c51a9895e985d1378269bef68799842045abea78' => 
    array (
      0 => 'D:\\wamp\\www\\web\\mvcyyy\\template\\admin\\addAdmin.html',
      1 => 1509615887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59faea4459f549_34906612 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加管理员</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.css">
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body,html{
        width:100%;
        height:100%;
        overflow: hidden;
    }
</style>
<body>
<form class="form-horizontal" action="index.php?m=admin&f=index&a=addAdminCon" method="post">
    <div class="form-group">
        <label  class="col-sm-2 control-label">用户名：</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="aname" placeholder="请输入用户名">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密 码：</label>
        <div class="col-sm-10">
            <input type="password" name="apass" class="form-control" id="inputPassword3" placeholder="请输入密码">
        </div>
    </div>
    <div class="form-group">
        <div class="checkbox">
            <label  class="col-sm-2 control-label">角色选择：</label>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['title']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <label class="radio-inline">
                    <input type="radio" name="roleid" id="inlineRadio1" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['roleid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>

                </label>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
