<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Forum/admin_post.css">

    <title>Create Post</title>
    <script src="https://kit.fontawesome.com/4811032236.js" crossorigin="anonymous"></script>
</head>
<body>


    <!-- Form for creation of new resources -->





    <!-- Code starts here -->


<?php

$certify_id=$_GET["certify_id"];


?>

    <div class="main">

        <div class="certify_admin_form">
    
            <div class="post_block">
    
        <form method=get action="create_question_result.php">

          
            <div class="create_post_title">
                Add Question
            </div>

            <input type=hidden name=question_id value='<?php echo $question_id; ?>'>
            <input type=hidden name=certify_id value='<?php echo $certify_id; ?>'>  
    
    
    
            <div class="post_title">
            <textarea name="question" rows="8" cols="50" required></textarea>
                <label>Question</label>

            
            </div>

        
    
           
            <button type="submit">ADD <i class="fa-sharp fa-solid fa-paper-plane"></i></button>

        
    
          
        </form>
    </div>
    
    </div>
    
    <!-- Code ends here -->