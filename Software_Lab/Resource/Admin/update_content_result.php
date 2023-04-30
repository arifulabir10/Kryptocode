<?php

$resource_main_id = $_GET["resource_main_id"];
$resource_content_id=$_GET["resource_content_id"];	
$resource_name = $_GET["resource_name"];
$resource_description = $_GET["resource_description"];
$resource_link = $_GET["resource_link"];


require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE `resource_content` SET `resource_name` ='$resource_name', `resource_description` ='$resource_description', `resource_link` ='$resource_link' WHERE `resource_content`.`resource_content_id` = $resource_content_id";

    
	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	header("Location: view_resource_content.php?resource_main_id=$resource_main_id");


?>