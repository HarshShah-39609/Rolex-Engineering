<?php
include 'connection.php';
// session_start();
include 'menubar.php';

//$sql = "SELECT * FROM User_order where Order_Status=0";
$sql = "SELECT User_Order.Order_ID,User_detail.User_FirstName,Product.Product_Name,User_Order.Order_Quantity,User_Order.Order_Amount,User_Order.Order_Date,User_Order.Order_PaymentMethod From User_Order inner join User_detail on User_Order.User_ID=User_detail.User_ID inner join Product on User_Order.Product_ID=Product.Product_ID";

$inqresult = mysqli_query($conn, $sql);

?>
<div class="content-wrapper">
   <center><p><h1>NEW ORDER</h1></p></center> 

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">CustomerName</th>
                <th scope="col">product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Amount(Total)</th>
                <th scope="col">Date</th>
                <th scope="col">PaymentMethod</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          
            <?php
            // foreach($inqprint as $uinqdetial)
            if (mysqli_num_rows($inqresult)) {
                while ($uinqprint = mysqli_fetch_assoc($inqresult)) {
                    $inqid = $uinqprint['User_ID'];
            ?>
                    <tr>
                        <td>
                            <?php echo $uinqprint['Order_ID']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['User_FirstName']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['Product_Name']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['Order_Quantity']; ?>
                        </td>
                        <td>
                        ₹  <?php echo $uinqprint['Order_Amount']; ?> 
                        </td>
                        <td>
                            <?php echo $uinqprint['Order_Date']; ?>
                        </td>
                        <td>
                            <?php echo $uinqprint['Order_PaymentMethod']; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" name="update" onClick="upd_record(<?php echo $uinqprint['INQ_ID']; ?>)">Done</button>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
<!-- Javascript function for deleting data -->
<script language="javascript">
    function upd_record(updid) 
    {
        // window.location.href = 'update.php?upd_id=' + updid + '';
        $select = "update inquiry set INQ_Status=1 where INQ_ID=updid";
        $query = mysqli_query($conn, $select);
        if (mysqli_num_rows($query))
        {
            header("Location: productinquiry.php");
        }
    }
</script>