<html>
	<head>
		<title>Author Details</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">	
	</head>
		<body>
<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT resource_main_id, resource_type, resource_description
    FROM resource_main
	
	order by resource_main_id ASC;" )
		or die("Can not execute query");
		

	// echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>SI</th> <th>TYPE</th> 
	<th>DESCRIPTION</th> 
	<th>DELETE</th> <th>UPDATE</th></tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $resource_main_id </td>";
		echo "<td> $resource_type </td>";
		echo "<td> $resource_description </td>";
		echo "<td> <a href = 'delete_record.php?id=$resource_main_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_record.php?
		resource_main_id=$resource_main_id
		&resource_type=$resource_type
		&resource_description=$resource_description'> Edit </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>
		</body>
</html>