<?php
session_start();
require_once 'Connection.php';
$id = $_SESSION['id'];
$pswd = $_POST['pswd'];
$about = $_POST['about'];
$facebook = $_POST['facebook'];
$sql = "UPDATE agent SET password='$pswd', about='$about',facebook='$facebook' where id = $id";
mysqli_query($conn, $sql);
header("Location:AAprofile.php");
    // }
    // else {
    //     echo"<script>alert('Something went wrong! Please Retry');</script>";
    //     echo"<script>window.location='agent.php?Type=$A'</script>";
    // }

// }