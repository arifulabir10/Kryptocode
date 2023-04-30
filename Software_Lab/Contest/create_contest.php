<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_post.css">
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <title>Create Post</title>
    <script src="https://kit.fontawesome.com/4811032236.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

if(isset($_POST['upload'])) {
    $contest_description = $_POST['contest_description'];
    $contest_session = $_POST['contest_session'];

    $photo = $_FILES['contest_photo']['name'];
    $tmp_name = $_FILES['contest_photo']['tmp_name'];
    $folder = "images/" . $contest_photo;
    move_uploaded_file($tmp_name, $folder);

    $results = mysqli_query( $connect,"INSERT INTO contest (contest_id, contest_description, contest_session, contest_date, contest_photo) 
              VALUES (NULL,'$contest_description', '$contest_session', NOW(), '$folder')")
     or die("Can not execute query");


     header("Location: view_admin_contest.php");
}
?>

<div class="main">
    <div class="certify_admin_form">
        <div class="post_block">
            <form method="POST" enctype="multipart/form-data">

                <div class="create_post_title">
                    Create Contest
                </div>

                <div class="post_title">
                    <input type="text" rows="2" id="name" name="contest_description" required>
                    <label>Title</label>
                </div>

                <div class="post_title">
                    <input type="text" rows="2" id="name" name="contest_session" required>
                    <label>Session</label>
                </div>

                <input type="datetime-local" name="contest_photo">

                <div class="image_block">
                    <input type="file" name="photo" accept="image/png, image/gif, image/jpeg, image/jpg, video/mp4" onchange="getImagePreview(event)" />
                    <div id="image-preview"></div>

                    <script type="text/javascript">
                        function getImagePreview(event) {
                            var image = URL.createObjectURL(event.target.files[0]);
                            var imagePreviewDiv = document.getElementById('image-preview');
                            var newImg = document.createElement('img');
                            imagePreviewDiv.innerHTML = '';
                            newImg.src = image;
                            newImg.width = "300";
                            imagePreviewDiv.appendChild(newImg);
                        }
                    </script>
                </div>

                <button type="submit" name="upload">POST</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
