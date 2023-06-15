<!DOCTYPE html>
<html lang="en">

<head>
      <!-- title icon -->
<link rel="icon" href="./images/company_logo.ico" type="image/x-icon">
</head>

<body>    
    <?php
        include "header.php";

        include "connection.php";

        //start session
            if(!isset($_SESSION)) { 
                session_start(); 
        } 

        //get product details 
            $p_id=$_GET['id'];
            $_SESSION['p_id']=$p_id;
            $pdetail = mysqli_query($conn, "SELECT * FROM Product WHERE Product_ID=$p_id");
            if ($row = mysqli_fetch_array($pdetail)) {
                    $Pro_Name = $row['Product_Name'];
                    $Pro_Price = $row['Product_Price'];
                    $_SESSION['pr_price']=$Pro_Price;
                    $_SESSION['pr_name']=$Pro_Name;
            } else {
                    echo mysqli_error($conn);
            }

        $ed_profile=$_SESSION["ProfileName"];
        $result1 = mysqli_query($conn,"SELECT * FROM user_wise_address where User_ID=$ed_profile");

        $row1 = mysqli_fetch_assoc($result1);
        $ua_id=$row1['UserWiseAddress_ID'];
        $_SESSION['uw_aid']=$ua_id;

        $ed_honename=$row1['UWA_AddressLine1'];
        $ed_society=$row1['UWA_AddressLine2'];
        $ed_landmark=$row1['UWA_AddressLine3'];
        $ed_pincode=$row1['UWA_Pincode'];
        $ed_city=$row1['UWA_City'];
        $ed_state=$row1['UWA_State'];

    ?>
    <!-- Headr -->
    <div class="content-wrapper">
        <br><br><br>
    </div>
    <div class="content-wrapper">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Conform Order</h4>
            </div>
            <form class="p-3 mt-2" action="Order_purchase.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-5"><label class="labels">Product Name</label><input type="text" class="form-control" placeholder="Product Name" name="fname" id="fname" value="<?php echo $Pro_Name; ?>"></div>
                    <div class="col-md-5"><label class="labels">Price (With GST)</label><input type="text" class="form-control" name="lname" id="lname" value="" placeholder="<?php echo $Pro_Price; ?>"></div>
                </div>
                <div class="row mt-3">
                    <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="text-right">Payment Details</h5>
                    </div> -->
                    <div class="col-md-10"><label for="paymenttype">Payment Type</label><br>
                                            <select id="paymenttype" name="paymenttype" size="3">
                                            <option value="0">Online Banking</option>
                                            <option value="1">Cash On Delivery</option>
                    </select></div>
                    <div class="col-md-5"><label class="labels">Payment Value</label><input type="text" class="form-control" name="pvalue" id="pvalue" value="<?php echo $Pro_Price; ?>" placeholder="Payment Value"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-10"><label class="labels">Home Name</label><input type="text" class="form-control" placeholder="Home Name" name="home" id="home" value="<?php echo $ed_honename; ?>"></div>
                    <div class="col-md-10"><label class="labels">Society Name</label><input type="text" class="form-control" placeholder="Society Name" name="society" id="soceity" value="<?php echo $ed_society; ?>"></div>
                    <div class="col-md-10"><label class="labels">Land Mark</label><input type="text" class="form-control" placeholder="LandMark" name="landmark" id="landmark" value="<?php echo $ed_landmark; ?>"></div>
                    <div class="col-md-10"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Postcode" name="pincode" id="pincode"value="<?php echo $ed_pincode; ?>" onchange="get_address()"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5"><label class="labels">City</label><input type="text" class="form-control" placeholder="city" name="city" id="city" value="<?php echo $ed_city; ?>"></div>
                    <div class="col-md-5"><label class="labels">State</label><input type="text" class="form-control" name="state" id="state" value="<?php echo $ed_state; ?>" placeholder="state"></div>
                </div>
                
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name="profile" type="submit">Book Now</button></div>
                <div class="mt-5 text-center"><a href="products.php" class="btn btn-primary profile-button" nmae="cancel" type="" >Cancel</a></div>
            </form>
        </div>
    </div>

    <!-- footer  -->
    <?php
    include 'footer.php';
    ?>
    <?php
    include "footer.php";
    ?>
</body>

</html>