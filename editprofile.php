<!DOCTYPE html>
<html>

<head>
  <!-- title icon -->
  <link rel="icon" href="./images/company_logo.ico" type="image/x-icon">
</head>

<body>
    <!-- header -->
    <?php
    include 'header.php';

    $ed_profile=$_SESSION["ProfileName"];
	$result = mysqli_query($conn,"SELECT * FROM user_detail where user_id=$ed_profile");

	$row = mysqli_fetch_assoc($result);

    $result1 = mysqli_query($conn,"SELECT * FROM user_wise_address where User_ID=$ed_profile");

	$row1 = mysqli_fetch_assoc($result1);
	
    $ed_honename=$row1['UWA_AddressLine1'];
    $ed_society=$row1['UWA_AddressLine2'];
    $ed_landmark=$row1['UWA_AddressLine3'];
    $ed_pincode=$row1['UWA_Pincode'];
    $ed_city=$row1['UWA_City'];
    $ed_state=$row1['UWA_State'];
	$ed_fname=$row['User_FirstName'];
	$ed_email=$row['User_Email'];
    $ed_lname=$row['User_SurName'];
    $ed_pwd=$row['User_Password'];
    $ed_mno=$row['User_MobileNumber'];
    var_dump($_SESSION["ProfileName"]);



    ?>
    <!-- main content -->

    <div class="content-wrapper">
        <br><br><br><br><br><br>
    </div>
    <div class="content-wrapper">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile Settings</h4>
            </div>
            <form class="p-3 mt-2" action="modifyprofile.php" method="post">
                <div class="row mt-2">
                    <div class="col-md-5"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="fname" id="fname" value="<?php echo $ed_fname?>"></div>
                    <div class="col-md-5"><label class="labels">Surname</label><input type="text" class="form-control" name="lname" id="lname" value="<?php echo $ed_lname; ?>" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-10"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="mno" id="mno" value="<?php echo $ed_mno ?>"></div>
                    <div class="col-md-10"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" name="mail" id="mail" value="<?php echo $ed_email; ?>"></div>
                    <div class="col-md-10"><label class="labels">Home Name</label><input type="text" class="form-control" placeholder="Home Name" name="home" id="home" value="<?php echo $ed_honename; ?>"></div>
                    <div class="col-md-10"><label class="labels">Society Name</label><input type="text" class="form-control" placeholder="Society Name" name="society" id="soceity" value="<?php echo $ed_society; ?>"></div>
                    <div class="col-md-10"><label class="labels">Land Mark</label><input type="text" class="form-control" placeholder="LandMark" name="landmark" id="landmark" value="<?php echo $ed_landmark; ?>"></div>
                    <div class="col-md-10"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="Postcode" name="pincode" id="pincode"value="<?php echo $ed_pincode; ?>" onchange="get_address()"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5"><label class="labels">City</label><input type="text" class="form-control" placeholder="city" name="city" id="city" value="<?php echo $ed_city; ?>"></div>
                    <div class="col-md-5"><label class="labels">State</label><input type="text" class="form-control" name="state" id="state" value="<?php echo $ed_state; ?>" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" nmae="profile" type="submit">Save Profile</button></div>
            </form>
        </div>
    </div>

    <!-- footer  -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>
  <!-- get_address -->
  <script>
function get_address() 
{
  var pincode = jQuery('#pincode').val();

  if (pincode == '') {
    alert('Wrong pincode');
    jQuery('#city').val('');
    jQuery('#state').val('');

  }
  else
  {
    jQuery.ajax({
      url: 'get.php',
      type: 'post',
      data: 'pincode=' + pincode,
      success:function(data)
      {
        // console.log(data);
        if (data == 'no') {
          alert('Wrong pincode');
          jQuery('#city').val('');
          jQuery('#state').val('');
        }
        else
          {
          console.log(typeof(data))
          var getData = JSON.parse(data);
          var city=JSON.city;
          var state=JSON.state;
          jQuery('#city').val(getData.city);
          jQuery('#state').val(getData.state);
        }
      }
    });
  }
}
</script>