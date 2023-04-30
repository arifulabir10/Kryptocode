<!DOCTYPE html>
<html>
<head>
	<title>Change Role</title>
	<link rel="stylesheet" type="text/css" href="modify.css">
</head>
<body>
<div class="card">
	<h1 style="text-align:center; color: green; font-size:50px;">Change Role</h1>
	<form action="change_role.php" method="GET">
        <?php
        $user_id = $_GET['user_id'];
        $first_name = $_GET['first_name'];
        $last_name = $_GET['last_name'];
        $username = $_GET['username'];
        $user_mail = $_GET['user_mail'];
        $role = $_GET['role'];
?>

        <input type=hidden name=user_id value='<?php echo $user_id; ?>'>
        <input type=hidden name=first_name value='<?php echo $first_name; ?>'>
        <input type=hidden name=last_name value='<?php echo $last_name; ?>'>
        <input type=hidden name=username value='<?php echo $username; ?>'>
        <input type=hidden name=user_mail value='<?php echo $user_mail; ?>'>
	<?php 

        echo "<label><h2>Name: " . $first_name . " " . $last_name . "</h2></label>";
        echo"<label><h2>Username: $username </h2></label>";
        echo"<label><h2>Email: $user_mail </h2></label>";
        
		echo"<label for='role'><h2>Select Role:</h2></label>";
		echo"<select id='role' name='role' required>";
        echo"<option value=''><h2>--$role--</h2></option>";
        echo"<option value='User'><h2>User</h2></option>";
        echo"<option value='Admin'><h2>Admin</h2></option>";
		echo"</select>";
        echo"<div style='text-align: center;'>";
		echo"<button type='submit'>Update</button>";
        echo"</div>";
        ?>
        
	</form>
</div>
</body>
</html>