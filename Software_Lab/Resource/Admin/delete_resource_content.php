<?php

	$resource_content_id  = $_GET["resource_content_id"];
	$resource_main_id  = $_GET["resource_main_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM resource_content WHERE resource_content_id=$resource_content_id" )

		or die("Can not execute query");



		header("Location: view_resource_content.php?resource_main_id=$resource_main_id");

?>