<?php
include "connection.php";

session_start();

$cd_profile=$_SESSION["ProfileName"];
$id = $_GET['id'];

$pdetail = mysqli_query($conn, "SELECT * FROM Product WHERE Product_ID=$id");
  if ($row = mysqli_fetch_array($pdetail)) {
    $Product_ID = $row['Product_ID'];
    $Product_Name = $row['Product_Name'];
    $Product_Price = $row['Product_Price'];
  }

$result = mysqli_query($conn,"insert into user_cart (cart_id,user_id,product_id,product_name,product_price) values ('','$cd_profile','$id','$Product_Name','$Product_Price')");

        if($result){

                    echo "data inserted successfully";
                    header('location:products.php');
                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }
?>