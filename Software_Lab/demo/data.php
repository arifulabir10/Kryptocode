<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
      <tr>
        <td>SI</td>
        <td>Title</td>
        <td>Description</td>
        <td>Photo</td>
        <td>Time</td>
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM pending_post ORDER BY post_id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $post_id; ?></td>
        <td><?php echo $row["post_title"]; ?></td>
        <td><?php echo $row["post_description"]; ?></td>
        <td> <img src="img/<?php echo $row["photo"]; ?>" width = 200 title="<?php echo $row['photo']; ?>"> </td>
        <td><?php echo $row["post_time"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="../uploadimagefile">Upload Image File</a>
  </body>
</html>
