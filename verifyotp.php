<?php
session_start();

//var_dump($_SESSION["otp"]);
$purpose1=$_SESSION['purpose'];

if($purpose1=="reg_verification"){
//Purpose=Register
    if(isset($_POST['votp'])){ //check if form was submitted
    $input = $_POST['votp']; //get input text
    
    if($input==$_SESSION["otp"]){
            $email1=$_SESSION['email'];
            $fname1=$_SESSION['fname'];
            $lname1=$_SESSION['lname'];
            $pwd1=$_SESSION['pwd'];
            $mno1=$_SESSION['mno'];

            $con = mysqli_connect("localhost","root","");

            $db=mysqli_select_db($con,"fms");

            $sql = "insert into user_detail (User_ID,User_FirstName,User_SurName,User_MobileNumber,User_Email,User_Password) values(9,'$fname1','$lname1','$mno1','$email1','$pwd1')";

        $cmd=mysqli_query($con,$sql);

                if($cmd){

                    echo "data inserted successfully";
                    header('location:index.php');

                }

                else{

                    echo "Try Again", mysqli_error($con);

                }
            }
    }
}
elseif($purpose1=="f_verification"){
    //Purpose=Register
        if(isset($_POST['votp'])){ //check if form was submitted
        $input = $_POST['votp']; //get input text
            
    if($input==$_SESSION["otp"]){
        header("Location: changepassword.php?");
        }
    }
}
    else{
        $message="You Entered Wrong OTP.";
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify OTP</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>
<body>

<div class="wrapper">
        <div class="logo">
            <img src="images/company_logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
         <center>Verify OTP</center>
        </div>
        <form class="p-3 mt-3" action="" method="post">
        <?php echo $message; ?>
            <!-- first name -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-check-circle"></span>
                <input type="text" name="votp" id="FName" placeholder="OTP" required>
            </div>
            <button class="btn mt-3" type="submit" name="submit">Verify</button>
        </form>
    </div>

</body>
</html>