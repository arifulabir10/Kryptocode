<?php

$certify_id=$_GET["certify_id"];	
$question = $_GET["question"];





require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO certify_question VALUES ( NULL, '$certify_id', '$question')" )

		or die("Can not execute query");



		header("Location: read_all.php?certify_id=$certify_id");
















// require_once('db_connect.php');

// 	$connect = mysqli_connect( HOST, USER, PASS, DB )

// 		or die("Can not connect");


// 	$query 	= "INSERT INTO `certify_question` (`question_id`, `certify_id`, `question`)";

    
	

// 	mysqli_query( $connect, $query )

// 		or die("Can not execute query");



// 	header("Location: view_admin_certify.php");


?>