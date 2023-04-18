

<div class="container">
<h2 class="title">Sistema de facturación PHP</h2>

{include file="menu.tpl"}

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

{section name=x loop=$invoiceList}
<tr>
  <td>{$invoiceList[x].order_id}</td>
  <td>{$invoiceList[x].order_date}</td>
  <td>{$invoiceList[x].order_receiver_name}</td>
  <td>{$invoiceList[x].order_total_after_tax}</td>
  <td><a href="index.php?accion=print_invoice&invoice_id={$invoiceList[x].order_id}" title="Imprimir Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></div></a></td>
  <td><a href="index.php?accion=edit_invoice&update_id={$invoiceList[x].order_id}"  title="Editar Factura"><div class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></div></a></td>
  <td><a href="#" id="{$invoiceList[x].order_id}" class="deleteInvoice"  title="Borrar Factura"><div class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></div></a></td>
</tr>

{/section}

</table>
</div>
