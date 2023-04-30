<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  
  // Define variables to store information about the image
  $imageName = $_FILES['image']['name'];
  $imageType = $_FILES['image']['type'];
  $imageSize = $_FILES['image']['size'];
  $imageTmpName = $_FILES['image']['tmp_name'];
  
  // Define variables to store information about the image in the database
  $imageTitle = $_POST['title'];
  $imageDescription = $_POST['description'];
  
  // Set the path to the folder where the image will be stored
  $targetDir = "uploads/";
  
  // Create a unique filename for the image
  $imagePath = $targetDir . uniqid() . "_" . $imageName;
  
  // Check if the file type is valid
  if (in_array($imageType, array('image/jpeg', 'image/png', 'image/gif'))) {
    
    // Upload the file to the server
    if (move_uploaded_file($imageTmpName, $imagePath)) {
      
      // Connect to the database
      $mysqli = new mysqli("localhost", "username", "", "demmo");
      
      // Insert the image information into the database
      $sql = "INSERT INTO images (title, description, path) VALUES (?, ?, ?)";
      $stmt = $mysqli->prepare($sql);
      $stmt->bind_param("sss", $imageTitle, $imageDescription, $imagePath);
      $stmt->execute();
      
      // Close the database connection
      $mysqli->close();
      
      // Redirect the user to the success page
    //   header("Location: success.php");
      exit();
      
    } else {
      // If the file could not be uploaded, show an error message
      echo "Sorry, there was an error uploading your file.";
    }
    
  } else {
    // If the file type is not valid, show an error message
    echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
  }
}

?>

<!-- Create the HTML form for the user to upload the image -->
<form method="post" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="text" name="title" placeholder="Enter image title">
  <textarea name="description" placeholder="Enter image description"></textarea>
  <button type="submit" name="submit">Upload</button>
</form>
