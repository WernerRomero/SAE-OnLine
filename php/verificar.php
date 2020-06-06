<?php 
	session_start();
	include("config.php");

	if(isset($_POST['txtUsername']) && !empty($_POST['txtUsername']) && isset($_POST['txtPassword']) && !empty($_POST['txtPassword']) ){
		$sel = mysqli_query($link, 
			"select nombre, apellido, usuario, password, tipo_usuario
			from usuario
			where usuario='$_POST[txtUsername]' ")or die(mysqli_error($link));
		$session = mysqli_fetch_assoc($sel);

		if($_POST['txtPassword']==$session['password']){
			
			if($session['tipo_usuario']=='user'){
				$_SESSION['usuario']=$_POST['txtUsername'];
				header('Location: ../e-learning/');
			}else{
				$_SESSION['usuario']=$_POST['txtUsername'];
				header('Location: ../e-learning/tema');
			}
		}else{
			//echo "<p>Combinacion Erronea</p>";
			header('Location: ../index.php');
		}
	}else{
		// echo "<p>Debes de llenar ambos Campos</p>";	
		header('Location: ../index.php');
	}
?>