<?php
include 'connection.php';
$sql = "SELECT * FROM Product";
$result = mysqli_query($conn, $sql);

if(isset($_POST['inquiry']))
{
  $n=$_POST['name'];
  $mob=$_POST['mobile'];
  $p=$_POST['pincode'];
  $c=$_POST['city'];
  $s=$_POST['state'];
  $msg=$_POST['message'];
  $pid=$_POST['pid'];
  $dat=date("Y-m-d"); 
  $insquery="insert into Inquiry(INQ_MobileNumber,INQ_Name,Product_ID,INQ_Message,INQ_Date,INQ_Pincode,INQ_City,
   INQ_State,INQ_Status)values($mob,'$n',$pid,'$msg','$dat',$p,'$c','$s',0)";  
   $ans=mysqli_query($conn, $insquery);
  if($ans)
  {
?>  
    <script>
      alert("inquiry send successfully ");
      </script>
<?php 
  }
  else
  {
    ?>
    <script>
      alert("invalid");
      </script>
<?php 

  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- title icon -->
<link rel="shortcut icon" href="./images/company_logo.ico" type="image/x-icon">
  <!-- pincode -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

  <?php
  include 'header.php';
  ?>

  <!-- Page Content  -->
  <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/supari-banner.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Rolex Engineering</h4>
            <h2>Inquiry</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- inquiry form -->
  <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Inquiry</h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="contact-form">
            <form  action="inquiry.php" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="mobile" type="tel" class="form-control" id="mobile" placeholder="Mobile No"  minlength="10" maxlength="10" required>
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <input  type="text" class="form-control" id="pincode" name="pincode" placeholder="PinCode" maxlength="6"  required onChange="get_address()"> 
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <input  type="text" class="form-control" id="city" name="city" placeholder="city">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <fieldset>
                    <input  type="text" class="form-control" id="state"  name="state" placeholder="state">
                  </fieldset>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <select class="form-select" aria-label="Default select example" id="pid" name="pid">
                
                  <option value="">Select Product</option>
                  <?php
                  
                  $sql = "SELECT * FROM Product order by Product_ID";
                  $result = mysqli_query($conn, $sql);
                  while ($productdetail = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="
                    <?php echo $productdetail['Product_ID'];  ?>
                    ">
                      <?php echo $productdetail['Product_Name']; ?>
                    </option>

                  <?php
                  }
                  ?>
                  </select>
                  <!-- <input type="submit" name="Submit" value="Select" /> -->

                  <!-- try end -->
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="inquiry"  name="inquiry" class="filled-button" >Inquiry</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">

          <img src="./assets/images/product-inquiry-icon.png" class="img-fluid">

          <!-- <h5 class="text-center" style="margin-top: 15px;">Rolex Engineering</h5 -->
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'footer.php';
  ?>


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

</body>
</html>
