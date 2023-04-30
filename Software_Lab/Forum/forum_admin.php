<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum_admin.css">

    <link rel="stylesheet" href="../Certify/certify.css">
    <link rel="stylesheet" href="../Contest/contest.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Learn and Gain</title>
</head>
<body>




    <!--  Menubar Code Starts from here -->

    <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../Contest/view_admin_contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="../Contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
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
        <li><a href="../Certify/Admin/view_admin_certify.php">Certify</a></li>
        <li><a href="../Resource/Admin/view_admin_resource.php">Resource</a></li>
        <li class="active"><a href="#">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
            <div class="sub-menu-1">
            <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="#">Team</a></li>
                    <li> <a href="../About/show_user.php">User</a></li>
                   
                </ul>
            </div>
    </ul>
</div>

    <!--  Menubar Code Ends here -->




    <div class="resource_title">
            <h1>Kryptocode Community</h1>
        </div>
    
    
        <div class="main">
    
            <div class="resource_cards">
    
                <div class="resource_card_title">
                    <h2>Community</h2>
        
                </div>
        
                <div class="description">
                    <p><h4>All the posts that have been approved by the admins </h4></p>
                </div>
                
                <a href = 'post_card.php'><button> View More </button> </a>

            </div>
    
    
    
    
    
            <div class="resource_cards">
    
                <div class="resource_card_title">
                    <h2>Pending Posts</h2>
        
                </div>
        
                <div class="description">
                    <p><h4>All the posts that needs for admin approval</h4></p>
                </div>

                <a href = 'view_pending_post.php'><button> View More </button> </a>
            </div>

            <div class="resource_cards">
    
                <div class="resource_card_title">
                    <h2>Create Post</h2>
        
                </div>
        
                <div class="description">
                    <div class="des_image">
                        <img src="plus.png" alt="Italian Trulli">
                    </div>
                </div>

                <a href="create_pending_post.php"><button class="button">ADD</button></a>
                
            </div>
    
    
            
    
    
    
            
    
    
    
        
        </div>

        </div>
    
    
                
    <!-- Code ends here -->



    
</body>
</html>