<?php 
	
	header("Content-type: text/html; Charset=utf-8");

	$dbHost = 'localhost';
	$database = 'db_baby_transport';
	$dbUser = 'admin';
	$dbPass = '1234567';

	$link = mysqli_connect($dbHost, $dbUser, $dbPass, $database);
	if (mysqli_connect_errno()) {
		echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
	}

	// mysqli_query('SET names utf8');

?>