<?php 
	if (strpos($_SERVER['REQUEST_URI'], "pages") === false ){
	 	$path="";
	 }else{
	 	$path="../";
	 } 
	
	include $path."db/connection.php";
	
	$userid = $_SESSION["userid"];
	$sql_user = "SELECT * from usuarios where iduser = '".$userid."' ";
	$user = $mysqli->query($sql_user);
	if($user->num_rows>0){
		$row = $user->fetch_assoc();

		$userid = $row["iduser"];
		$nombre = $row["nombre"];
		$apellidos = $row["apellidos"];
		$email = $row["email"];
		$contrasenya = $row["contrasenya"];
		$pais = $row["pais"];
		$telefono = $row["telefono"];
		$cod_postal = $row["cod_postal"];
    }
	
?>