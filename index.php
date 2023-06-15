<!DOCTYPE html>
<html lang="en">

<head>
  <!-- title icon -->
<link rel="icon" href="./images/company_logo.ico" type="image/x-icon">
</head>

<body>

  <!-- Header -->
  <?php
  include 'header.php';
  ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">

      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->


  <div class="latest-products">
    <div class="container">
      <div class="row">
        <!-- menu name -->
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Products</h2>
            <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <!-- product card  -->
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM product  limit 0,6");
        while ($row = mysqli_fetch_assoc($sql)) {
          $pid = $row['Product_ID'];
          $pname = $row['Product_Name'];
          $pprice = $row['Product_Price'];
          $pimg1 = $row['Product_Image1'];
          $pdimesion = $row['Product_Dimension'];
          echo "<div class='col-md-4'>
              <div class='product-item' >
                <a href='product-details.php?pid=$pid'><img src='images/$pimg1' width='200px' height='250px' alt='$pname'>
                <div class='down-content'>
                 <h4>$pname</h4>
                  <h6>  &#8360  $pprice</h6>
                 <p></p> 
                </div>
                </a>
              </div>
            </div>";
        }
        ?>

        <!-- static product -->
        <!-- <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="assets/images/download (5).jfif" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>Supari Cutting Machine.</h4></a>
                <h6><small><del>20999.00 </del></small> 17379.00</h6>
                <br>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta voluptas quia dolor fuga odit.</p> 
              </div>
            </div>
          </div> -->
      </div>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>
</body>

</html>