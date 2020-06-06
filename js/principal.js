$(document).ready(function(e) {
    $("#divlogin, #divreg").draggable();
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
			$(elementoHTML).html(respuesta);
		},
		error	: function(e){
			alert("Error...!"+e);
		}
	});
}

function reg_user(){
	var data = $('#frmreg_user').serialize();
	ajax_datos('php/registro.php', data, '#divregform');
	alert("Registro Efectuado con exito...!");
}