<!DOCTYPE html>
<html lang="en">

<head>
<!-- title icon -->
<link rel="shortcut icon" href="./images/company_logo.ico" type="image/x-icon">
</head>

<body>

  <?php
  include 'header.php';
  ?>

  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/supari-banner.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Rolex Engineering</h4>
            <h2>Products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">

        <!--  product card -->
        <?php
          $sql=mysqli_query($conn,"SELECT * FROM product ORDER BY rand() ");
          while($row=mysqli_fetch_assoc($sql))
          {
              $pid=$row['Product_ID'];
              $pname=$row['Product_Name'];
              $pprice=$row['Product_Price'];
              $pimg1=$row['Product_Image1'];
              $pdimesion=$row['Product_Dimension'];
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

        <!-- static product  -->
        <!-- <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.html"><img src="assets/images/download.jfif" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>Tukda Supari (Betel Nut) Grader.</h4></a>
                <h6><small><del>12999.00</del></small>   11779.00</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nisi quia aspernatur, harum facere delectus saepe enim?</p>
              </div>
            </div>
          </div> -->


      </div>
    </div>
  </div>

  <!-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2022 Rolex Engineering</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->

  <!-- Modal -->
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div> -->
  </div>

  <?php
  include 'footer.php';
  ?>
</body>

</html>