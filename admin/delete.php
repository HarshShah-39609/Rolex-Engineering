<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn, "delete from inquiry where INQ_ID = $id"); // delete query

if ($del) {
    header("location:productinquiry.php"); // redirects to all records page
} else {
    header("location:productinquiry.php");
?>
    <script>
        alert("error");
    </script>
<?php
}
?>