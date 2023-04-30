<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Forum/admin_post.css">
    <!-- <link rel="stylesheet" href="../../style.css"> -->
    <title>Create Post</title>
    <script src="https://kit.fontawesome.com/4811032236.js" crossorigin="anonymous"></script>
</head>
<body>


    <!-- Form for creation of new resources -->





    <!-- Code starts here -->


<?php

$certify_id = $_GET["certify_id"];
$certify_title = $_GET["certify_title"];

?>

    <div class="main">

        <div class="certify_admin_form">
    
            <div class="post_block">
    
        <form method=get action="update_record_result.php">

          
            <div class="create_post_title">
                Update Record
            </div>

            <input type=hidden name=certify_id value='<?php echo $certify_id; ?>'> 
    
    
    
            <div class="post_title">
            <input type=text name="certify_title" value='<?php echo $certify_title; ?>'>
                <label>Certify Title</label>
<!--                 
                <label for="name"><i class="fa-brands fa-battle-net"></i> Post Title</label>
             -->
            
            </div>

        
    
           
            <button type="submit">Update <i class="fa-sharp fa-solid fa-paper-plane"></i></button>

        
    
          
        </form>
    </div>
    
    </div>
    
    <!-- Code ends here -->