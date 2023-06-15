<?php
include "connection.php";
// include 'session.php';
session_start();
// $_SESSION['counter']=1;



if (isset($_POST['femail'])) {

    $femail = $_POST['femail'];

    if (empty($femail)) {

        header("Location: forgotpassword.php?error=User Name is required");

        // exit();

    } else {

        $_SESSION["f_email"]=$femail;
        
        $sql = "SELECT * FROM User_detail WHERE User_Email='$femail'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {

            $row = mysqli_fetch_assoc($result);

            if (empty($row)) {

                header("Location: forgotpassword.php?error=User Not Exist.");

                
            } else {

                header("location:Mail/index.php?email=$femail&purpose=f_verification",true);

                exit();
            }
        }
    }  
}      
else {

    header("Location: index.php");

    exit();
}