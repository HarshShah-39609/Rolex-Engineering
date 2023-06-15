<?php
include 'connection.php';
// session_start();
include 'menubar.php';
$cmp = "select * from company";
$cmpdetail = mysqli_query($conn, $cmp);
if ($cmpdetail = mysqli_fetch_array($cmpdetail)) {
    $mob1 = $cmpdetail['CMP_MobileNumber1'];
    $mob2 = $cmpdetail['CMP_MobileNumber2'];
    $a1 = $cmpdetail['CMP_AddressLine1'];
    $a2 = $cmpdetail['CMP_AddressLine2'];
    $a3 = $cmpdetail['CMP_AddressLine3'];
    $city = $cmpdetail['CMP_City'];
    $state = $cmpdetail['CMP_State'];
    $pin = $cmpdetail['CMP_Pincode'];
    $email = $cmpdetail['CMP_Email'];
    $gst = $cmpdetail['CMP_GSTNumber'];
}
?>
<div class="content-wrapper">
    <center>
        <p>
        <h1>COMPANY DETAILS</h1>
        </p>
    </center>

    <table class="table table-striped">
        <thead>
            <tr>
                <div class="col-lg-6 col-md-6 col-sm-">
                    <th scope="col">Name</th>
                </div>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <form action="updcmp.php" method="post">
                <!-- mobile 1 -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Mobile-Number :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset><input name="mobile1" type="tel" class="form-control" id="mobile1" placeholder="Mobile No" minlength="10" maxlength="10" required value="<?php echo $mob1 ?>"></fieldset>
                        </div>
                    </td>
                </tr>
                <!-- mobile 2 -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Whatsapp-Number :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="mobile2" type="tel" class="form-control" id="mobile2" placeholder="Whatsapp No" minlength="10" maxlength="10" required value="<?php echo $mob2 ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- email -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Email :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Email" \ value="<?php echo $email ?>" required>
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- GST NO  -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>GST NO :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="gst" type="text" class="form-control" id="gst" placeholder="GST No" value="<?php echo $gst ?>" minlength="15" maxlength="15" required>
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- address 1 -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Address Line 1 :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="a1" type="text" class="form-control" id="a1" placeholder="Address" required value="<?php echo $a1 ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- address 2 -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Address Line 2 :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="a2" type="text" class="form-control" id="a2" placeholder="Address" required value="<?php echo $a2 ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- address 3 -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Address Line 3 :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input name="a3" type="text" class="form-control" id="a3" placeholder="Address" required value="<?php echo $a3 ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- pincode  -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>Pincode :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="PinCode" maxlength="6" required onChange="get_address()" value="<?php echo $pin ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- city -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>City :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input type="text" class="form-control" id="city" name="city" placeholder="city" value="<?php echo $city ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <!-- State -->
                <tr>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <h4>State :</h4>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <fieldset>
                                <input type="text" class="form-control" id="state" name="state" placeholder="state" value="<?php echo $state ?>">
                            </fieldset>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
                    </td>

                    <td>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>
<!-- get_address -->
<script>
    function get_address() {
        var pincode = jQuery('#pincode').val();

        if (pincode == '') {
            alert('Wrong pincode');
            jQuery('#city').val('');
            jQuery('#state').val('');

        } else {
            jQuery.ajax({
                url: 'get.php',
                type: 'post',
                data: 'pincode=' + pincode,
                success: function(data) {
                    // console.log(data);
                    if (data == 'no') {
                        alert('Wrong pincode');
                        jQuery('#city').val('');
                        jQuery('#state').val('');
                    } else {
                        console.log(typeof(data))
                        var getData = JSON.parse(data);
                        var city = JSON.city;
                        var state = JSON.state;
                        jQuery('#city').val(getData.city);
                        jQuery('#state').val(getData.state);
                    }
                }
            });
        }
    }
</script>

<!-- m1btn -->
<?php
if (isset($_POST['m1btn'])) {
    $m1 = $_POST["mobile1"];
    $sql = "update company set CMP_MobileNumber1=$m1 where 1 ";
    $aa = mysqli_query($conn, $sql);
    if ($aa) {
?>
        <script>
            alert("Mobile 1 updated");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("error");
        </script>
<?php
    }
}
?>