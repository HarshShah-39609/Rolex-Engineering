<?php
include 'connection.php';
// include 'session.php';
session_start();
session_unset();
// $_SESSION['counter']==0;
session_destroy(); 
// echo'logout';
header("Location: index.php");
?>