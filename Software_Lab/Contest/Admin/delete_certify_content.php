<?php

	$question_id  = $_GET["question_id"];
	$certify_id  = $_GET["certify_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM certify_question WHERE question_id=$question_id" )

		or die("Can not execute query");



		header("Location: read_all.php?certify_id=$certify_id");

?>