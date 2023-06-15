
<?php
include 'connection.php';
if (isset($_POST['update'])) {
    $mob1 = $_POST['mobile1'];
    $mob2 = $_POST['mobile2'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $pin = $_POST['pincode'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $gst = $_POST['gst'];

    $updcpm = "UPDATE COMPANY SET CMP_MobileNumber1=$mob1,
    CMP_MobileNumber2=$mob2,
    CMP_AddressLine1='$a1',
    CMP_AddressLine2='$a2',
    CMP_AddressLine3='$a3',
    CMP_City='$city',
    CMP_State='$state',
    CMP_Pincode='$pin',
    CMP_Email='$email',
    CMP_GSTNumber='$gst' WHERE CMP_ID=1";

    if ($ans = mysqli_query($conn, $updcpm)) {
        // echo mysqli_error($conn);
       
?>
        <script>
            alert("Company details updated");
        </script>
    <?php
     header("location:companydetails.php");
    } else {
        
    ?>
        <script>
            alert("Error");
        </script>
<?php
header("location:companydetails.php");
    }
}
?>