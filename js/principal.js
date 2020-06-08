$(document).ready(function(e) {
    $("#divlogin").draggable();
});

function mostrar( form ){
	$( form ).show(500);	
}

function cerrar( form ){
	$( form ).hide( 'explode' );
}

//AJAX
function ajax_datos(url2, datos, elementoHTML){
	$.ajax({
		url 	: url2,
		data	: datos,
		type	: "POST",
		success	: function(respuesta){
			if (respuesta == "true") {
				var redic = function () {
					document.location.href = 'e-learning';
				}

				setInterval(redic, 500);
			} else if (respuesta == "false") {
				alert("Error! Nombre mayor a 3 digitos");
			} else {
				alert("Error! Dato Vacio");
			}
		},
		error	: function(e){
			alert("Error...!"+e);
		}
	});
}

function login() {
	var data = $('#frmlogin').serialize();
	ajax_datos('php/verificar.php', data, '#login');
	limpiar();
}

function limpiar() {
	$("#frmlogin input[type='text']").val('');
}