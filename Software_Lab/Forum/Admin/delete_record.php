<?php

	$resource_main_id  = $_GET["id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM resource_main WHERE resource_main_id=$resource_main_id" )

		or die("Can not execute query");



		header("Location: view_admin_resource.php");

?>