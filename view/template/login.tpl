

<div class="row">
  <div class="col-xs-6">

<div class="heading">
		<h2>Test Examen</h2>
	</div>
<div class="login-form">
<form action="index.php?accion=validar_login" method="post">
    <h2 class="text-center">Iniciar Sesión</h2>
<div class="form-group">
{if $loginError != "" }
<div class="alert alert-warning">{$loginError}</div>
{/if}
</div>
<div class="form-group">
    <input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus required>
</div>
<div class="form-group">
    <input type="password" class="form-control" name="pwd" placeholder="Password" required>
</div>
<div class="form-group">
    <button type="submit" name="login" class="btn btn-primary" style="width: 100%;"> Acceder </button>
</div>
<div class="clearfix">
<label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme</label>
</div>
</form>
</div>

</div>
<div class="col-xs-6">-</div>
</div>
</div>
