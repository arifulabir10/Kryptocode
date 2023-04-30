<?php
// connect to the database
require_once('db_connect2.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

// query to retrieve all pending posts
$query = "SELECT * FROM pending_post";

// execute the query
$result = mysqli_query($connect, $query);

// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // display the results in a table
    echo "<table>";
    echo "<tr><th>Title</th><th>Description</th><th>Date</th><th>Image</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["post_title"] . "</td>";
        echo "<td>" . $row["post_description"] . "</td>";
        echo "<td>" . $row["post_date"] . "</td>";
        echo "<td><img src='" . $row["photo"] . "' width='400'; height='600';></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No pending posts found.";
}

// close the database connection
mysqli_close($conn);
?>
