<div class="header-container">
	<?php include "header.php" ?>
</div>
<div class="new-user-form">
	<form action="new-user-validation.php" method="POST">
	<div class="form-item">
		<label>Nombre</label>
		<input type="text" maxlength="45" name="nombre">
	</div>
	<div class="form-item">
		<label>Apellidos</label>
		<input type="text" maxlength="100" name="apellidos">
	</div>
	<div class="form-item">
		<label>Email</label>
		<input type="text" maxlength="150" name="email">
	</div>
	<div class="form-item">
		<label>Contraseña</label>
		<input type="password" maxlength="20" name="contrasenya">
	</div>
	<div class="form-item">
		<label>País</label>
		<input type="text" maxlength="45"name="pais">
	</div>
	<div class="form-item">
		<label>Teléfono</label>
		<input type="number" max="9999999999" name="telefono">
	</div>
	<div class="form-item">
		<label>Código postal</label>
		<input type="number" max="99999" name="postal">
	</div>

	<div class="form-item">
		<input type="submit" name="enviar" value="Alta!">
	</div>
</form>
<?php 
	echo "<a href='logout.php' >Volver a login</a>";
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if ( !empty($_SESSION["new-user-error"]) ){
		echo "<p>".$_SESSION["new-user-error"];
	}
?>
</div>
<div class="footer-container">
	<?php include "footer.php" ?>
</div>
