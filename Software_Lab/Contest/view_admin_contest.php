<html>
	<head>
	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="contest1.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<title>Pending Post</title>
	</head>
		<body>


  <!-- Menubar Starts here -->
    
  <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li class="active"><a href="#">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="#">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                            <li> <a href="../xcode-main/index.html">C</a></li>
                                <li> <a href="../xcode-main/index.html">Javascript</a></li>
                                <li> <a href="../xcode-main/index.html">C++</a></li>
                                <li> <a href="../xcode-main/index.html">Python</a></li>
                                <li> <a href="../xcode-main/index.html">Java</a></li>
                                <li> <a href="../xcode-main/index.html">C#</a></li>
                                <li> <a href="./xcode-main/index.html">HTML</a></li>
                                <li> <a href="../xcode-main/index.html">CSS</a></li>
                                <li> <a href="../xcode-main/index.html">PHP</a></li>

                            </ul>
                        </div>
                    </li>
                    

                   
                </ul>
            </div>
        </li>
        <li><a href="../Certify/Admin/view_admin_certify.php">Certify</a></li>
        <li><a href="../Resource/Admin/view_admin_resource.php">Resource</a></li>
        <li><a href="../Forum/forum_admin.php">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
        <div class="sub-menu-1">
                <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="../About/team.php">Team</a></li>
					<li> <a href="../About/show_user.php">User</a></li>
                   
                </ul>
            </div>
    </ul>
</div>


<!-- Menubar Ends here -->














		<div class="resource_title">
  <h1 style="font-size:50px; background-color:rgb(66,103,178); color: white; margin-top:30px";>All Contests</h1>
  
 
 
			<?php


			
			
			echo"<div class='add_button'>";
							echo"<a href='create_contest.php'><button class='ui labled olive button'><h2>Create Contest</h2></button></a>";
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
	
	order by contest_date DESC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>Title</th> <th>Session</th> <th>Date</th> <th>Photo</th>
	<th>Delete</th></thead><tbody> \n";




	while ($row = mysqli_fetch_assoc($results)) {


        echo "<tr>";
        echo "<td>" . $row["contest_description"] .  "</td>";
		echo "<td>" . $row["contest_session"] . "</td>";
        echo "<td>" . $row["contest_date"] . "</td>";
        echo "<td><img src='images/" . $row["contest_photo"] . "' width='400'; height='600';></td>";
	
        echo "<td> <a href='decline.php?contest_id=" . $row["contest_id"] . "'><button class='ui labled red button'> <h3> Delete </h3></button></a> </td>";

        echo "</tr> \n";
       
    }

	echo "</tbody></table> \n";
?>
			

		</body>
</html>