<?php
include 'connection.php';
include 'menubar.php';

// start
if (isset($_POST['btnaddproduct'])) {
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
    // $img1 = $_POST['img1'];
    // $img2 = $_POST['img2'];
    $prolink = $_POST['prolink'];

    // image code 
    // if (isset($_FILES['img1'])) {
    //     $img1 = $_FILES['img1']['name'];
    //     $path = "../images/";
    //     $image_ext = pathinfo($img1, PATHINFO_EXTENSION);
    //     $filename1 = time() . '.' . $image_ext;
    // }

    // if (isset($_FILES['img2'])) {
    //     $img2 = $_FILES['img2']['name'];
    //     // $tempname1 = $_FILES["img2"]["tmp_name"];
    //     // $folder = "images/" . $img2;
    //     $path = "../images/";
    //     $image_ext = pathinfo($img2, PATHINFO_EXTENSION);
    //     $filename2 = time() . '.' . $image_ext;
    // }

    $img1 = $_FILES['img1']['name'];
    $img2 = $_FILES['img2']['name'];
    $target_dir = "../images/";
    $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
     // Select file type
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png");
    // Check extension
    if( in_array($imageFileType1,$extensions_arr) && in_array($imageFileType2,$extensions_arr) )
    {
        // Upload file
        if(move_uploaded_file($_FILES['img1']['tmp_name'],$target_dir.$img1) && move_uploaded_file($_FILES['img2']['tmp_name'],$target_dir.$img2))
        {
            // Insert record
            $inspro = "INSERT INTO PRODUCT (Product_Name,Product_Price,Product_Warranty,Product_ProductionRate,Product_BodyMaterial,
            Product_PowerConsumption,Product_Weight,Product_Dimension,Product_MotorSize,Product_MotorRPM,Product_IncludedAccessories,
            Product_OtherDetails,Product_Image1,Product_Image2,Product_Video,Product_Rating)
            VALUES('$proname',$proprice,'$prowarranty','$proproductionrate','$probody','$propowercon','$proweight','$prodimension','$promotorsize',
            '$prorpm','$proacc','$proother','$img1','$img2','$prolink',0)";

            $ans = mysqli_query($conn, $inspro);
            if ($ans) {

                // move_uploaded_file($_FILES['img1']['tmp_name'], $path . '/' . $filename1);
                // move_uploaded_file($_FILES['img2']['tmp_name'], $path . '/' . $filename2);
                // header("location:addproduct.php");
                ?>
                <script>
                    alert("Product Added successfully ");
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
    }
}
// end

?>
<div class="content-wrapper">
    <center>
        <p>
        <h1>Add Product</h1>
        </p>
    </center>
    <table class="table table-striped">
        <thead>
            <tr>
                <div class="col-lg-6 col-md-6 col-sm-">
                    <th scope="col">Name</th>
                </div>
                <th scope="col">Details</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <!-- name -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Product Name </h4>
                    </div>
                </td>
                <td>
                    <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset><input type="text" class="form-control" name="proname" id="proname" placeholder="Name" required></fieldset>
                        </div>
                </td>
                <!-- price -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Price </h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="tel" class="form-control" name="proprice" id="proprice" placeholder="Price" required></fieldset>
                    </div>
                </td>
                <!-- warranty -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Warranty </h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="prowarranty" id="prowarranty" placeholder="Warranty" required></fieldset>
                    </div>
                </td>
                <!-- production rate -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Production Rate </h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="proproductionrate" id="proproductionrate" placeholder="Rate" required></fieldset>
                    </div>
                </td>

                <!-- Power Consumption -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Power Consumption</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="propowercon" id="propowercon" placeholder="Power" required></fieldset>
                    </div>
                </td>
                <!-- Body Material -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Body Material</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input stype="text" class="form-control" name="probody" id="probody" placeholder="Material" required></fieldset>
                    </div>
                </td>
                <!-- weight -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Weight</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="proweight" id="proweight" placeholder="Weight" required></fieldset>
                    </div>
                </td>
                <!-- Dimension -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Dimension</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="prodimension" id="prodimension" placeholder="Dimension" required></fieldset>
                    </div>
                </td>
                <!-- motor size -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Motor Size</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="promotorsize" id="promotorsize" placeholder="Size" required></fieldset>
                    </div>
                </td>
                <!-- Motor RPM -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Motor RPM</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset>
                            <input type="text" class="form-control" name="prorpm" id="prorpm" placeholder="RPM" required>
                        </fieldset>
                    </div>
                </td>

                <!-- Accessories -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Accessories</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="proacc" id="proacc" placeholder="Included" required></fieldset>
                    </div>
                </td>
                <!-- other  -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Other</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="proother" id="proother" placeholder=" Extra"></fieldset>
                    </div>
                </td>
                <!-- img1 -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Image 1</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <input type="file" class="form-control" name="img1" id="img1">
                    </div>
                </td>
                <!-- img2 -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Image 2</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <input type="file" class="form-control" name="img2" id="img2">
                    </div>
                </td>
                <!-- video -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>video</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input type="text" class="form-control" name="prolink" id="prolink" placeholder="Youtube Link" required></fieldset>
                    </div>
                </td>
                <!-- submit -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <button type="submit" name="btnaddproduct" id="btnaddproduct" class="btn btn-primary">Add</button>
                    </div>
                </td>
                <td>
                </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
