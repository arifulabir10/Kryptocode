<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Learn and Gain</title>
</head>
<body>




<!-- Menubar Code Starts from here-->

    <div class="menubar">
        <ul>
            <li><a href="../../index.php"><i class="fa fa-home"></i>Home</a> </li>
            <li><a href="../contest/contest.html">Contest</a>
                <div class="sub-menu-1">
                    <ul>
                        <li class="hover-me"> <a href="../contest/join_contest.html">Join a contest</a> <i class="fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                                <li class="hover-me-3"> <a href="#">Beginner Level</a><i class=" fa fa-angle-right"></i>
                                    <div class="sub-menu-3">
                                        <ul>
                                            <li> <a href="">C</a></li>
                                            <li> <a href="">Javascript</a></li>
                                            <li> <a href="">C++</a></li>
                                            <li> <a href="">Python</a></li>
                                            <li> <a href="">Java</a></li>
                                            <li> <a href="">C#</a></li>
                                            <li> <a href="">HTML</a></li>
                                            <li> <a href="">CSS</a></li>
                                            <li> <a href="">PHP</a></li>
            
                                        </ul>
                                    </div>
                                </li>
    
    
                                <li class="hover-me-3"> <a href="#">Moderate Level</a><i class=" fa fa-angle-right"></i>
                                    <div class="sub-menu-3">
                                        <ul>
                                            <li> <a href="">C</a></li>
                                            <li> <a href="">Javascript</a></li>
                                            <li> <a href="">C++</a></li>
                                            <li> <a href="">Python</a></li>
                                            <li> <a href="">Java</a></li>
                                            <li> <a href="">C#</a></li>
                                            <li> <a href="">HTML</a></li>
                                            <li> <a href="">CSS</a></li>
                                            <li> <a href="">PHP</a></li>
            
                                        </ul>
                                    </div>
                                </li>
    
    
    
                                <li class="hover-me-3"> <a href="#">Pro Level</a><i class=" fa fa-angle-right"></i>
                                    <div class="sub-menu-3">
                                        <ul>
                                            <li> <a href="">C</a></li>
                                            <li> <a href="">Javascript</a></li>
                                            <li> <a href="">C++</a></li>
                                            <li> <a href="">Python</a></li>
                                            <li> <a href="">Java</a></li>
                                            <li> <a href="">C#</a></li>
                                            <li> <a href="">HTML</a></li>
                                            <li> <a href="">CSS</a></li>
                                            <li> <a href="">PHP</a></li>
            
                                        </ul>
                                    </div>
    
                                </li>
    
                            </ul>
                        </div>
                        </li>
    
    
    
    
                        <li class="hover-me"> <a href="../contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                            <div class="sub-menu-2">
                                <ul>
                                    <li> <a href="">C</a></li>
                                    <li> <a href="../compiler/compiler_python.html">Javascript</a></li>
                                    <li> <a href="">C++</a></li>
                                    <li> <a href="">Python</a></li>
                                    <li> <a href="">Java</a></li>
                                    <li> <a href="">C#</a></li>
                                    <li> <a href="">HTML</a></li>
                                    <li> <a href="">CSS</a></li>
                                    <li> <a href="">PHP</a></li>
    
                                </ul>
                            </div>
                        </li>
                        <li> <a href="previous/previous.html">Previous contest</a></li>
    
                       
                    </ul>
                </div>
            </li>
            <li><a href="../certify/certify.html">Certify</a></li>
            <li class="active"><a href="#">Resource</a></li>
            <li><a href="../forum/forum.html">Forum</a></li>
            <li><a href="#">About Us</a>
                <div class="sub-menu-1">
                    <ul>
                        <li> <a href="">Mission</a></li>
                        <li> <a href="">Vision</a></li>
                        <li> <a href="">Team</a></li>
                       
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
                echo"<h1> $resource_name</h1>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>$resource_description</h4></p>";
            echo'</div>';
            
                echo"<a href='$resource_link'> <button class='button'> Visit </button></a>";
                
    
            echo'</div>';
	}


   echo' <div class="resource_cards">';
    
   echo' <div class="resource_card_title">';
   echo' <h1>Add More</h1>';
        
   echo' </div>';
        
   echo' <div class="description">';
   echo'   <div class="des_image">';
   echo'  <img src="plus.png" alt="Italian Trulli">';
   echo'      </div>';
   echo'     </div>';

                

   echo"       <a href='create_resource_content.php?resource_main_id=$resource_main_id'><button class='button'>ADD</button></a>";
                
   echo'      </div>';

    
?>
    
    
    
             <!-- <div class="resource_cards">
    
                <div class="resource_card_title">
                    <h1>Add More</h1>
        
                </div>
        
                <div class="description">
                    <div class="des_image">
                        <img src="plus.png" alt="Italian Trulli">
                    </div>
                </div>

                

                <a href="create_resource_content.php?id=$id"><button class="button">ADD</button></a>
                
            </div> -->
    
    

    
    
    
        
        </div>

        </div>
    
    
                
    <!-- Code ends here -->



    
</body>
</html>