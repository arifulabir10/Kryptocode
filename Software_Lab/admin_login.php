<?php


if(isset($_GET['submit'])) {

 $uname = $_GET['user'];
 $pass = $_GET['pass'];
$error  = "Please Provide Valid Information....!!!!!!.";
 



  if($uname =='admin' && $pass=='admin1234'){
  
    header("location: ../admin/admin_home.html");
  
  }
  else{
    echo $error;
    
  }
 }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="page">
        <div class="form_box">
            <div class="button_box">
                <div id="btn"></div>
                <button type="button" class="toggle_btn" onclick="login()">Login</button>

            </div>
            <div class="social_icons">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
            </div>

            <form id="login" class="class_group" method="get">
                <input type="text" class="input_form" placeholder="username" required>
                <input type="password" class="input_form" placeholder="password" required>
                
                <button type="submit" class="submit" value="submit">Login</button>
            </form>

            
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }


        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>