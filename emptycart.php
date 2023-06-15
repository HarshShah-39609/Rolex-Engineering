<?php
include "connection.php";

session_start();

$cd_profile=$_SESSION["ProfileName"];
$id = $_GET['id'];

$result = mysqli_query($conn,"delete from user_cart where user_id='$cd_profile'");

        if($result){

                    echo "data inserted successfully";
                    header('location:cart.php');
                }

                else{

                    echo "Try Again", mysqli_error($conn);

                }
?>