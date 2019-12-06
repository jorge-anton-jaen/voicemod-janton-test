<?php 

	if (strpos($_SERVER['REQUEST_URI'], "pages") === false ){
	 	$path="";
	 }else{
	 	$path="../";
	 } 
	
	include $path."db/connection.php";
	
	$userid = htmlspecialchars($_POST["userid"]);
	$nombre = htmlspecialchars($_POST["nombre"]);
	$apellidos = htmlspecialchars($_POST["apellidos"]);
	$email = htmlspecialchars($_POST["email"]);
	$contrasenya = htmlspecialchars($_POST["contrasenya"]);
	$pais = htmlspecialchars($_POST["pais"]);
	$telefono = htmlspecialchars($_POST["telefono"]);
	$cod_postal = htmlspecialchars($_POST["postal"]);
	$_SESSION["edit-user-error"]="Procesando..";	
//valida campos
$empty_fields = (empty($nombre) || empty($apellidos) || empty($email) || empty($contrasenya) || empty($pais) || empty($telefono) || empty($cod_postal));
	if ( $empty_fields === TRUE ){
			session_start();
			$_SESSION["edit-user-error"]="Todos los campos son obligatorios".$nombre.", ". $apellidos.", ".$email.", ".$contrasenya.", ".$telefono.", ".$cod_postal ;	
			header("Location:perfil.php");
	}else{
		
		$sql_valid_mail = "SELECT count(*) as total from usuarios where email = '".$email."' and iduser <> '".$userid."'";
		
		$count = $mysqli->query($sql_valid_mail);

		$result = $count->fetch_assoc();
		if($result["total"]>0){
			//mail repetido;
			session_start();
			$_SESSION["edit-user-error"]="El email ya existe, utilice otro.";	
			header("Location:perfil.php");

		}else{
			//actualiza usuario
			$sql_user = "UPDATE USUARIOS SET nombre='".$nombre."', apellidos='".$apellidos."', email='".$email."', contrasenya='".$contrasenya."', pais='".$pais."', telefono='".$telefono."', cod_postal='".$cod_postal."' where iduser=".$userid;

			if ($mysqli->query($sql_user) === true ){
				$sql_user = "SELECT * from usuarios where iduser=".$userid;
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
					session_destroy();
					session_start();
					$_SESSION["usuario"] = $nombre;
					$_SESSION["edit-user-error"]="Perfil acutalizado";
				}


			}	
		}
	
}
	$_SESSION["user-page"]="perfil";
	header("Location: ../index.php")

?>