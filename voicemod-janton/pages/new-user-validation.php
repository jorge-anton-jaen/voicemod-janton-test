<?php
	include "../db/connection.php";

	$nombre = htmlspecialchars($_POST["nombre"]);
	$apellidos = htmlspecialchars($_POST["apellidos"]);
	$email = htmlspecialchars($_POST["email"]);
	$contrasenya = htmlspecialchars($_POST["contrasenya"]);
	$pais = htmlspecialchars($_POST["pais"]);
	$telefono = htmlspecialchars($_POST["telefono"]);
	$postal = htmlspecialchars($_POST["postal"]);


	
	$empty_fields = (empty($nombre) || empty($apellidos) || empty($email) || empty($contrasenya) || empty($pais) || empty($telefono) || empty($postal));
	if ( $empty_fields === TRUE ){
			session_start();
			$_SESSION["new-user-error"]="Todos los campos son obligatorios";	
			header("Location:new-user-form.php");
	}else{

		//comprueba que no exista el usuario
		$sql_valid_user = "SELECT count(*) as total from usuarios where email = '".$email."' ";
		echo $sql_valid_user;
		$count = $mysqli->query($sql_valid_user);

		$result = $count->fetch_assoc();
		if($result["total"]>0){
			//mail repetido;
			session_start();
			$_SESSION["new-user-error"]="El email ya existe, utilice otro.";	
			header("Location:new-user-form.php");

		}else{
			
			// inserta el usuario en bbdd
			if (!$mysqli->query("insert into `voicemod-janton`.`usuarios` ( `nombre`, `apellidos`, `email`, `contrasenya`, `pais`, `telefono`, `cod_postal` ) values ('".$nombre."', '".$apellidos."', '".$email."', '".$contrasenya."', '".$pais."', '".$telefono."', '".$postal."')")) {
			  
			}else{
				//alta correcta 
				session_start();
		 		$_SESSION["message"]="Bienvenid@ " . $nombre . " ya puedes logarte."; 
		 		$_SESSION["new-user-error"]="";
			 header("Location:../");

			}
		}

		$mysqli->close();
	}// if $empty_fields
?>