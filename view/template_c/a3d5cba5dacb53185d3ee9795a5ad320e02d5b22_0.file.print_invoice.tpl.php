<?php
/* Smarty version 4.3.0, created on 2023-04-16 09:39:30
  from 'C:\xampp\htdocs\Programacion3\Sesion12\facturas\view\template\print_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643ba6329d48e1_93640785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d5cba5dacb53185d3ee9795a5ad320e02d5b22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion3\\Sesion12\\facturas\\view\\template\\print_invoice.tpl',
      1 => 1681630767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_643ba6329d48e1_93640785 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<?php $_smarty_tpl->_assignInScope('invoiceDate', date("d/M/Y, H:i:s",strtotime($_smarty_tpl->tpl_vars['invoiceValues']->value['order_date'])));?>-->
<div class="container">
	<h2 class="title">Facturación</h2>

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<td colspan="2" align="center" style="font-size:18px"><b>FACTURA</b></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="65%">
	Para,<br />
	<b>RECEPTOR (FACTURA A)</b><br />
	Nombres : <?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_receiver_name'];?>
<br />
	Dirección de facturación : <?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_receiver_address'];?>
<br />
	</td>
	<td width="35%">
	Factura No. : <?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_id'];?>
<br />
	Factura Fecha : <?php echo $_smarty_tpl->tpl_vars['invoiceDate']->value;?>
<br />
	</td>
	</tr>
	</table>
	<br />
	<table width="100%" border="1" cellpadding="5" cellspacing="0">
	<tr>
	<th align="left">Sr No.</th>
	<th align="left">Codigo</th>
	<th align="left">Nombre Producto</th>
	<th align="left">Cantidad</th>
	<th align="left">Precio</th>
	<th align="left">Actual Amt.</th>
	</tr>

<?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['invoiceItems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
	<tr>
	<!--<td align="left"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</td>-->
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['item_code'];?>
</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['item_name'];?>
</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_quantity'];?>
</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_price'];?>
</td>
	<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_final_amount'];?>
</td>
	</tr>

<?php
}
}
?>

<tr>
<td align="right" colspan="5"><b>Sub Total</b></td>
<td align="left"><b><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_before_tax'];?>
</b></td>
</tr>
<tr>
<td align="right" colspan="5"><b>Tasa Impuesto :</b></td>
<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_tax_per'];?>
</td>
</tr>
<tr>
<td align="right" colspan="5">Monto Tasa: </td>
<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_tax'];?>
</td>
</tr>
<tr>
<td align="right" colspan="5">Total: </td>
<td align="left"> <?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_after_tax'];?>
 </td>
</tr>
<tr>
<td align="right" colspan="5">Monto Pagado:</td>
<td align="left"> <?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_amount_paid'];?>
 </td>
</tr>
<tr>
<td align="right" colspan="5"><b>Monto adeudado:</b></td>
<td align="left"><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_amount_due'];?>
</td>
</tr>

	</table>
	</td>
	</tr>
	</table>

</div>
<?php }
}
