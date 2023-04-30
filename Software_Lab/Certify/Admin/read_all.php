<html>
	<head>
		<title>Certify Questions</title>
		<!-- <link rel="stylesheet" href="../../Resource/resource.css"> -->
		<link rel="stylesheet" href="demo.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
		<div class="resource_title">
  <h1 style="font-size:50px; background-color:rgb(66,103,178); color: white; margin-top:30px";>All Questions</h1>
  
 
 
			<?php


			$certify_id =$_GET["certify_id"];
			
			echo"<div class='add_button'>";
							echo"<a href='create_question.php?certify_id=$certify_id'><button class='ui labled olive button'><h2>Add Question</h2></button></a>";
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


	$certify_id =$_GET["certify_id"];



	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM certify_question Where certify_id=$certify_id
	
	order by question_id DESC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>SI</th> 
	<th>DESCRIPTION</th> 
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $question_id </td>";
		echo "<td> $question </td>";
		echo "<td> <a href = 'delete_certify_content.php?question_id=$question_id &certify_id=$certify_id'><button class='ui labled orange button'> <h3> Delete </h3></button> </a> </td>";
		echo "<td> <a href = 'update_certify_content.php?
		question_id=$question_id
		&certify_id=$certify_id
		&question=$question'><button class='ui labled green button'><h3> Update </h3></button></a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>
		</body>
</html>