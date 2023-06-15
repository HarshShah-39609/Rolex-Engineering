<?php
include "connection.php";
 // include 'session.php';
session_start();
 // $_SESSION['counter']=1;
 
    $email = $_POST['mail'];
    $home=$_POST['home'];
    $society=$_POST['society'];
    $landmark=$_POST['landmark'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
	$fname=$_POST['fname'];
	$mail=$_POST['mail'];
    $lname=$_POST['lname'];
    $mno=$_POST['mno'];
    var_dump($_SESSION["ProfileName"]);
    $PF=$_SESSION["ProfileName"];

    $sql = "update user_detail set User_FirstName='$fname',User_SurName='$lname',User_MobileNumber='$mno',User_Email='$mail' where User_ID='$PF'";

    $cmd=mysqli_query($conn,$sql);
    
    $sql1 = "update user_wise_address set UWA_AddressLine1='$home',UWA_AddressLine2='$society',UWA_AddressLine3='$landmark',UWA_Pincode='$pincode',UWA_City='$city',UWA_state='$state' where User_ID='$PF'";

    $cmd1=mysqli_query($conn,$sql1);    

                if($cmd && $cmd1){

                    echo "data inserted successfully";
                    header('location:index.php');

                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }

?>