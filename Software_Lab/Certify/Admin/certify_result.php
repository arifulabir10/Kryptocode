<?php

$certify_title = $_GET["certify_title"];

	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO certify VALUES ( NULL, '$certify_title')" )

		or die("Can not execute query");



		header("Location: view_admin_certify.php");


?>
