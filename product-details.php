<?php
include 'header.php';
if (isset($_GET['pid'])) {
  $id = $_GET['pid'];
  $pdetail = mysqli_query($conn, "SELECT * FROM Product WHERE Product_ID=$id");
  if ($row = mysqli_fetch_array($pdetail)) {
    $Product_ID = $row['Product_ID'];
    $Product_Name = $row['Product_Name'];
    $Product_Price = $row['Product_Price'];
    $Product_Warranty = $row['Product_Warranty'];
    $Product_ProductionRate = $row['Product_ProductionRate'];
    $Product_BodyMaterial = $row['Product_BodyMaterial'];
    $Product_PowerConsumption = $row['Product_PowerConsumption'];
    $Product_Weight = $row['Product_Weight'];
    $Product_Dimension = $row['Product_Dimension'];
    $Product_MotorSize = $row['Product_MotorSize'];
    $Product_MotorRPM = $row['Product_MotorRPM'];
    $Product_IncludedAccessories = $row['Product_IncludedAccessories'];
    $Product_OtherDetails = $row['Product_OtherDetails'];
    $Product_Image1 = $row['Product_Image1'];
    $Product_Image2 = $row['Product_Image2'];
    $Product_Video = $row['Product_Video'];
  } else {
    echo mysqli_error($conn);
  }
}
?>
!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>


  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Rolex Engineering</h4>
            <h2>Product Details</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12">
          <div>
            <?php
            echo " <img src='./images/$Product_Image1' alt='$Product_Name' class='img-fluid wc-image'  style='border:2px solid;height: 300px; width:  500px;'>";
            ?>

          </div>
          <br>
          <div class="row">
            <div class="col-sm-4 col-xs-6">
              <div>
                <?php
                echo " <img src='./images/$Product_Image1' alt='$Product_Name' class='img-fluid wc-image' style='border:2px solid'>";
                ?>
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-xs-6">
              <div>
                <?php
                echo " <img src='./images/$Product_Image2' alt='$Product_Name' class='img-fluid wc-image' style='border:2px solid'>";
                ?>
              </div>
              <br>
            </div>
            <div class="col-sm-4 col-xs-6">
              <div>
                <!-- <video width="200px" height="200px" controls="controls"> -->
                <?php
                // echo " <img src='./images/$Product_video' alt='$Product_Name' class='img-fluid wc-image'>";
                echo "<iframe width='100' height='96'  src='$Product_Video?autoplay=1&mute=1' style='border:2px solid'></iframe>";
                ?>
                </video>

              </div>
              <br>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-xs-12">
          <h2>
            <?php echo  $Product_Name ?>
          </h2>

          <br>

          <p class="lead">
            <strong> &#8377; <?php echo  $Product_Price ?></strong>
          </p>

          <br>

          <div class="col-sm-6">
            
            <a href="addcart.php?id=<?php echo $Product_ID?>" name="addtocart" id="addtocart" class="btn btn-primary btn-block" >Add to Cart</a>
            <a href="book_order.php?id=<?php echo $Product_ID?>" name="buy" id="buy" class="btn btn-primary btn-block" >Buy Now</a>
            <p>
              All India Free delivery avaiable
            </p>

            <p class="lead">
              Thanks for choosing our product
            </p>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Products Specifiaction</h2>
            <!-- <a href="products.html">view more <i class="fa fa-angle-right"></i></a> -->
          </div>
        </div>
        <?php

        ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Name</td>
              <td>
                <?php echo $Product_Name; ?>
              </td>
            </tr>
            <tr>
              <td>Warranty</td>
              <td>
                <?php echo $Product_Warranty; ?>
              </td>
            </tr>
            <tr>
              <td>Production Rate</td>
              <td>
                <?php echo $Product_ProductionRate; ?>
              </td>
            </tr>
            <tr>
              <td>Body Materila</td>
              <td>
                <?php echo $Product_BodyMaterial; ?>
              </td>
            </tr>
            <tr>
              <td>Power Consumption</td>
              <td>
                <?php echo $Product_PowerConsumption; ?>
              </td>
            </tr>
            <tr>
              <td>Weight </td>
              <td>
                <?php echo $Product_Weight; ?>
              </td>
            </tr>
            <tr>
              <td>Dimesion</td>
              <td>
                <?php echo $Product_Dimension; ?>
              </td>
            </tr>
            <tr>
              <td>Motor Size</td>
              <td>
                <?php echo $Product_MotorSize; ?>
              </td>
            </tr>
            <tr>
              <td>Motor RPM</td>
              <td>
                <?php echo $Product_MotorRPM; ?>
              </td>
            </tr>
            <tr>
              <td>Included Accessories</td>
              <td>
                <?php echo $Product_IncludedAccessories; ?>
              </td>
            </tr>
            <tr>
              <td>Note </td>
              <td>
                <?php echo $Product_OtherDetails; ?>
              </td>
            </tr>
            <!-- <tr>
              <td>Larry</td>
              <td>the Bird</td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <?php
  include "footer.php";
  ?>

</body>

</html>



