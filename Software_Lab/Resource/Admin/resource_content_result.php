<?php

    $resource_main_id =$_GET["resource_main_id"];

	$resource_name = $_GET["resource_name"];

	$resource_description = $_GET["resource_description"];

    $resource_link = $_GET["resource_link"];




	
	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO resource_content VALUES (NULL, '$resource_main_id', '$resource_name', '$resource_description', '$resource_link')" )

	or die("Can not execute query");




	header("Location: view_resource_content.php?resource_main_id=".$resource_main_id);

?>
