<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

// Define database connection variables
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '********'; // Use a more secure password here!
$dbname = 'mydb';

// Connect to database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check if connection is successful
if ($conn) {

    // Create SQL query to select user info
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {

        // Fetch user info from database
        while ($row = mysqli_fetch_assoc($result)) {

            // Get user info
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];

            // Print user info
            echo "Username: $username<br>";
            echo "Email: $email<br>";
            echo "Password: $password<br>";
        }
    } else {

        // No user info is found
        echo "No user info found";
    }

} else {

    // Connection failed
    echo "Connection failed";
}

// Close database connection
mysqli_close($conn);

?>

</body>
</html>
