<?php include "edit-profile-load.php" ?>
<?php 
	if ( !empty($_SESSION["edit-user-error"]) ){
		echo $_SESSION["edit-user-error"];
		 $_SESSION["edit-user-error"]="";
	}
?>
<h2>Perfil</h2>
<div class="new-user-form">
	
	<form action="pages/edit-profile-update.php" method="POST">
	<input type="hidden" name="userid"  value=<?php echo $userid ?>>
	<div class="form-item">
		<label>Nombre</label>
		<input type="text" name="nombre" maxlength="45" value=<?php echo $nombre ?>>
	</div>
	<div class="form-item">
		<label>Apellidos</label>
		<input type="text" name="apellidos" maxlength="100" value=<?php echo $apellidos ?>>
	</div>
	<div class="form-item">
		<label>Email</label>
		<input type="text" name="email" maxlength="150"value=<?php echo $email ?>>
	</div>
	<div class="form-item">
		<label>Contraseña</label>
		<input type="password" name="contrasenya" maxlength="20" value=<?php echo $contrasenya ?>>
	</div>
	<div class="form-item">
		<label>País</label>
		<input type="text" name="pais" maxlength="45" value=<?php echo $pais ?>>
	</div>
	<div class="form-item">
		<label>Teléfono</label>
		<input type="number" name="telefono" max="9999999999" value=<?php echo $telefono ?>>
	</div>
	<div class="form-item">
		<label>Código postal</label>
		<input type="number" name="postal" max="99999" value=<?php echo $cod_postal ?>>
	</div>

	<div class="form-item">
		<input type="submit" name="enviar" value="Guardar!">
	</div>
</form>
<?php 
	echo "<a href='/voicemod-janton/index.php?user-page=users-list' >Volver</a><p><a href='pages/remove-user.php' method='POST'>Eliminar cuenta</a>";

?>
</div>
