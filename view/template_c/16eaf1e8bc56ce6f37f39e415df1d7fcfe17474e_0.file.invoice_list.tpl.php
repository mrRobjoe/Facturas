<?php
/* Smarty version 4.3.0, created on 2023-04-17 06:52:21
  from 'C:\xampp\htdocs\Programacion3\Sesion12\facturas\view\template\invoice_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643cd085d0a8e9_03682171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16eaf1e8bc56ce6f37f39e415df1d7fcfe17474e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion3\\Sesion12\\facturas\\view\\template\\invoice_list.tpl',
      1 => 1681704790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_643cd085d0a8e9_03682171 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
<h2 class="title">Sistema de facturación PHP</h2>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table id="data-table" class="table table-condensed table-striped">
<thead>
  <tr>
    <th width="7%">Fac. No.</th>
    <th width="15%">Fecha Creación</th>
    <th width="35%">Cliente</th>
    <th width="15%">Factura Total</th>
    <th width="3%"></th>
    <th width="3%"></th>
    <th width="3%"></th>
  </tr>
</thead>

<?php
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['invoiceList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total !== 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
<tr>
  <td><?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_id'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_date'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_receiver_name'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_total_after_tax'];?>
</td>
  <td><a href="index.php?accion=print_invoice&invoice_id=<?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_id'];?>
" title="Imprimir Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></div></a></td>
  <td><a href="index.php?accion=edit_invoice&update_id=<?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_id'];?>
"  title="Editar Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></div></a></td>
  <td><a href="#" id="<?php echo $_smarty_tpl->tpl_vars['invoiceList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['order_id'];?>
" class="deleteInvoice"  title="Borrar Factura"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></a></td>
</tr>

<?php
}
}
?>

</table>
</div>
<?php }
}
