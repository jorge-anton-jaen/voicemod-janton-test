<?php 

	$HOST="127.0.0.1";
	$USER="root";
	$PASSWORD="";
	$SCHEMA="voicemod-janton";
	$PORT=3306;

	$mysqli = new mysqli($HOST, $USER, $PASSWORD, $SCHEMA, $PORT);
	if ($mysqli->connect_errno) {
	    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
?>