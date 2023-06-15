<?php
include "connection.php";
// session_start();

//get company deatils 
$sql = "SELECT * FROM company";
$result = mysqli_query($conn, $sql);
$cmpdetail = mysqli_fetch_assoc($result);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/f0c52e81ea.js"></script>
<!------ Include the above in your HEAD tag ---------->

<footer class="section footer-classic context-dark bg-image" style="background: #000000; color:white; ">
  <div class="container">
    <div class="row row-30">
      <div class="col-md-4 col-xl-5">
        <div class="pr-xl-4"><a class="brand" href="index.php"><img class="brand-logo-light" src="images/company_logo.png" alt="" width="150" height="150" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
          <!-- <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p> -->
          <!-- Rights-->
          <p class="rights" style="color:white;"><span>©  </span><span class="copyright-year">
            <!-- 2018 -->
            <?php
           echo date("Y");
            ?>
          </span><span> </span><span>Rolex Engineering</span><span>. </span><span>All Rights Reserved.</span></p>
        </div>
      </div>
      <div class="col-md-4">
        <!-- <h5>Contacts</h5> -->
        <dl class="contact-list">
          <dt>
          <h5>Address:</h5>
            <!-- <span class="bi bi-geo-alt"></span>
            <i class="bi bi-geo-alt"></i> -->
            
          </dt>
          <dd>
            <!-- rolex Engineering,rajkot -->
            <?php
            echo $cmpdetail['CMP_AddressLine1'].',<br>'.$cmpdetail['CMP_AddressLine2'].',<br>'.$cmpdetail['CMP_AddressLine3'];
            echo $cmpdetail['CMP_City']. ','.$cmpdetail['CMP_State'];
            ?>
          </dd>
        </dl>
        <dl class="contact-list">
          <dt><h5>Email:</h5></dt>
          <dd>
            <?php
            echo $cmpdetail['CMP_Email'];
            
            ?>
          </dd>
        </dl>
        <dl class="contact-list">
          <dt><h5>Phones:</h5></dt>
          <dd>
            <?php
            echo $cmpdetail['CMP_MobileNumber1'].'<br>'.$cmpdetail['CMP_MobileNumber2'];
          
            ?>
          </dd>
        </dl>
      </div>
      <div class="col-md-4 col-xl-3">
        <h5>Links</h5>
        <ul class="nav-list">
          <li><a href="about-us.php">About us</a></li>
          <li><a href="Products.php">Products</a></li>
          <li><a href="inquiry.php">Inquiry</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

 <!-- Bootstrap core JavaScript -->
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>