<?php 
	session_start();
	if(!$_SESSION['usuario']){ header('Location: ../index.php');
	}
?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/style.css">