<?php
/* Smarty version 4.3.0, created on 2023-04-17 07:11:43
  from 'C:\xampp\htdocs\Programacion3\Sesion12\facturas\view\template\edit_invoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643cd50fa95968_66216902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf0a048510c854b6cf23be89196f466fb839a32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programacion3\\Sesion12\\facturas\\view\\template\\edit_invoice.tpl',
      1 => 1681708301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_643cd50fa95968_66216902 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">

  <title>Sistema facturación - Examen</title>
  <?php echo '<script'; ?>
 src="js/invoice.js"><?php echo '</script'; ?>
>
  <link href="css/style.css" rel="stylesheet">
  <!--<?php echo '<?php'; ?>
 include('container.php');<?php echo '?>'; ?>
-->
  <div class="container content-invoice">
      	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate>
  	    	<div class="load-animate animated fadeInUp">
  		    	<div class="row">
  		    		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
  		    			<h1 class="title">Sistema de Facturación</h1>
  						<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  		    		</div>
  		    	</div>
  		      	<input id="currency" type="hidden" value="$">
  		    	<div class="row">
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  		      			<h3>De,</h3>
  						<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<br>
  						<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
<br>
  						<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
<br>
  						<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br>
  		      		</div>
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
  		      			<h3>Para,</h3>
  		      			<div class="form-group">
  							<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_receiver_name'];?>
" type="text" class="form-control" name="companyName" id="companyName" placeholder="Nombre de Empresa" autocomplete="off">
  						</div>
  						<div class="form-group">
  							<textarea class="form-control" rows="3" name="address" id="address" placeholder="Su Dirección"><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_receiver_address'];?>
</textarea>
  						</div>

  		      		</div>
  		      	</div>
  		      	<div class="row">
  		      		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <table class="table table-bordered table-hover" id="invoiceItem">
  <tr>
      <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
  <th width="15%">Prod. No</th>
  <th width="38%">Nombre Producto</th>
  <th width="15%">Cantidad</th>
  <th width="15%">Precio</th>
  <th width="15%">Total</th>
  </tr>

  <?php $_smarty_tpl->_assignInScope('count', 1);?>
  <?php
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['invoiceItems']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total !== 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>

  <tr>
      <td><input class="itemRow" type="checkbox"></td>
      <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['item_code'];?>
" name="productCode[]" id="productCode_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="form-control" autocomplete="off"></td>
      <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['item_name'];?>
" name="productName[]" id="productName_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="form-control" autocomplete="off"></td>
      <td><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_quantity'];?>
" name="quantity[]" id="quantity_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="form-control quantity" autocomplete="off"></td>
      <td><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_price'];?>
" name="price[]" id="price_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="form-control price" autocomplete="off"></td>
      <td><input type="number" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_final_amount'];?>
" name="total[]" id="total_<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" class="form-control total" autocomplete="off"></td>
      <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invoiceItems']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['order_item_id'];?>
" class="form-control" name="itemId[]">
  </tr>
  <?php $_smarty_tpl->_assignInScope('count', +1);?>
  <?php
}
}
?>
  </table>
  		      		</div>
  		      	</div>
  		      	<div class="row">
  		      		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
  		      			<button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
  		      			<button class="btn btn-success" id="addRows" type="button">+ Add More</button>
  		      		</div>
  		      	</div>
  		      	<div class="row">
  		      		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
  		      			<h3>Notes: </h3>
  		      			<div class="form-group">
  							<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"><?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['note'];?>
</textarea>
  						</div>
  						<br>
  						<div class="form-group">
  							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" class="form-control" name="userId">
  							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_id'];?>
" class="form-control" name="invoiceId" id="invoiceId">
  			      			<input data-loading-text="Updating Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
  			      		</div>

  		      		</div>
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  						<span class="form-inline">
  							<div class="form-group">
  								<label>Subtotal: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_before_tax'];?>
" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Tax Rate: &nbsp;</label>
  								<div class="input-group">
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_tax_per'];?>
" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
  									<div class="input-group-addon">%</div>
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Tax Amount: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_tax'];?>
" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Total: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_after_tax'];?>
" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Amount Paid: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_amount_paid'];?>
" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Amount Due: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="<?php echo $_smarty_tpl->tpl_vars['invoiceValues']->value['order_total_amount_due'];?>
" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
  								</div>
  							</div>
  						</span>
  					</div>
  		      	</div>
  		      	<div class="clearfix"></div>
  	      	</div>
  		</form>
      </div>

</div>
<?php }
}
