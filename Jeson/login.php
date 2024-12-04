<?php 
session_start();

$user = $_SESSION["userName"] ?? null;
if ($user) {
  header("location:dashboard.php");
    exit();
}


if(isset($_POST["email"]) && isset($_POST['password'])){
    $name = $_POST["email"];
    $password = $_POST["password"];
    if($name == "admin" && $password = "1234"){
      $_SESSION["userName"] = $name;
      header("location:dashboard.php");
      exit();
    }else {
      echo "Invalid username or password";
    }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f2f5;
    }

    .login-container {
      background: #ffffff;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input:focus {
      border-color: #007bff;
      outline: none;
    }

    .btn-login {
      width: 100%;
      background-color: #007bff;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-login:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password">
      </div>
      <button type="submit" class="btn-login">Login</button>
    </form>
  </div>
</body>
</html>
