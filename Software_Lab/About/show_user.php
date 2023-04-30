<html>
	<head>
	<link rel="stylesheet" href="demo.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<title>Users</title>
	</head>
		<body>
		<div class="resource_title">
  <h1 style="font-size:50px; background-color:rgb(66,103,178); color: white; margin-top:30px";>Regestered Users</h1>
  
 
 
			<!-- <?php


			
			
			echo"<div class='add_button'>";
							echo"<a href='create_pending_post.php'><button class='ui labled olive button'><h2>Create Admin Post</h2></button></a>";
						echo"</div>";

						?> -->
</div>

<style>
table {
  border-collapse: collapse;
  width: 95%;
  align-items:center;
  font-family: Arial, sans-serif;
  margin: 0 auto;
}

table th, table td {
  text-align: left;
  padding: 20px;
  border: 10px solid white;
  
}

table th {
  background-color: rgb(133,84,254);
  color: white;
  font-size:20px;
  
}

table tr:nth-child(even) {
  background-color: #F3F3F3;
}


.add_button {
	  display: inline-block;
	  margin-left: 20px;
	  margin-top: 10px;
  }

</style>

<!-- <?php

	if(isset($_GET['upload']))
	{
		$post_title = $_GET['post_title'];
		$post_description = $_GET['post_description'];

		$photo =$_FILES['photo']['post_title'];
		$tmp_name =$_FILES['photo']['tmp_name'];
		$folder ="pending_post_image/" .$photo;
		move_uploaded_file($tmp_name, $folder);

		$sql = "INSERT INTO pending_post VALUES ( NULL, '$post_title', '$post_description', '$photo', DATE_FORMAT(NOW(), '%D %M %Y %l:%m %p') )";
	}
?> -->

<?php





	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM user
	
	order by user_id ASC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>SI</th> <th>Name</th> <th>Username</th> <th>Email</th> <th>Role</th>
	<th>Change Role</th> <th>Ban Member</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
        extract( $rows );

        $admin = $role;
        if($admin == "User"){
		
		echo "<tr>";
		echo "<td> $user_id </td>";
		echo "<td>" . $first_name . " " . $last_name . "</td>";
		echo "<td> $username </td>";
		echo "<td> $user_mail </td>";
		echo "<td> $role </td>";


		echo "<td> <a href = 'modify.php?user_id=$user_id &first_name=$first_name &last_name=$last_name &username=$username &user_mail=$user_mail &role=$role'><button class='ui labled blue button'> <h3> Modify </h3></button> </a> </td>";


		echo "<td> <a href = 'ban_member.php?user_id=$user_id'><button class='ui labled red button'><h3> Ban </h3></button></a> </td>";
		echo "</tr> \n";
        }
        else {
            echo "<tr>";
		echo "<td> $user_id </td>";
		echo "<td>" . $first_name . " " . $last_name . "</td>";
		echo "<td> $username </td>";
		echo "<td> $user_mail </td>";
		echo "<td> $role </td>";

        
		echo "<td> <a href = 'modify.php?user_id=$user_id &first_name=$first_name &last_name=$last_name &username=$username &user_mail=$user_mail &role=$role'><button class='ui labled green button'> <h3> Modify </h3></button> </a> </td>";
        echo "<td></td>";
		echo "</tr> \n";

        }
	}

	echo "</tbody></table> \n";
?>
			
			
			


		</body>
</html>