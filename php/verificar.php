<?php 
	session_start();
	
	$usuario = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';

	if (strlen($usuario) > 3) {
		$_SESSION['usuario'] = $_POST['txtUsername'];
		echo 'true';
		

		//echo '<p class="accep">Acceptar</p>';
	} elseif (strlen($usuario <= 3)) {
		echo 'false';
		//echo '<p class="error">Error! Nombre mayor a 3 digitos</p>';
	} else {
		echo 'algo';
		//echo '<p class="error">Error! Dato Vacio</p>';
	}
	
?>