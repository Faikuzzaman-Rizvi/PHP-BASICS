<?php

session_start();
if (!isset($_SESSION['userName']) && !isset($_SESSION["password"])) {
    header("location:login.php");
}

$user = $_SESSION['userName'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard </h1>
    <h2>Hello <?php echo $user ?>!</h2>
</body>
</html>