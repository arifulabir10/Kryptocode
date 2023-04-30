<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="post_card.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Document</title>
</head>

<body>
<!-- Code Starts here -->
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

