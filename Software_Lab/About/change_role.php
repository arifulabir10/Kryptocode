<?php
$user_id = $_GET['user_id'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$username = $_GET['username'];
$user_mail = $_GET['user_mail'];
$role = $_GET['role'];



require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

    or die("Can not connect");

// echo"$user_id";
// echo"$first_name";
// echo"$last_name";
// echo"$role";




mysqli_query( $connect, "UPDATE user SET role='$role' WHERE user_id='$user_id'" )

    or die("Can not execute query");



    header("Location: show_user.php");



?>