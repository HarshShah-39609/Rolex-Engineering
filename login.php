<?php
include 'connection.php';
session_start();
// $_SESSION['counter']=1;
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rolex Enginerring</title>
    <!-- title icon -->
<link rel="shortcut icon" href="./images/company_logo.ico" type="image/x-icon">

    <!-- Font Icon -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Main css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>


<div class="wrapper">
        <div class="logo">
            <img src="images/company_logo.png" alt="">
        </div>
        <div class="mt-4 name">
            <center>Login</center>
        </div>
        <form class="p-3 mt-2" action="login_validation.php" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <button class="btn mt-3" type="submit" name="submit" >Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="forgotpassword.php">Forget password?</a> OR <a href="reg.php">Registration</a>
        </div>
</div>
</body>
</html>
