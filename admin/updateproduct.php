<?php
include 'connection.php';
include 'menubar.php';
$pid = $_GET['id'];
$sql = "select * from Product where Product_ID=$pid";
$ans = mysqli_query($conn, $sql);
// if($ans)
while ($row = mysqli_fetch_array($ans)) {
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
}

?>
<div class="content-wrapper">
    <center>
        <p>
        <h1>Edit Product</h1>
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

            <!-- product name -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Name </h4>
                    </div>
                </td>
                <td>
                    <form action="modifyproduct.php" method="post" enctype="multipart/form-data">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="hidden" name="id" value="<?php echo $Product_ID; ?>">
                            <fieldset><input name="proname" type="tel" class="form-control" id="proprice" placeholder="Price" value="<?php echo $Product_Name; ?>" required></fieldset>
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
                    <form action="editproduct.php" method="post">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset><input name="proprice" type="tel" class="form-control" id="proprice" placeholder="Price" value="<?php echo $Product_Price; ?>" required></fieldset>
                        </div>
                </td>
                <!-- warranty -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>warranty </h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input name="prowarranty" type="text" class="form-control" id="prowarranty" placeholder="Warranty" value="<?php echo $Product_Warranty; ?>" required></fieldset>
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
                        <fieldset><input name="proproductionrate" type="tel" class="form-control" id="proproductionrate" placeholder="Rate" value="<?php echo $Product_ProductionRate; ?>" required></fieldset>
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
                        <fieldset><input name="probody" type="text" class="form-control" id="probody" placeholder="Material" value="<?php echo $Product_BodyMaterial; ?>" required></fieldset>
                    </div>
                </td>
                <!-- Power Consume -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Power Consume</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input name="propowercon" type="text" class="form-control" id="propowercon" placeholder="Power" value="<?php echo $Product_PowerConsumption; ?>" required></fieldset>
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
                        <fieldset><input name="promotorsize" type="text" class="form-control" id="promotorsize" placeholder="Size" value="<?php echo $Product_MotorSize; ?>" required></fieldset>
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
                        <fieldset><input name="prorpm" type="text" class="form-control" id="prorpm" placeholder="RPM" value="<?php echo $Product_MotorRPM; ?>" required></fieldset>
                    </div>
                </td>
                <!-- weight -->
            <tr>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <h4>Weigth</h4>
                    </div>
                </td>
                <td>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <fieldset><input name="proweight" type="text" class="form-control" id="proweight" placeholder="Dimension" value="<?php echo $Product_Weight; ?>" required></fieldset>
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
                        <fieldset><input name="prodimension" type="text" class="form-control" id="prodimension" placeholder="Dimension" value="<?php echo $Product_Dimension; ?>" required></fieldset>
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
                        <fieldset><input name="proacc" type="text" class="form-control" id="proacc" placeholder="Note" value="<?php echo $Product_IncludedAccessories; ?>" required></fieldset>
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
                        <fieldset><input name="proother" type="text" class="form-control" id="proother" placeholder=" Extra" value="<?php echo $Product_OtherDetails; ?>" required></fieldset>
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
                        <input type="file" name="img1" id="img1">
                        <input type="hidden" name="img1_old"  value="<?php echo $Product_Image1; ?>">
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
                        <input type="file" name="img2" id="img2" >
                        <input type="hidden" name="img2_old" value="<?php echo $Product_Image2; ?>">
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
                        <fieldset><input name="prolink" type="text" class="form-control" id="prolink" placeholder="Youtube Link" value="<?php echo $Product_Video; ?>" required></fieldset>
                    </div>
                </td>
                <!-- submit -->
            <tr>
                <td align="center">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <input type="submit" value="Update" name="btnupdproduct" id="btnupdproduct" class="btn btn-primary">
                    </div>
                </td>
                <td rowspan="2">
                </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>

<?php
