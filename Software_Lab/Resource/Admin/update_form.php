<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Forum/admin_post.css">
    <link rel="stylesheet" href="../style.css">
    <title>Create Post</title>
    <script src="https://kit.fontawesome.com/4811032236.js" crossorigin="anonymous"></script>
</head>
<body>


    <!-- Form for creation of new resources -->





    <!-- Code starts here -->


<?php

$resource_main_id = $_GET["resource_main_id"];
	
$resource_type = $_GET["resource_type"];

$resource_description = $_GET["resource_description"];

?>

    <div class="main">

        <div class="certify_admin_form">
    
            <div class="post_block">
    
        <form method=get action="update_record_result.php">

          
            <div class="create_post_title">
                Update Record
            </div>

            <input type=hidden name=resource_main_id value='<?php echo $resource_main_id; ?>'> 
    
    
    
            <div class="post_title">
            <input type=text name="resource_type" value='<?php echo $resource_type; ?>'>
                <label>Resource Type</label>
<!--                 
                <label for="name"><i class="fa-brands fa-battle-net"></i> Post Title</label>
             -->
            
            </div>
    
    
    
            <div class="certify_admin">
            <input type=text name="resource_description" value='<?php echo $resource_description; ?>'>
                <label>Description</label>
<!--                 
                <label for="des"><i class="fa-sharp fa-solid fa-comment"></i> Descriptions</label>
                 -->
    
            </div>
        
    
           
            <button type="submit">Update <i class="fa-sharp fa-solid fa-paper-plane"></i></button>

        
    
          
        </form>
    </div>
    
    </div>
    
    <!-- Code ends here -->