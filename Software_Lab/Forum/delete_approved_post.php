<?php

	$post_id  = $_GET["post_id"];



	require_once('db_connect2.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$image_path = $row["photo"];

// Delete the image file
if (file_exists($image_path)) {
    unlink($image_path);
}



	mysqli_query( $connect, "DELETE FROM user_post WHERE post_id=$post_id" )

		or die("Can not execute query");




	header("Location: view_approved_post.php");

?>