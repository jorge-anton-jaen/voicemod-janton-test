<html>
<head>
<?php
	 if (strpos($_SERVER['REQUEST_URI'], "pages") === false ){
	 	$path="";
	 }else{
	 	$path="../";
	 } 
?>
		 <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/main.css">
</head>
<body>
<!-- header -->

<?php
	session_start();

	$show_menu = false;
	if ( !empty($_SESSION["usuario"]) ){
		echo "Hola " . $_SESSION["usuario"];
		$show_menu = true;
	}else{
		if ( !empty($_SESSION["message"]) ){
			echo $_SESSION["message"];
		}else{
			echo "Hola, logate!";
		}
		}

?>

<?php if ( $show_menu === TRUE ) { ?>
			<div class='menu-container' >
				<a href='index.php?user-page=perfil'>
				  Perfil
				</a>
				<a href='index.php?user-page=users-list'>
				  Lista de usuarios
				</a>
				<a href='index.php?user-page=logout'>
				  Cerrar sesion
				</a>
			</div>
	<?php } ?>


