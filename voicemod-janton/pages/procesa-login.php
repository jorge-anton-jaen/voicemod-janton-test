<?php 
	include "../db/connection.php";
	
	$usuario = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["userpass"]);

	$sql_user_login = "SELECT nombre, iduser from usuarios where email = '".$usuario."' and contrasenya = '".$password."'";
	$user = $mysqli->query($sql_user_login);
	if($user->num_rows>0){
		while($row = $user->fetch_assoc()) {

			$logged_user = $row["nombre"];
			$userid = $row["iduser"];
    	}
	
		session_start();
		$_SESSION["usuario"] = $logged_user;
		$_SESSION["email"] = $usuario;
		$_SESSION["userid"] = $userid;
		header("Location:../index.php");
	}else{
		session_start();
		$_SESSION["message"]="Credenciales no válidas.";		
		header("Location:../index.php");		
	}

	
?>