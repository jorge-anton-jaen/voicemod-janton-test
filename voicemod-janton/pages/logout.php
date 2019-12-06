<?php 

	session_start();
	session_destroy();
	header("Location: /voicemod-janton/index.php");
?>