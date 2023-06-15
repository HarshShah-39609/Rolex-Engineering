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
    <title>Sign Up Form by Colorlib</title>

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
    <?php
        if(isset($email))
        {
            $email =$_POST['email'];
            $sql = "SELECT * FROM User_detail where User_Email=$email";
            $result = mysqli_query($conn, $sql);
            $forgetpwd = mysqli_fetch_assoc($result);
    ?>
        <div class="wrapper">
            <div class="logo">
                <img src="images/company_logo.png" alt="">
            </div>
            <div class="mt-4 name">
                <center>Enter OTP</center>
            </div>
            <form class="p-3 mt-2" action="changepassword.php" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="otp" id="otp" placeholder="OTP">
                </div>

                <button class="btn mt-3" type="submit" name="submit">Verify</button>
            </form>
            <div class="text-center fs-6">
                <p>Don't go to previous page</p>
            </div>
        </div>
    <?php
    }
    else
    {
    ?>
        <div class="wrapper">
            <div class="logo">
                <img src="images/company_logo.png" alt="">
            </div>
            <div class="mt-4 name">
                <center>Reset</center>
            </div>
            <form class="p-3 mt-2" action="f_verify.php" method="post">
                <div class="form-field d-flex align-items-center">
                    <span class="far fa-user"></span>
                    <input type="text" name="femail" id="femail" placeholder="Email">
                </div>
                <button class="btn mt-3" type="submit" name="submit">GET OTP</button>
            </form>
            <!-- <div class="text-center fs-6">
                <a href="">Forget password?</a> OR <a href="reg.php">Registration</a>
            </div> -->
        </div>
    <?php
    }
    ?>

</body>

</html>