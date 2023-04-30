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
require_once('db_connect2.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

if(isset($_POST['upload'])) {
    $post_title = $_POST['post_title'];
    $post_description = $_POST['post_description'];

    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $folder = "pending_post_image/" . $photo;
    move_uploaded_file($tmp_name, $folder);

    $results = mysqli_query( $connect,"INSERT INTO pending_post (post_id, user_id, post_title, post_description, photo, post_date) 
              VALUES (NULL, 3,'$post_title', '$post_description', '$folder', '$post_date')")
     or die("Can not execute query");


     header("Location: view_pending_post.php");
}
?>

<div class="main">
    <div class="certify_admin_form">
        <div class="post_block">
            <form method="POST" enctype="multipart/form-data">

                <div class="create_post_title">
                    Create Post
                </div>

                <div class="post_title">
                    <input type="text" rows="2" id="name" name="post_title" required>
                    <label>Title</label>
                </div>

                <div class="certify_admin">
                    <textarea id="des" rows="6" name="post_description" placeholder="What's on your mind..." required></textarea>
                </div>

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
