<?php

	$user_id  = $_GET["user_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM user WHERE user_id=$user_id" )

		or die("Can not execute query");




	header("Location: show_user.php");

?>