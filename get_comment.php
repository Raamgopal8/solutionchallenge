<?php
// Retrieve comments from the database (Assuming you have a MySQL database)
$conn = new mysqli("your_db_host", "your_db_username", "your_db_password", "your_db_name");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div><strong>" . $row["username"] . ":</strong> " . $row["comment"] . "</div>";
    }
} else {
    echo "No comments yet.";
}

$conn->close();
?>
