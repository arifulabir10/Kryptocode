<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Certify/certify.css">
    <link rel="stylesheet" href="../../Contest/contest.css">
    <link rel="stylesheet" href="admin_card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Earn a certificate</title>
</head>
<body>




    <!--  Menubar Code Starts from here -->

    <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../../Contest/view_admin_contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
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
                                <li> <a href="../xcode-main/index.html">HTML</a></li>
                                <li> <a href="../xcode-main/index.html">CSS</a></li>
                                <li> <a href="../xcode-main/index.html">PHP</a></li>

                            </ul>
                        </div>
                    </li>
                    

                   
                </ul>
            </div>
        </li>
        <li class="active"><a href="#">Certify</a></li>
        <li><a href="../../Resource/Admin/view_admin_resource.php">Resource</a></li>
        <li><a href="../../Forum/forum_admin.php">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
            <div class="sub-menu-1">
            <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="../../About/team.php">Team</a></li>
                    <li> <a href="../../About/show_user.php">User</a></li>
                   
                </ul>
            </div>
    </ul>
</div>

    <!--  Menubar Code Ends here -->




        <!-- Code starts here -->


        <div class="resource_title">
            <h1>Edit Certify</h1>
        </div>


        <div class="main">


<?php

    require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM certify")

		or die("Can not execute query");
		


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );

            echo'<div class="resource_cards">';

            echo'<div class="resource_card_title">';
                echo"<h2>$certify_title</h2>";
                
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>Get a certificate by showing your skills on <h2 style='color:orangered'>$certify_title</h2></h4></p>";
            echo'</div>';
            
            
            
            echo"<a href='read_all.php?certify_id=$certify_id'> <button class='button'> Questions </button></a>";

            echo"<a href='update_form.php?certify_id=$certify_id &certify_title=$certify_title'> <button class='button1'> Update </button></a>";
            echo"<a href='delete_record.php?certify_id=$certify_id'> <button class='button2'> Delete </button></a>";


            echo'</div>';
	}


    
?>
    
    
    
             <div class="resource_cards">
    
                <div class="resource_card_title">
                    <h2>Add More</h2>
        
                </div>
        
                <div class="description">
                    <div class="des_image">
                        <img src="plus.png" alt="Italian Trulli">
                    </div>
                </div>

                <a href="create_resource.php"><button class="button">ADD</button></a>
                
            </div>
    
    

    
    
    
        
        </div>

        </div>
    
    
                
    <!-- Code ends here -->



    
</body>
</html>