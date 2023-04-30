<?php

	$contest_id  = $_GET["contest_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$image_path = $row["contest_photo"];

// Delete the image file
if (file_exists($image_path)) {
    unlink($image_path);
}



	mysqli_query( $connect, "DELETE FROM contest WHERE contest_id=$contest_id" )

		or die("Can not execute query");




	header("Location: view_admin_contest.php");

?>