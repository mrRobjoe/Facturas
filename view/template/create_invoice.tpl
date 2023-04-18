

{include file="container.tpl"}
<div class="container content-invoice">
<form action="index.php?accion=create_invoice" id="invoice-form" method="post" class="invoice-form" role="form" >
<div class="load-animate animated fadeInUp">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    <h2 class="title">Sistema de Facturación PHP</h2>

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
        <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Nombre de Empresa" autocomplete="off" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="3" name="address" id="address" placeholder="Su dirección" required></textarea>
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
        <tr>
            <td><input class="itemRow" type="checkbox"></td>
            <td><input type="text" name="productCode[]" id="productCode_1" class="form-control" autocomplete="off" required></td>
            <td><input type="text" name="productName[]" id="productName_1" class="form-control" autocomplete="off" required></td>
            <td><input type="number" name="quantity[]" id="quantity_1" class="form-control quantity" autocomplete="off" required></td>
            <td><input type="number" name="price[]" id="price_1" class="form-control price" autocomplete="off" required></td>
            <td><input type="number" name="total[]" id="total_1" class="form-control total" autocomplete="off"></td>
        </tr>
    </table>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
    <button class="btn btn-danger delete" id="removeRows" type="button">- Borrar</button>
    <button class="btn btn-success" id="addRows" type="button">+ Agregar Más</button>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <h3>Notas: </h3>
    <div class="form-group">
        <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Notas"></textarea>
    </div>
    <br>
    <div class="form-group">
        <input type="hidden" value="{$userid}" class="form-control" name="userId">
        <input data-loading-text="Guardando factura..." type="submit" name="invoice_btn" value="Guardar Factura" class="btn btn-success submit_btn invoice-save-btm">
    </div>

</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <span class="form-inline">
        <div class="form-group">
            <label>Subtotal: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
            </div>
        </div>
        <div class="form-group">
            <label>Tasa Impuesto: &nbsp;</label>
            <div class="input-group">
                <input value="" type="number" class="form-control" name="taxRate" id="taxRate" placeholder="Tasa de Impuestos">
                <div class="input-group-addon">%</div>
            </div>
        </div>
        <div class="form-group">
            <label>Monto Inpuesto: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="taxAmount" id="taxAmount" placeholder="Monto de Impuesto">
            </div>
        </div>
        <div class="form-group">
            <label>Total: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="totalAftertax" id="totalAftertax" placeholder="Total">
            </div>
        </div>
        <div class="form-group">
            <label>Cantidad pagada: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="amountPaid" id="amountPaid" placeholder="Cantidad pagada">
            </div>
        </div>
        <div class="form-group">
            <label>Cantidad debida: &nbsp;</label>
            <div class="input-group">
                <div class="input-group-addon currency">$</div>
                <input value="" type="number" class="form-control" name="amountDue" id="amountDue" placeholder="Cantidad debida">
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

{include file="footer.tpl"}
