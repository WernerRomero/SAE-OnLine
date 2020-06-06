<div>
    <form action="javascript: reg_user();" name="frmreg_user" id="frmreg_user" class="form-signin" method="post">
        <div class="row">
            <div class="col-xs-6">
                <h2 class="title">Por favor Registrate</h2>
            </div>
            <div class="col-xs-6">
                <div class="cerrar"><a href="javascript:cerrar('#divreg')" class="a_login"><img src="img/closed.png" alt="cerrar"></a></div>
            </div>
        </div>
        <input type="text"      class="form-control" name="txtNom"   id="txtNom" placeholder="Nombre"    required pattern="[a-zA-Z- ]{4,65}">
        <input type="text"      class="form-control" name="txtApe"   id="txtApe" placeholder="Apellido"  required pattern="[a-zA-Z- ]{4,65}">
        <input type="text"      class="form-control" name="txtdir"   id="txtdir" placeholder="Direccion" required pattern="[a-zA-Z- ]{4,65}">
        <input type="text"      class="form-control" name="txtEmail" id="txtEmail" placeholder="Correo Electronico" >
        <input type="text"      class="form-control" name="txtUser"  id="txtUser" placeholder="Numero de Carnet" >
        <input type="password"  class="form-control" name="txtCon"   id="txtCon" placeholder="Contraseña" >

        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
    </form>
    <div class="divregform"></div>
</div>