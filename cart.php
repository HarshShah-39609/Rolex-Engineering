<!DOCTYPE html>
<html lang="en">

<head>
      <!-- title icon -->
<link rel="icon" href="./images/company_logo.ico" type="image/x-icon">
</head>

<body>

    <!-- Header -->
    <?php
    include "header.php";
    ?>
    <br><br><br><br><br><br>
    <!-- cart  -->
    <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Your Cart</h4>
    </div>

    <table class="table table-bordered">
          <thead>
            <tr>
              <th class="col-md-1">Product Name</th>
              <th class="col-md-1">Price(With GST)</th>
              <th class="col-md-1">Sub Total</th>
              <th class="col-md-1">#</th>
            </tr>
          </thead>
                <?php 
                    $cd_profile=$_SESSION["ProfileName"];

                    $result = mysqli_query($conn,"select * from user_cart where user_id='$cd_profile'");
                ?>
          <tbody>  
          <?php
            $sum=0;
            while( $row = mysqli_fetch_row($result) ){
                $sum += $row[4];
             echo

            "<tr>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[4]</td>
                <td> </td>
            </tr>";
            }?>
            <tr>
                <td></td>
                <th class="col-md-1">Total Value</th>
                <td><?php echo  $sum ?></td>
            <tr>
         </tbody>
        </table>

        <div class="mt-5 text-center"><a href="emptycart.php" class="btn btn-primary profile-button" nmae="cancel" type="" >Empty Cart</a></div>
            <br><br>
        <!-- Headr -->
    <?php
    include "footer.php";
    ?>
</body>

</html>