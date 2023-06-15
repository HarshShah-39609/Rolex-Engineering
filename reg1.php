<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Rolex Engineering</title>
    <!-- title icon -->
<link rel="shortcut icon" href="./images/company_logo.ico" type="image/x-icon">
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
         <center>Registration</center>
        </div>
        <form class="p-3 mt-3">
            <!-- first name -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="FName" id="FName" placeholder="First Name" required>
            </div>
            <!-- surname -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="SName" id="SName" placeholder="Last Name" required>
            </div>
            <!-- Mobile -->
            <div class="form-field d-flex align-items-center">
                <span class="fa fa-phone"></span>
                <input type="text" name="Mobile" id="Moblie" placeholder="Mobile" required>
            </div>
            <!-- Email -->
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="text" name="Email" id="Email" placeholder="Email Address" required>
            </div>
            <!-- password -->
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="Password" id="Pwd" placeholder="Password" required>
            </div>
            <button class="btn mt-3">Registration</button>
        </form>
        <div class="text-center fs-6">
            <!-- <a href="#">Forget password?</a>   -->
           <center> <a href="Login.php">Login</a></center>  
        </div>
    </div>

</body>
</html>