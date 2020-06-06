<?php
	
	include('config.php');

	$nom = isset($_POST['txtNom']) ? $_POST['txtNom'] : '';
	$ape = isset($_POST['txtApe']) ? $_POST['txtApe'] : '';
	
	$dir = isset($_POST['txtdir']) ? $_POST['txtdir'] : '';
	$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';

	$user = isset($_POST['txtUser']) ? $_POST['txtUser'] : '';
	$cont = isset($_POST['txtCon']) ? $_POST['txtCon'] : '';

	$tipo = "user";
	
	$sql = 	"insert into usuario VALUES('','$nom','$ape','$dir', '$email', '$user','$cont', '$tipo' )";
	$resp = mysqli_query($link, $sql) or die(mysqli_error($link));
?>