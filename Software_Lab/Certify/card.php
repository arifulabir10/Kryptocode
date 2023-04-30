<?php
$question = array(
    array(
        'title' => 'Question 1',
        'description' => 'Write a program to find the sum of two numbers.',
        'input' => 'The input contains two integers a and b (1 ≤ a, b ≤ 1000) separated by a single space.',
        'output' => 'Output the sum of the two numbers.',
    ),
    array(
        'title' => 'Question 2',
        'description' => 'Write a program to find the factorial of a number.',
        'input' => 'The input contains a single integer n (1 ≤ n ≤ 10).',
        'output' => 'Output the factorial of the given number n.',
    ),
    array(
        'title' => 'Question 3',
        'description' => 'Write a program to find the largest number among three numbers.',
        'input' => 'The input contains three integers a, b, and c (1 ≤ a, b, c ≤ 1000) separated by a single space.',
        'output' => 'Output the largest number among the three given numbers.',
    ),
    
);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Coding Contest</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .moto{
    height: 15%;
    width: 30%;
    padding: 10px;
    position: absolute;
    font-size: 80px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    text-align: center;
    color: white;
    text-shadow: 0px 00px 15px black;
    top: 30%;
    left: 5%;
    
}


.menubar
{
    background-color: transparent;

    text-align: center;

    
}
.logo {
    color: rgb(43, 43, 129);
    font-size: 30px;
  }
  
  .logo span {
    color: #F6AE2D;
  }


.menubar ul
{
    display: inline-flex;
    list-style: none;
    color:rgb(255, 255, 255);
}


.menubar ul li
{
    font-size: 25px;
    width: 150px;
    margin: 10px;
    padding: 10px;
}

.menubar ul li a
{
    text-decoration: none;
    font-weight: bold;

    color: rgb(0, 0, 0);
}

.menubar ul li a:hover
{
    text-decoration: none;
    font-weight: bold;
    color: rgb(3, 161, 153);
    text-shadow:  2px 2px 5px rgb(247, 243, 243);
}



.active
{
    background: white;
    border-radius: 5px;
    transition: .3s;

    
    
}

.menubar ul li:hover
{
    background: rgb(255, 255, 255);
    border-radius: 5px;
    transition: .3s;
    text-decoration: underline;
    
    
}

.menubar .fa
{
    margin-right: 5px;
    color: black;
}

.sub-menu-1
{
    display: none;
}

.menubar ul li:hover .sub-menu-1
{
    display: block;
    position: absolute;
    background-color:rgb(255, 255, 255);
    margin-top: 15px;
    z-index: 1;
}

.menubar ul li:hover .sub-menu-1 ul
{
    display: block;
    margin: 5px;
    
}

.menubar ul li:hover .sub-menu-1 ul li
{
    width: 250px;
    padding: 10px;
    border-bottom: 1px solid whitesmoke;
    background: transparent;
    border-radius: 0px;
    text-align: left;
}

.menubar ul li:hover .sub-menu-1 ul li:last-child
{
    border-bottom: none;
}

.menubar ul li:hover .sub-menu-1 ul li a:hover
{
    color: rgb(3, 161, 153);
    text-shadow:  2px 2px 5px rgb(247, 243, 243);
    text-decoration: underline;
    

}

        .card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 20px;
        }
        h2 {
            margin-top: 0;
        }
        .card button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #45a049;
        }
        .card p {
            margin-bottom: 10px;
        }
        .card textarea {
            width: 100%;
            height: 100px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
        }
        .card label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .card .input-label {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../Contest/contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="../Contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        
                    </li>
                    

                   
                </ul>
            </div>
        </li>
        <li class="active"><a href="certify.php">Certify</a></li>
        <li><a href="../Resource/resource.php">Resource</a></li>
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

<?php
        $certify_id = $_GET["certify_id"];

        $count=1;
        require_once('db_connect.php');

        $connect = mysqli_connect(HOST,USER,PASS,DB)
    
            or die("Can not connect");
    
    
    
        
            $results = mysqli_query( $connect, "SELECT * FROM certify_question WHERE certify_id = $certify_id ORDER BY RAND() limit 3" )
    
            or die("Can not execute1 query");?>

    <?php while( $rows = mysqli_fetch_array( $results ) ){
        extract( $rows ); ?>
        <div class="card">
        <h2><?php echo 'Question ' . $count ; ?></h2>
            <p><?php echo $question ; ?></p>
            
            
            <a href="../xcode/ide/ui/ide.html"><button>Attempt Now</button></a>
        </div>
    <?php $count++ ; } ?>
</body>
</html>
