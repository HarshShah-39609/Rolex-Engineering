<!DOCTYPE html>
<html lang="en">

<head>
      <!-- title icon -->
<link rel="icon" href="./images/company_logo.ico" type="image/x-icon">
    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <!-- Header -->
    <?php
    include "header.php";
        
    $p_profile=$_SESSION["ProfileName"];
	$result = mysqli_query($conn,"SELECT * FROM user_detail where user_id=$p_profile");

    $result1 = mysqli_query($conn,"SELECT * FROM user_wise_address where User_ID=$p_profile");

	$row1 = mysqli_fetch_assoc($result1);

	$row = mysqli_fetch_assoc($result);
	
    $p_honename=$row1['UWA_AddressLine1'];
    $p_society=$row1['UWA_AddressLine2'];
    $p_landmark=$row1['UWA_AddressLine3'];
    $p_pincode=$row1['UWA_Pincode'];
    $p_city=$row1['UWA_City'];
    $p_state=$row1['UWA_State'];
	$p_fname=$row['User_FirstName'];
	$p_email=$row['User_Email'];
    $p_lname=$row['User_SurName'];
    $p_pwd=$row['User_Password'];
    $p_mno=$row['User_MobileNumber'];
    var_dump($_SESSION["ProfileName"]);
    ?>
    <!-- page content -->
    <div class="content-wrapper">
        <br><br><br><br><br><br>
    </div>
    <!-- try -->
    <div class="content-wrapper">
        <div class="container ">

            <!-- Main content -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"> <strong><h4>Your Profile</h4></strong></p>
                            </div>
                            <div class="col-sm-9">
                               
                                <a href="editprofile.php?id=<?php echo $p_profile ?>" class="btn btn-success">Edit</a>
                             </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"> <strong><h5>Full Name</h5></strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-dark"><strong><?php echo $p_fname.' '.$p_lname; ?></strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong><h5>Email</h5></strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><strong><?php echo $p_email; ?></strong></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong><h5>Mobile</h5></strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><strong><?php echo (!empty($p_mno)) ? $p_mno : 'N/a'; ?></strong></p>
                            </div>
                        </div>
                    
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong><h5>Address</h5></strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><strong><?php echo $p_city.','.$p_state; ?></strong></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
            <!-- end -->
            <!-- Headr -->
            <?php
            include "footer.php";
            ?>
</body>

</html>