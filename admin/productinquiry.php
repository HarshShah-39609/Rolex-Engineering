<?php
include 'connection.php';
// session_start();
include 'menubar.php';
?>
<div class="content-wrapper">
    <center>
        <p>
        <h1>INQUIRY</h1>
        </p>
    </center>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Product Nme</th>
                <th scope="col">Date</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            //$sql = "SELECT * FROM inquiry";
            $sql = "SELECT Inquiry.INQ_ID, Inquiry.INQ_Name, Inquiry.INQ_MobileNumber, Product.Product_Name, Inquiry.INQ_Date, Inquiry.INQ_City, Inquiry.INQ_State From Inquiry Inner Join  Product  on Inquiry.Product_ID=Product.Product_ID ";
            $inqresult = mysqli_query($conn, $sql);
            if (mysqli_num_rows($inqresult)) {
                while ($uinqprint = mysqli_fetch_assoc($inqresult)) {
                    $inqid = $uinqprint['INQ_ID'];
            ?>
                    <tr>
                        <td>
                            <?php echo $uinqprint['INQ_ID']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['INQ_Name']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['INQ_MobileNumber']; ?>
                        </td>
                        <td>
                            <?php
                            echo $uinqprint['Product_Name'];
                            // $pid = $uinqprint['Product_ID'];
                            // $proname = mysqli_query($conn, "Select * from Product Where Product_ID=$$pid");
                            // if (mysqli_num_rows($proname)>0) {
                            //     while ($pn = mysqli_fetch_assoc($proname)) {
                            //         echo $pn['Product_Name'];
                            //     }
                            // }
                            ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['INQ_Date']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['INQ_City']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['INQ_State']; ?>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $uinqprint['INQ_ID']; ?>">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>