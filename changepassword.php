<?php
include 'connection.php';
session_start();
// $_SESSION['counter']=1;

if(isset($_POST['newpassword']) && ($_POST['retypepassword']) ) { //check if form was submitted
    $password = $_POST['newpassword'];
    $c_password = $_POST['retypepassword'];

    if($password==$c_password){
        $femail1=$_SESSION['f_email'];

        $sql = "update user_detail set User_Password='$password' where User_Email='$femail1'";

        $cmd=mysqli_query($conn,$sql);

                if($cmd){

                    echo "data inserted successfully";
                    header('location:index.php');

                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }
    }

}



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


<div class="wrapper">
        <div class="logo">
            <img src="images/company_logo.png" alt="">
        </div>
        <div class="mt-4 name">
            <center>Change Password</center>
        </div>
        <form class="p-3 mt-2" action="" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="newpassword" id="newpassword" placeholder="New Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="text" name="retypepassword" id="retypepassword" placeholder="Re-Type Password">
            </div>
            <button class="btn mt-3" type="submit" name="submit">Change Password</button>
        </form>
</div>
</body>
</html>