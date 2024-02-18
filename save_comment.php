<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $comment = $_POST["comment"];

    // Save to database (Assuming you have a MySQL database)
    $conn = new mysqli("your_db_host", "your_db_username", "your_db_password", "your_db_name");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Comment saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
