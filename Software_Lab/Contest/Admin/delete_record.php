<?php

$certify_id = $_GET["certify_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM certify WHERE certify_id=$certify_id" )

		or die("Can not execute query");



		header("Location: view_admin_certify.php");






		

?>