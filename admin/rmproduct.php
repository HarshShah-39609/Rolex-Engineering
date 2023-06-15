<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn, "delete from Product where INQ_ID = $id"); // delete query

if ($del) {
    header("location:editproduct.php"); // redirects to all records page
} else {
    header("location:editproduct.php");

?>
    <script>
        alert("error");
    </script>
<?php
}
?>