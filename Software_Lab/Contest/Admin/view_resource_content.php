<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resource/resource.css">
    <link rel="stylesheet" href="admin_card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Learn and Gain</title>
</head>
<body>




  <!-- Menubar Starts here -->
    
  <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../Contest/contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="../Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="../Contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
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
        <li><a href="../Certify/certify.php">Certify</a></li>
        <li class="active"><a href="#">Resource</a></li>
        <li><a href="../Forum/forum.php">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
        <div class="sub-menu-1">
                <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="#">Team</a></li>
                   
                </ul>
            </div>
    </ul>
</div>


<!-- Menubar Ends here -->




        <!-- Code starts here -->


        <div class="resource_title">
            <h1>Resources</h1>
        </div>


        <div class="main">


<?php

    $resource_main_id=$_GET["resource_main_id"];

    require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM resource_content
    where resource_main_id=$resource_main_id")

		or die("Can not execute query");
		


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );

            echo'<div class="resource_cards">';

            echo'<div class="resource_card_title">';
                echo"<h2> $resource_name</h2>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>$resource_description</h4></p>";
            echo'</div>';
            
                echo"<a href='$resource_link'> <button class='button'> Visit </button></a>";
                echo"<a href='update_content.php?resource_main_id=$resource_main_id &resource_content_id=$resource_content_id &resource_name=$resource_name &resource_description=$resource_description &resource_link=$resource_link'> <button class='button1'> Update </button></a>";
                echo"<a href='delete_resource_content.php?resource_content_id=$resource_content_id'> <button class='button2'> Delete </button></a>";
    
                
    
            echo'</div>';
	}


   echo' <div class="resource_cards">';
    
   echo' <div class="resource_card_title">';
   echo' <h2>Add More</h2>';
        
   echo' </div>';
        
   echo' <div class="description">';
   echo'   <div class="des_image">';
   echo'  <img src="plus.png" alt="Italian Trulli">';
   echo'      </div>';
   echo'     </div>';

                

   echo"       <a href='create_resource_content.php?resource_main_id=$resource_main_id'><button class='button'>ADD</button></a>";
                
   echo'      </div>';

    
?>
    
    

    
    

    
    
    
        
        </div>

        </div>
    
    
                
    <!-- Code ends here -->



    
</body>
</html>