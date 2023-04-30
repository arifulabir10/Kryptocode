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

    <div class="main">

        <div class="certify_admin_form">
    
            <div class="post_block">
    
        <form method=get action="resource_result.php">
          
            <div class="create_post_title">
                Add New Resource
            </div>
    
    
    
            <div class="post_title">
                <input type="text" rows="2" id="name" name="resource_type" required>
                <label>Resource Type</label>
<!--                 
                <label for="name"><i class="fa-brands fa-battle-net"></i> Post Title</label>
             -->
            
            </div>
    
    
    
            <div class="certify_admin">
                <input type="textarea" id="des" rows="8" name="resource_description" required></input>
                <label>Description</label>
<!--                 
                <label for="des"><i class="fa-sharp fa-solid fa-comment"></i> Descriptions</label>
                 -->
    
            </div>
        
    
           
            <button type="submit">ADD <i class="fa-sharp fa-solid fa-paper-plane"></i></button>

        
    
          
        </form>
    </div>
    
    </div>
    
    <!-- Code ends here -->