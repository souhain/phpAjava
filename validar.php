<?php

	session_start();
	ob_start();
    include("conexion.php");
     $con=conectar();
     
    $username=$_POST['id'];
	$pass=$_POST['contra'];
            
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");

	$sql2=mysqli_query($mysqli,"SELECT * FROM responsable_obra WHERE id_responsable_obra = '$username'");
	
	if($f2=mysqli_fetch_array($sql2)){

		if($pass==$f2['contra_admin']){
			$_SESSION['usuario'] = 'admin';
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
			$_SESSION['btn'] = 1;
		}
	}
	
	$sql=mysqli_query($mysqli,"SELECT * FROM responsable_obra WHERE id_responsable_obra ='$username'");

	if($f=mysqli_fetch_array($sql)){
		
		if($pass==$f['contra']){
		$_SESSION['usuario'] = 'usuario';	
		header("Location: usuario.php");
		$_SESSION['btn'] = 1;
		}
		else
		{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
			echo "<script>location.href='index.php'</script>";
		}
		}
		else
		{
		echo '<script>alert("ESTE USUARIO NO EXISTE")</script> ';
		echo "<script>location.href='index.php'</script>";	
	}
?>