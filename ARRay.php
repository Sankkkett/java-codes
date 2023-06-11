<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
 $users = [
  ["name" => "sanket",
  "surname" => "pawar",
  "mobileNo" => "9404602641"]
  ];

  foreach($users as $user){
    echo "<b>name: </b>".$user["name"];
    echo "<br>";

    echo "<b>surname: </b>".$user["surname"];
    echo "<br>";

    echo "<b>mobileNo: </b>".$user["mobileNo"];
    echo "<br>";
  }
  ?>
</body>
</html>