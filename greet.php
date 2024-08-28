<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = htmlspecialchars($_POST['username']);
     greetUser($username);
}

function greetUser($name) {
     $hour = date("H");
     $var = date('H');
     $hour=$var+5;

     if ($hour < 12) {
         echo "Good Morning, $name!";
     } elseif ($hour >= 12 && $hour < 18) {
         echo "Good Afternoon, $name!";
     } else {
         echo "Good Evening, $name!";
     }
}

?>

<form method="post" action="">
<label for="username">Enter your name:</label>
<input type="text" id="username" name="username" required>
<input type="submit" value="Submit">
</form>

</body>
</html>





