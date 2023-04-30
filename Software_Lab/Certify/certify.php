<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certify</title>
    <link rel="stylesheet" href="certify.css">
    <link rel="stylesheet" href="../Certify/certify.css">
    <link rel="stylesheet" href="../Contest/contest.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <!--  Menubar Code Starts from here -->

    <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../Contest/contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="../Contest/practice.php">Practice Coding</a><i class=" fa fa-angle-right"></i>
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
        <li><a href="../Resource/resource.php">Resource</a></li>
        <li><a href="../Forum/forum.php">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
            <div class="sub-menu-1">
            <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="../About/team.php">Team</a></li>
                   
                </ul>
            </div>
    </ul>
</div>

    <!--  Menubar Code Ends here -->




    <!-- Code Starts here -->


    <div class="certify_title">
        <h1>Get A Certificate</h1>
    </div>
    <div class="main">
        <?php
        require_once('db_connect.php');

        $connect = mysqli_connect(HOST,USER,PASS,DB)
    
            or die("Can not connect");
    
    
    
        
        $results = mysqli_query( $connect, "SELECT * FROM certify " )
    
                        or die("Can not execute1 query");
            
    
        while( $rows = mysqli_fetch_array( $results ) ){
            extract( $rows );
            echo'<div class="certify_cards">';

            echo'<div class="title">';
                echo"<h1> $certify_title</h1>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>Get a certificate by showing your skills on<h2 style='text-align: center;'> </h2> $certify_title</h4></p>";
            echo'</div>';
            
                echo"<a href='certify_disc.php?certify_id=$certify_id'> <button class='button'> Certify</button> </a>";
                
    
            echo'</div>';
        }

        ?>


<!-- Code Ends here -->

        

</div>
</body>
</html>