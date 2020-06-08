<div>
	<form action="javascript: login()" name="frmlogin" id="frmlogin" class="form-signin" method="post">
		<div class="row">
			<div class="col-xs-6">
				<h2 class="title">Inicio de Sesion</h2>
			</div>
			<div class="col-xs-6">
				<div class="cerrar"> <a href="javascript:cerrar('#divlogin')" class="a_login"> <img src="img/closed.png" alt="Cerrar"> </a> </div>
			</div>
		</div>
		<input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Codigo Carnet" required="" autofocus="">
		<input class="btn btn-lg btn-primary" type="submit" value="Acceder">

		<br>

		<div id="login"></div>
	</form>
</div>