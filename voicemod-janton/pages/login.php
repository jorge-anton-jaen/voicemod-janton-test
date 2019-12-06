<h2>Login</h2>
<div class="login-form">
	<form action="pages/procesa-login.php" method="POST">
		<div class="form-item">
			<label>Usuario</label>
			<input type="text" name="username" maxlength="150">
		</div>
		<div class="form-item">
			<label>Contrase&ntilde;a</label>
			<input type="password" name="userpass" maxlength="150">
		</div>
		<div class="form-item">
			<input type="submit" name="enviar-btn" value="Entrar!" >
		</div>
		
	</form>
	<a href="pages/new-user-form.php">Regístrate</a>
</div>