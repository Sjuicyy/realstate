<?php
if (isset($_POST['submit'])) {
    $A = $_POST['Name'];
    $B = $_POST['Address'];
    $C = $_POST['Phone'];
    $D = $_POST['Email'];
    $E = $_POST['Detail'];
    $F = $_POST['Password'];
    date_default_timezone_set("Asia/Kathmandu");
    $G = date("Y/m/d");
    $I = $_FILES['Photo']['name'];
    $target2 = "img/Agent/" . basename($I);
    require_once 'Connection.php';
    $sql = "INSERT INTO agent(Name,Address,Phone,Email,Photo,Detail,Password,Rdate) VALUES ('$A','$B','$C','$D','$I','$E','$F','$G')";
  mysqli_query($conn,$sql);

    if (move_uploaded_file($_FILES['Photo']['tmp_name'], $target2))  {
        echo "<script>alert('Successfully Submitted !');</script>";
          header('Location: form.php');
    } else {
        echo "<script>alert('Something went wrong! Please Retry');</script>";
          echo"<script>window.location='form.php'</script>";
    }

}
