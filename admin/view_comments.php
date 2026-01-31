<?php
include("../db/config.php");

$result = mysqli_query($conn, "SELECT * FROM comments ORDER BY created_at DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<p>" . $row['message'] . "</p>";
    echo "<small>" . $row['created_at'] . "</small><hr>";
}
?>
