<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Certify/certify.css">
    <link rel="stylesheet" href="../Contest/contest.css">
    <link rel="stylesheet" href="post_card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Forum</title>
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
        <li><a href="../Certify/certify.php">Certify</a></li>
        <li><a href="../Resource/resource.php">Resource</a></li>
        <li class="active"><a href="../Forum/forum.php">Forum</a></li>
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

 <?php


			
			
			echo"<div class='add_button'>";
							echo"<a href='create_pending_post.php'><button class='ui labled olive button'><h2>Create</h2></button></a>";
						echo"</div>";


                        if(isset($_GET['upload']))
	{
		$post_title = $_GET['post_title'];
		$post_description = $_GET['post_description'];

		$photo =$_FILES['photo']['post_title'];
		$tmp_name =$_FILES['photo']['tmp_name'];
		$folder ="pending_post_image/" .$photo;
		move_uploaded_file($tmp_name, $folder);

		$sql = "INSERT INTO pending_post VALUES ( NULL, '$post_title', '$post_description', '$photo', DATE_FORMAT(NOW(), '%D %M %Y %l:%m %p') )";
	}

						?>


 <?php
    require_once('db_connect2.php');
    $connect = mysqli_connect(HOST, USER, PASS, DB)
        or die("Can not connect");

    $results = mysqli_query($connect, "SELECT  t1.post_id, CONCAT(t2.first_name, ' ', t2.last_name) AS name, t1.post_title, t1.post_description, t1.photo, t1.post_date FROM user_post as t1 JOIN user as t2 ON t1.user_id=t2.user_id order by post_date DESC;")
        or die("Can not execute query");

    while ($row = mysqli_fetch_assoc($results)) {
        $post_id = $row["post_id"];
        $post_title = $row["post_title"];
        $post_description = $row["post_description"];
        $photo = $row["photo"];
        $post_date = $row["post_date"];

        echo "<div class='container'>";
        echo "<div class='card'>";

        echo "<div class='card-header'>";
        echo "<h5 class='username'>" . $row['name'] . "</h5>";
        echo "<span class='time'>" . $row['post_date'] . "</span>";
        echo "</div>";

        echo "<div class='card-img'>";
        echo "<img src='" . $row['photo'] . "' width='400' height='600'>";
        echo "</div>";

        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $row['post_title'] . "</h5>";
        echo "<p class='card-text'>" . $row['post_description'] . "</p>";
        echo "</div>";

        echo "</div>";
        echo "</div>";
    }
    ?>

    <script>
        var readMoreBtns = document.querySelectorAll(".read-more");
        for (var i = 0; i < readMoreBtns.length; i++) {
            readMoreBtns[i].addEventListener("click", function() {
                var cardText = this.previousElementSibling;
                if (cardText.style.display === "none") {
                    cardText.style.display = "inline";
                    this.innerHTML = "See less";
                } else {
                    cardText.style.display = "none";
                    this.innerHTML = "See more";
                }
            });
        }
    </script>

    <script>
        const reactBtns = document.querySelectorAll('.react-btn');
        const commentBtns = document.querySelectorAll('.comment-btn');

        reactBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Add your logic for the React button here
                console.log('React button clicked');
            });
        });

        commentBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Add your logic for the Comment button here
                console.log('Comment button clicked');
            });
        });
    </script>

    <!-- Code Ends here -->

  
  </body>
</html>