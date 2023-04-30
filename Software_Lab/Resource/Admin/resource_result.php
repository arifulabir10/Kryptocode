<?php

	$resource_type = $_GET["resource_type"];

	$resource_description = $_GET["resource_description"];

	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO resource_main VALUES ( NULL, '$resource_type', '$resource_description')" )

		or die("Can not execute query");



		header("Location: view_admin_resource.php");


?>

<!-- <script>
    function check()
{
    window.location.href="resource.php";
} -->
</script>