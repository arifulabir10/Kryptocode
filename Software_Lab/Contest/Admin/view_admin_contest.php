<html>
	<head>
	<link rel="stylesheet" href="demo.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<title>Pending Post</title>
	</head>
		<body>
		<div class="resource_title">
  <h1 style="font-size:50px; background-color:rgb(66,103,178); color: white; margin-top:30px";>All Contests</h1>
  
 
 
			<?php


			
			
			echo"<div class='add_button'>";
							echo"<a href='create_pending_post.php'><button class='ui labled olive button'><h2>Create Contest</h2></button></a>";
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

<?php





	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM contest
	
	order by contest_date ASC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>ID</th><th>Title</th> <th>Session</th> <th>Date</th> <th>Photo</th>
	<th>Delete</th></thead><tbody> \n";




	while ($row = mysqli_fetch_assoc($results)) {

        $contest_id = $row["contest_id"];
        $post_title = $_GET['post_title'];
		$contest_description = $_GET['contest_description'];
        $contest_session = $_GET['contest_session'];
        $contest_date = $_GET['contest_date'];


        echo "<tr>";
        echo "<td>" . $row["contest_id"] .  "</td>";
        echo "<td>" . $row["contest_description"] .  "</td>";
		echo "<td>" . $row["contest_session"] . "</td>";
        echo "<td>" . $row["contest_date"] . "</td>";
        echo "<td><img src='" . $row["contest_photo"] . "' width='400'; height='600';></td>";
	
        echo "<td> <a href = 'decline.php?contest_id=$contest_id'><button class='ui labled red button'> <h3> Delete </h3></button> </a> </td>";
        echo "</tr> \n";
       
    }

	echo "</tbody></table> \n";
?>
			

		</body>
</html>