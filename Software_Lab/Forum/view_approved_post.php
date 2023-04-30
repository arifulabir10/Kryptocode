<html>
	<head>
	<link rel="stylesheet" href="demo.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<title>User Posts</title>
	</head>
		<body>
		<div class="resource_title">
  <h1 style="font-size:50px; background-color:rgb(66,103,178); color: white; margin-top:30px";>Approved Posts</h1>
  
 
 
			<?php


			
			
			echo"<div class='add_button'>";
							echo"<a href='create_pending_post.php'><button class='ui labled olive button'><h2>Create Admin Post</h2></button></a>";
						echo"</div>";

						?>
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





	require_once('db_connect2.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT  t1.post_id, CONCAT(t2.first_name, ' ', t2.last_name) AS name,t1.post_title, t1.post_description, t1.photo, t1.post_date FROM user_post as t1 JOIN user as t2 ON t1.user_id=t2.user_id;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>SI</th><th>Name</th> <th>Title</th> <th>Description</th> <th>Photo</th><th>Time</th>
	<th>DELETE</th></tr></thead><tbody> \n";




	while ($row = mysqli_fetch_assoc($results)) {

		$post_id = $row["post_id"];
		$post_title = $row["post_title"];
		$post_description = $row["post_description"];
		$photo = $row["photo"];
		$post_date = $row["post_date"];

        echo "<tr>";
		echo "<td>" . $row["post_id"] .  "</td>";
        echo "<td>" . $row["name"] .  "</td>";
		echo "<td>" . $row["post_title"] . "</td>";
        echo "<td>" . $row["post_description"] . "</td>";
        echo "<td><img src='" . $row["photo"] . "' width='400'; height='600';></td>";
		echo "<td>" . $row["post_date"] . "</td>";
		echo "<td> <a href = 'delete_approved_post.php?post_id=$post_id'><button class='ui labled red button'> <h3> Delete </h3></button> </a> </td>";
    echo "</tr> \n";
       
    }

	echo "</tbody></table> \n";
?>
			

		</body>
</html>