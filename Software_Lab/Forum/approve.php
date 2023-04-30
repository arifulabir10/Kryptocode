<?php
	$post_id= $_GET["post_id"];

	$user_id= $_GET["user_id"];

	$post_title = $_GET["post_title"];

	$post_description = $_GET["post_description"];
	
	$photo = $_GET["photo"];
	



	require_once('db_connect2.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM pending_post WHERE post_id=$post_id;" )

		or die("Can not execute query");
	mysqli_query( $connect, "INSERT INTO user_post VALUES ( NULL, '$user_id', '$post_title', '$post_description', '$photo', DATE_FORMAT(NOW(), '%D %M %Y %l:%m %p') );")
		or die("Can not execute 2nd query");





	header("Location: view_pending_post.php");

?>