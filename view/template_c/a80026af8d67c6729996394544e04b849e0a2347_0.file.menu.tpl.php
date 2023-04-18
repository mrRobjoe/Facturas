<?php
/* Smarty version 4.3.0, created on 2023-04-15 07:18:55
  from 'C:\xampp\htdocs\Programacion3\Sesion12\facturas\view\template\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643a33bfc73e25_72299312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a80026af8d67c6729996394544e04b849e0a2347' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion3\\Sesion12\\facturas\\view\\template\\menu.tpl',
      1 => 1681535818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643a33bfc73e25_72299312 (Smarty_Internal_Template $_smarty_tpl) {
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
