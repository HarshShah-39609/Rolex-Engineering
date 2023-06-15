<?php
include 'connection.php';
include 'menubar.php';
  
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
                <!-- <div class="col-lg-6 col-md-6 col-sm-">
                    <th scope="col">Name</th>
                </div> -->
                <th scope="col">Product Name </th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <!-- <th scope="col">Action</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM Product";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result)) {
                while ($proprint = mysqli_fetch_assoc($result)) {
                    $proid = $proprint['Product_ID'];
            ?>
                    <tr>

                        <td>
                            <?php echo $proprint['Product_Name']; ?>
                        </td>
                        <td>
                            <a href="updateproduct.php?id=<?php echo $proprint['Product_ID']; ?>" class="btn btn-primary">Edit</a>
                            <!-- <button type="submit" name="btnediproduct" id="btnrmproduct" class="btn btn-primary">Edit</button> -->
                        </td>
                        <td>
                            <a href="rmproduct.php?id=<?php echo $proprint['Product_ID']; ?>" class="btn btn-danger">Delete</a>
                            <!-- <button type="submit" name="btnrmproduct" id="btnrmproduct" class="btn btn-primary">Remove</button> -->
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>