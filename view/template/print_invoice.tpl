<!--{$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceValues['order_date']))}-->
<div class="container">
	<h2 class="title">Facturación</h2>

{include file="menu.tpl"}

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
	Nombres : {$invoiceValues['order_receiver_name']}<br />
	Dirección de facturación : {$invoiceValues['order_receiver_address']}<br />
	</td>
	<td width="35%">
	Factura No. : {$invoiceValues['order_id']}<br />
	Factura Fecha : {$invoiceDate}<br />
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

{section name=index loop=$invoiceItems}
	<tr>
	<!--<td align="left">{$count}</td>-->
	<td align="left">{$invoiceItems[index].item_code}</td>
	<td align="left">{$invoiceItems[index].item_name}</td>
	<td align="left">{$invoiceItems[index].order_item_quantity}</td>
	<td align="left">{$invoiceItems[index].order_item_price}</td>
	<td align="left">{$invoiceItems[index].order_item_final_amount}</td>
	</tr>

{/section}

<tr>
<td align="right" colspan="5"><b>Sub Total</b></td>
<td align="left"><b>{$invoiceValues['order_total_before_tax']}</b></td>
</tr>
<tr>
<td align="right" colspan="5"><b>Tasa Impuesto :</b></td>
<td align="left">{$invoiceValues['order_tax_per']}</td>
</tr>
<tr>
<td align="right" colspan="5">Monto Tasa: </td>
<td align="left">{$invoiceValues['order_total_tax']}</td>
</tr>
<tr>
<td align="right" colspan="5">Total: </td>
<td align="left"> {$invoiceValues['order_total_after_tax']} </td>
</tr>
<tr>
<td align="right" colspan="5">Monto Pagado:</td>
<td align="left"> {$invoiceValues['order_amount_paid']} </td>
</tr>
<tr>
<td align="right" colspan="5"><b>Monto adeudado:</b></td>
<td align="left">{$invoiceValues['order_total_amount_due']}</td>
</tr>

	</table>
	</td>
	</tr>
	</table>

</div>
