<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certify</title>
    <!-- <link rel="stylesheet" href="contest.css"> -->
    <link rel="stylesheet" href="contest_card.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <li class="hover-me"> <a href="contest.php">Join a contest</a>
                    
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
        <li><a href="../Certify/certify.php">Certify</a></li>
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


<!-- Menubar Ends here -->




<!-- Code Starts here -->


<?php
require_once('db_connect.php');
$connect = mysqli_connect(HOST, USER, PASS, DB) 
    or die("Can not connect");

$results = mysqli_query($connect, "SELECT * FROM contest order by contest_date ASC") 
    or die("Can not execute query");

while ($row = mysqli_fetch_assoc($results)) {;
    echo "<div class='weekly-contest-card'>";
    echo "<div class='card-header' style='background-image: url(\"images/" . $row['contest_photo'] . "\")'></div>";
    echo "<div class='card-body'>";
    echo "<h4>" . $row['contest_session'] . "</h4>";
    echo "<p>Time: " . $row['contest_date'] . "</p>";
    echo "</div>";
    echo "<div class='card-footer'>";
    echo "<button>Join Contest</button>";
    echo "<a href='view_more.php'><p>View Details</p></a>";
    echo "</div>";
    echo "</div>";

}
mysqli_close($connect);
?>



        
<!-- Code Ends here -->

        

</div>
</body>
</html>