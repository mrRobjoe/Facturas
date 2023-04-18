<?php
/* Smarty version 4.3.0, created on 2023-04-10 20:37:24
  from 'C:\xampp\htdocs\facturas\view\template\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643457647f2538_11231132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '050b5553b60ba0fbd9fcfe42cf06be7150279f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\facturas\\view\\template\\menu.tpl',
      1 => 1681151665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643457647f2538_11231132 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav navbar-nav">
<li class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Factura
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="index.php?accion=abrir_principal">Lista de Facturas</a></li>
		<li><a href="index.php?accion=create_invoice">Crear Factura</a></li>
	</ul>
</li>
<?php if ($_smarty_tpl->tpl_vars['userid']->value != '') {?>
	<li class="dropdown">
		<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Conectado: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#">Mi Cuenta</a></li>
			<li><a href="action.php?action=logout">Salir</a></li>
		</ul>
	</li>
<?php }?>
</ul>
<br /><br /><br /><br />
<?php }
}
