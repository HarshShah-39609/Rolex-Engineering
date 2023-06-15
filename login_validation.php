<?php
include "connection.php";
// include 'session.php';
session_start();
// $_SESSION['counter']=1;



if (isset($_POST['email']) && isset($_POST['password'])) {

    // function validate($data){

    //    $data = trim($data);

    //    $data = stripslashes($data);

    //    $data = htmlspecialchars($data);

    //    return $data;

    // }

    // $email = validate($_POST['email']);
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: login.php?error=User Name is required");

        // exit();

    } else if (empty($pass)) {

        header("Location: login.php?error=Password is required");

        // exit();

    } else {

        $sql = "SELECT * FROM User_detail WHERE User_Email='$email' AND User_Password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)) {

            $row = mysqli_fetch_assoc($result);

            if ($row['User_Email'] === $email && $row['User_Password'] === $pass) {

                echo "Logged in!";

                // $_SESSION['user_name'] = $row['User_FirstName'];

                // $_SESSION['name'] = $row['name'];

                // $ProfileName= $row['User_FirstName'];
                echo $row['User_ID'];
                $p_name = $row['User_ID'];
                $_SESSION["ProfileName"] = $p_name; 
                // echo $ProfileName;
                // $_SESSION['id'] = $row['id'];
                // redirect to accout
                $_SESSION['counter'] = 1;
                header("Location: index.php");

                
            } else {

                header("Location: login.php?error=Incorect User name or password1");

                exit();
            }
        } else {

            header("Location: login.php?error=Incorect User name or password");

            exit();
        }
    }
}
else{

}
