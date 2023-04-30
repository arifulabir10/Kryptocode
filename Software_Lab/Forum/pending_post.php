<?php

	$post_title = $_GET["post_title"];

	$post_description = $_GET["post_description"];
	
	$photo = $_GET["photo"];
	



	require_once('db_connect2.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO pending_post VALUES ( NULL, '$post_title', '$post_description', '$photo', DATE_FORMAT(NOW(), '%D %M %Y %l:%m %p') )" )

		or die("Can not execute query");



		// header("Location: forum.php");
		header("Location: view_pending_post.php");



?>