<?php
/* Smarty version 4.3.0, created on 2023-04-10 20:05:55
  from 'C:\xampp\htdocs\facturas\view\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64345003a0a813_26932573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6aa24f60afed8aec6e1d6b0afe9c709e2dfc280f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturas\\view\\template\\login.tpl',
      1 => 1681149954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64345003a0a813_26932573 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
  <div class="col-xs-6">

<div class="heading">
		<h2>Test Examen</h2>
	</div>
<div class="login-form">
<form action="index.php?accion=validar_login" method="post">
    <h2 class="text-center">Iniciar Sesión</h2>
<div class="form-group">
<?php if ($_smarty_tpl->tpl_vars['loginError']->value != '') {?>
<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['loginError']->value;?>
</div>
<?php }?>
</div>
<div class="form-group">
    <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus required>
</div>
<div class="form-group">
    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
</div>
<div class="form-group">
    <button type="submit" name="login" class="btn btn-primary" style="width: 100%;"> Acceder </button>
</div>
<div class="clearfix">
<label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
</div>
</form>
</div>

</div>
<div class="col-xs-6">-</div>
</div>
</div>
<?php }
}
