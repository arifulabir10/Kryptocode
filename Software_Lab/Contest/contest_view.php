<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certify</title>
    <link rel="stylesheet" href="contest.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Menubar Starts here -->
    
<div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="Contest/contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="Contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                            <li> <a href="xcode-main/index.html">C</a></li>
                                <li> <a href="xcode-main/index.html">Javascript</a></li>
                                <li> <a href="xcode-main/index.html">C++</a></li>
                                <li> <a href="xcode-main/index.html">Python</a></li>
                                <li> <a href="xcode-main/index.html">Java</a></li>
                                <li> <a href="xcode-main/index.html">C#</a></li>
                                <li> <a href="xcode-main/index.html">HTML</a></li>
                                <li> <a href="xcode-main/index.html">CSS</a></li>
                                <li> <a href="xcode-main/index.html">PHP</a></li>

                            </ul>
                        </div>
                    </li>
                    

                   
                </ul>
            </div>
        </li>
        <li><a href="Certify/certify.php">Certify</a></li>
        <li><a href="Resource/resource.php">Resource</a></li>
        <li><a href="Forum/forum.php">Forum</a></li>
        <li><a href="#">About Us</a>
        <div class="sub-menu-1">
                <ul>
                    <li> <a href="About/about.html">Mission</a></li>
                    <li> <a href="About/vision.html">Vision</a></li>
                    <li> <a href="">Team</a></li>
                   
                </ul>
            </div>
    </ul>
</div>


<!-- Menubar Ends here -->


    <div class="certify_title">
        <h1>Join Contest</h1>
    </div>
    <div class="main">
        <?php
        
        $con_ques_id=$_GET["con_ques_id"];


        require_once('dbconnect2.php');

        $connect = mysqli_connect(HOST,USER,PASS,DB)
    
            or die("Can not connect");
    
    
    
        
        $results = mysqli_query( $connect, "SELECT * FROM contest_question WHERE con_ques_id = '$con_ques_id'" )
    
                        or die("Can not execute1 query");
            
    
        while( $rows = mysqli_fetch_array( $results ) ){
            extract( $rows );
            echo'<div class="contest_view">';
            echo"<h1>$contest_session</h1>";
            echo'</div>';
            echo'<div class="question">';
            echo"<p>$con_ques_des</p>";
            echo'</div>';

            echo"<button class='button'> Attempt  </button>";
                
    
            
        }

        ?>

        

</div>
</body>
</html>