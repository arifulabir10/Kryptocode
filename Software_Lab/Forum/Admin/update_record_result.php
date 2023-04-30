<?php

	$resource_main_id = $_GET["resource_main_id"];
	
	$resource_type = $_GET["resource_type"];

	$resource_description = $_GET["resource_description"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE resource_main SET resource_type='$resource_type', resource_description='$resource_description' WHERE resource_main_id=$resource_main_id";
	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	header("Location: view_admin_resource.php");

?>