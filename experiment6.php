<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>print the list users using the array </title>
</head>
<body>
<?php

// Create an array of user info
$users = [
  [
    "name" => "sanket pawar",
    "email" => "sanketpawar@gmail.com",
    "phone" => "923-456-7890",
  ]
];

// Print the list of user info
foreach ($users as $user) {
  echo "<h2>User Info</h2>";
  
  echo "Name: " . $user["name"];
  echo "<br>";
  echo "Email: " . $user["email"];
  echo "<br>";
  echo "Phone: " . $user["phone"];
  
}

?>

</body>
</html>