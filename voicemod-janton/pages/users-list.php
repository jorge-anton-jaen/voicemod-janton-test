<h2>Lista de usuarios</h2>

<?php 
	include "db/connection.php";

	$out = "<table>";
	$out = $out."<thead><td> Nombre </td><td>Apellidos</td><td>Email</td><td>Pais</td><td>Telefono</td><td>Cod postal</td></thead><tbody>";

	$sql_user_list = "SELECT iduser, nombre, apellidos, email, pais, telefono, cod_postal from usuarios";
	$user_list = $mysqli->query($sql_user_list);
	if($user_list->num_rows>0){
		while($row = $user_list->fetch_assoc()) {

			$out = $out."<tr><td>".$row["nombre"]."</td><td>".$row["apellidos"].
						"</td><td>".$row["email"]."</td><td>".$row["pais"]."</td><td>".
						$row["telefono"]."</td><td>".$row["cod_postal"]."</td></tr>";
    	}
	}

	$out = $out."</tbody></table>";
?>


<div class="user-list-container">
	<?php echo $out; ?>
</div>



