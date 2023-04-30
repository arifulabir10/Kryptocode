<?php

$certify_id = $_GET["certify_id"];
$certify_title = $_GET["certify_title"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE certify SET certify_title='$certify_title' WHERE certify_id=$certify_id";
	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	header("Location: view_admin_certify.php");

?>