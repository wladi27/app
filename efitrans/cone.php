<?php
	//$mysqli = new mysqli("empresas.hostingprivado.com","grkdmngl_root","Wladi.1000","grkdmngl_encontramos_tu_casa");
	$mysqli = new mysqli("localhost","liderazgoenlinea_root","Wladi1000!","liderazgoenlinea_carnet");
	$mysqli->set_charset("utf8");
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>