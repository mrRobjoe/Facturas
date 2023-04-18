<ul class="nav navbar-nav">
<li class="dropdown">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Factura
	<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="index.php?accion=abrir_principal">Lista de Facturas</a></li>
		<li><a href="index.php?accion=create_invoice">Crear Factura</a></li>

	</ul>
</li>
{if $userid != ""}
	<li class="dropdown">
		<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Conectado: {$user}
		<span class="caret"></span></button>
		<ul class="dropdown-menu">
			<li><a href="#">Mi Cuenta</a></li>
			<li><a href="action.php?action=logout">Salir</a></li>
		</ul>
	</li>
{/if}
</ul>
<br /><br /><br /><br />
