<div class="container">

  <title>Sistema facturación - Examen</title>
  <script src="js/invoice.js"></script>
  <link href="css/style.css" rel="stylesheet">
  <!--<?php include('container.php');?>-->
  <div class="container content-invoice">
      	<form action="" id="invoice-form" method="post" class="invoice-form" role="form" novalidate>
  	    	<div class="load-animate animated fadeInUp">
  		    	<div class="row">
  		    		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
  		    			<h1 class="title">Sistema de Facturación</h1>
  						{include file="menu.tpl"}
  		    		</div>
  		    	</div>
  		      	<input id="currency" type="hidden" value="$">
  		    	<div class="row">
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  		      			<h3>De,</h3>
  						{$user}<br>
  						{$address}<br>
  						{$mobile}<br>
  						{$email}<br>
  		      		</div>
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right">
  		      			<h3>Para,</h3>
  		      			<div class="form-group">
  							<input value="{$invoiceValues['order_receiver_name']}" type="text" class="form-control" name="companyName" id="companyName" placeholder="Nombre de Empresa" autocomplete="off">
  						</div>
  						<div class="form-group">
  							<textarea class="form-control" rows="3" name="address" id="address" placeholder="Su Dirección">{$invoiceValues['order_receiver_address']}</textarea>
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

  {$count=1}
  {section name=index loop=$invoiceItems}

  <tr>
      <td><input class="itemRow" type="checkbox"></td>
      <td><input type="text" value="{$invoiceItems[index].item_code}" name="productCode[]" id="productCode_{$count}" class="form-control" autocomplete="off"></td>
      <td><input type="text" value="{$invoiceItems[index].item_name}" name="productName[]" id="productName_{$count}" class="form-control" autocomplete="off"></td>
      <td><input type="number" value="{$invoiceItems[index].order_item_quantity}" name="quantity[]" id="quantity_{$count}" class="form-control quantity" autocomplete="off"></td>
      <td><input type="number" value="{$invoiceItems[index].order_item_price}" name="price[]" id="price_{$count}" class="form-control price" autocomplete="off"></td>
      <td><input type="number" value="{$invoiceItems[index].order_item_final_amount}" name="total[]" id="total_{$count}" class="form-control total" autocomplete="off"></td>
      <input type="hidden" value="{$invoiceItems[index].order_item_id}" class="form-control" name="itemId[]">
  </tr>
  {$count=+1}
  {/section}
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
  							<textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes">{$invoiceValues['note']}</textarea>
  						</div>
  						<br>
  						<div class="form-group">
  							<input type="hidden" value="{$userid}" class="form-control" name="userId">
  							<input type="hidden" value="{$invoiceValues['order_id']}" class="form-control" name="invoiceId" id="invoiceId">
  			      			<input data-loading-text="Updating Invoice..." type="submit" name="invoice_btn" value="Save Invoice" class="btn btn-success submit_btn invoice-save-btm">
  			      		</div>

  		      		</div>
  		      		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
  						<span class="form-inline">
  							<div class="form-group">
  								<label>Subtotal: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="{$invoiceValues['order_total_before_tax']}" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Tax Rate: &nbsp;</label>
  								<div class="input-group">
  									<input value="{$invoiceValues['order_tax_per']}" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tax Rate">
  									<div class="input-group-addon">%</div>
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Tax Amount: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="{$invoiceValues['order_total_tax']}" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Tax Amount">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Total: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="{$invoiceValues['order_total_after_tax']}" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Amount Paid: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="{$invoiceValues['order_amount_paid']}" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Amount Paid">
  								</div>
  							</div>
  							<div class="form-group">
  								<label>Amount Due: &nbsp;</label>
  								<div class="input-group">
  									<div class="input-group-addon currency">$</div>
  									<input value="{$invoiceValues['order_total_amount_due']}" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Amount Due">
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
