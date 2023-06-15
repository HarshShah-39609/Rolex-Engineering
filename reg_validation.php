<?php
include "connection.php";
// include 'session.php';
session_start();
// $_SESSION['counter']=1;



if (isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['FName']) && isset($_POST['SName']) && isset($_POST['Mobile'])) {

    // function validate($data){

    //    $data = trim($data);

    //    $data = stripslashes($data);

    //    $data = htmlspecialchars($data);

    //    return $data;

    // }

    // $email = validate($_POST['email']);
    $email = $_POST['Email'];
    $pass = $_POST['Password'];
    $fname = $_POST['FName'];
    $sname = $_POST['SName'];
    $mobile = $_POST['Mobile'];
    // $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: login.php?error=User Name is required");

        // exit();

    } else {

        $_SESSION["email"]=$email;
        $_SESSION["fname"]=$fname;
        $_SESSION["lname"]=$sname;
        $_SESSION["pwd"]=$pass;
        $_SESSION["mno"]=$mobile;
                header("location:Mail/index.php?email=$email&purpose=reg_verification",true);
        
        
        // $sql = "SELECT * FROM User_detail WHERE User_Email='$email' AND User_Password='$pass'";

        // $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result)) {

        //     $row = mysqli_fetch_assoc($result);

        //     if ($row['User_Email'] === $email && $row['User_Password'] === $pass) {

        //         echo "Logged in!";

        //         // $_SESSION['user_name'] = $row['User_FirstName'];

        //         // $_SESSION['name'] = $row['name'];

        //         // $ProfileName= $row['User_FirstName'];
        //         $_SESSIION['ProfileName'] = $row['User_FirstName'];

        //         // echo $ProfileName;
        //         // $_SESSION['id'] = $row['id'];
        //         // redirect to accout
        //         $_SESSION['counter'] = 1;
        //         header("Location: index.php");

        //         exit();
        //     } else {

        //         header("Location: login.php?error=Incorect User name or password1");

        //         exit();
        //     }
        // } else {

        //     header("Location: login.php?error=Incorect User name or password");

        //     exit();
        // }
    }
} else {

    $_SESSION['counter'] = 1;
    header("Location: index.php");

    exit();
}