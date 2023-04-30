<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="certify/certify.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Kryptocode</title>
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




                    <li class="hover-me"> <a href="Contest/practice.php">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                                <li> <a href="../xcode-main/index.html">C</a></li>
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
        <li><a href="About/about.html">About Us</a>
        <div class="sub-menu-1">
                <ul>
                    <li> <a href="About/about.html">Mission</a></li>
                    <li> <a href="About/vision.html">Vision</a></li>
                    <li> <a href="About/team.php">Team</a></li>
                   
                </ul>
            </div>
    </ul>
</div>


<!-- Menubar Ends here -->

<div class="first_home">
    <div class="left">
        <h1>FOR CODER</h1>
        <h1>BY CODER</h1>
    </div>
    <div class="right">

    </div>
</div>
<div class="mision_home">
    <div class="certify_title">
        <h3>Our Mission</h3>
        <h1>An inspirational competitive programming experience</h1>
        <p>Our mission is to let programmers improve their coding skills by solving the World's most challenging problems, learning new concepts, and getting inspired by the best developers.</p>
        <div class="mision_card">
            <h5>Contest Problem Set</h5>
            <p>kryptoCode's problem sets are carefully created by our problem writing team.</p>
        </div>
        <div class="mision_card">
            <h5>Practice Problem Set</h5>
            <p>Coder can practice their code in different programming languages.</p>
        </div>
        <div class="mision_card">
            <h5>Certify Problem Set</h5>
            <p>Coder can built their programming skills in many languages.</p>
        </div>
        <div class="mision_card">
            <h5>Resource</h5>
            <p>kryptoCode provide many resource like books,blogs,video tutorials etc.</p>
        </div>
    </div>
    
</div>
<div class="contest_home">
    <div class="certify_title">
        <h3>Perticipate in a contest</h3>
    </div>
    <?php
    $count=1;
    require_once('db_connect.php');

    $connect = mysqli_connect(HOST,USER,PASS,DB)

        or die("Can not connect");



    
    $results = mysqli_query( $connect, "SELECT * FROM contest_question ORDER BY con_ques_id DESC" )

                    or die("Can not execute1 query");
    while(( $rows = mysqli_fetch_array( $results )) && $count<=4){
        extract( $rows );
        echo'<div class="certify_cards">';

            echo'<div class="title">';
                echo"<h3> $contest_session</h3>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>Get perticipate by showing your skills on<h2 style='text-align: center;'> </h2> $contest_session</h4></p>";
            echo'</div>';
            
                echo"<button class='button'> <a href='contest/contest_view.php?con_ques_id=$con_ques_id'> Attemp </a> </button>";
                
    
            echo'</div>';
            $count++;
            
    }
    ?>
    
        

        
            <div class="btn">
                <button><a href='contest/contest.php'>More Contests-></a></button>
            </div>
                
                    

            
</div>
<div class="certify_home">
    <div class="certify_title">
        <h3>Get a certify</h3>
    </div>
    <?php
    $count=1;
    require_once('db_connect.php');

    $connect = mysqli_connect(HOST,USER,PASS,DB)

        or die("Can not connect");



    
    $results = mysqli_query( $connect, "SELECT * FROM certify" )

                    or die("Can not execute1 query");
    while(( $rows = mysqli_fetch_array( $results )) && $count<=4){
        extract( $rows );
        echo'<div class="certify_cards">';

            echo'<div class="title">';
                echo"<h1> $certify_title</h1>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>Get a certificate by showing your skills on<h2 style='text-align: center;'> </h2> $certify_title</h4></p>";
            echo'</div>';
            
                echo"<button class='button'> <a href='certify/list_view.php?certify_id=$certify_id'> Certify </a> </button>";
                
    
            echo'</div>';
            $count++;
            
    }
    ?>
<div class="btn">
                <button><a href='certify/certify.php'>More Certify-></a></button>
            </div>
        
            

            
</div>

</body>
</html>

