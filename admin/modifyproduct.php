<?php
include 'connection.php';
if(isset($_POST['btnupdproduct']))
{
    $id=$_POST['id'];
    $proname = $_POST['proname'];
    $proprice = $_POST['proprice'];
    $prowarranty = $_POST['prowarranty'];
    $proproductionrate = $_POST['proproductionrate'];
    $probody = $_POST['probody'];
    $proweight = $_POST['proweight'];
    $propowercon = $_POST['propowercon'];
    $promotorsize = $_POST['promotorsize'];
    $prorpm = $_POST['prorpm'];
    $prodimension = $_POST['prodimension'];
    $proacc = $_POST['proacc'];
    $proother = $_POST['proother'];
    $prolink = $_POST['prolink'];



    // image code 
    if (isset($_FILES['img1'])) {
        $img1 = $_FILES['img1']['name'];
        $path = "../images/";
        $image_ext = pathinfo($img1, PATHINFO_EXTENSION);
        $filename1 = time() . '.' . $image_ext;
    }

    if (isset($_FILES['img2'])) {
        $img2 = $_FILES['img2']['name'];
        $path = "../images/";
        $image_ext = pathinfo($img2, PATHINFO_EXTENSION);
        $filename2 = time() . '.' . $image_ext;
    }
   $img1_old   =$_POST['img1_old'];
   $img2_old   =$_POST['img2_old'];
   
   if($img1 !='')
   {
        $update_filename1= $img1;
   }
   else
   {
    $update_filename1=$img1_old;
   }

   if($img2 !='')
   {
        $update_filename2= $img2;
   }
   else
   {
        $update_filename2=$img2_old;
   }

    $inspro = "UPDATE PRODUCT SET  Product_Name='$proname',
    Product_Price=' $proprice',
    Product_Warranty='$prowarranty',
    Product_ProductionRate='$proproductionrate',
    Product_BodyMaterial=' $probody',
    Product_PowerConsumption='$propowercon',
    Product_Weight='$proweight',
    Product_Dimension='$prodimension',
    Product_MotorSize='$promotorsize',
    Product_MotorRPM='$prorpm',
    Product_IncludedAccessories='$proacc',
    Product_OtherDetails='$proother',
    Product_Image1='$update_filename1',
    Product_Image2='$update_filename2',
    Product_Video='$prolink' 
    WHERE
    Product_ID='$id'";
    

    $ans = mysqli_query($conn, $inspro);
    if ($ans) {

        move_uploaded_file($_FILES['img1']['tmp_name'], $path . '/' . $update_filename1);
        move_uploaded_file($_FILES['img2']['tmp_name'], $path . '/' . $update_filename2);
         echo mysqli_error($conn);
            // header("location:editproduct.php");
?>
        <script>
            alert("Product edited successfully ");
        </script>
    <?php

    } else {
        // header("location:addproduct.php");
        echo mysqli_error($conn);
    ?>

        <script>
            alert("error");
        </script>
<?php
    }
}
?>