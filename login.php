<div>
	<form action="php/verificar.php" name="frmlogin" id="frmlogin" class="form-signin" method="post">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="title">Plase Login</h2>
			</div>
			<div class="col-xs-6">
				<div class="cerrar"> <a href="javascript:cerrar('#divlogin')" class="a_login"> <img src="img/closed.png" alt="Cerrar"> </a> </div>
			</div>
		</div>
		<input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Codigo Carnet" required="" autofocus="">
		<input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Contraseña" required="">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
		
		<br>
		<a href="javascript: mostrar('#divreg')" class="btn btn-lg btn-default btn-block">Registrate</a>

		<div id="login"></div>
	</form>
</div>