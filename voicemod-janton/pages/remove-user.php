<?php 

	include "../db/connection.php";
	session_start();
	$userid = $_SESSION["userid"];
	

	//FIXME EMPTY!


	$sql_user = "DELETE FROM USUARIOS where iduser=".$userid;

	echo $sql_user;
	if ($mysqli->query($sql_user) === true ){
		header("Location: logout.php");
    }
	
	

	
	

?>