<?php
include "connection.php";

session_start();

$or_profile=$_SESSION["ProfileName"];

$result = mysqli_query($conn,"SELECT * FROM user_detail where user_id=$or_profile");
$row = mysqli_fetch_assoc($result);
$p_email=$row['User_Email'];

$id = $_SESSION['p_id'];
$uw_aid = $_SESSION['uw_aid'];
$dat=date("Y-m-d");
$pro_price=$_SESSION['pr_price'];
$payment=$_POST['paymenttype'];
$t_id = rand(1000,9999);

if($payment==0){
    $result = mysqli_query($conn,"insert into user_order 
            (Order_ID,user_ID,Product_ID,Order_Quantity,UserWiseAddress_ID,Order_Date,Order_PaymentMethod,
            Order_Amount,Order_Status,Order_Transaction_ID,Order_CourierTrackNumber,Order_CourierName,Order_CourierMobileNumber) 
            values ('','$or_profile','$id','1','$uw_aid','$dat','$payment','$pro_price','0','$t_id','0','0','0')");

        if($result){

                    echo "data inserted successfully";
                    header("location:Mail/index.php?email=$p_email&purpose=book",true);
                    
                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }
}
else
{   
    $result = mysqli_query($conn,"insert into user_order 
            (Order_ID,user_ID,Product_ID,Order_Quantity,UserWiseAddress_ID,Order_Date,Order_PaymentMethod,
            Order_Amount,Order_Status,Order_Transaction_ID,Order_CourierTrackNumber,Order_CourierName,Order_CourierMobileNumber) 
            values ('','$or_profile','$id','1','$uw_aid','$dat','$payment','$pro_price','0','0','0','0','0')");

        if($result){

                    echo "data inserted successfully";
                    header("location:Mail/index.php?email=$p_email&purpose=book",true);
                    
                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }
}




?>