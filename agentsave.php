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
?>



<!-- if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    $A=$_POST['Type'];
    $B=$_POST['Name'];
    $C=$_POST['Email'];
    $D=$_POST['Contact'];
    $E=$_POST['Address'];
    $I=$_FILES['Photo']['name'];
    $target2 = "../assets/img/agent/".basename($I);
    $J = $_POST['Date'];
    $sql="INSERT INTO agent(Type,Name,Email,Contact,Address,Photo,Password,Date) VALUES ('$A','$B','$C','$D','$E','$I','$D','$J')";
    mysqli_query($conn,$sql);
    if  (move_uploaded_file($_FILES['Photo']['tmp_name'], $target2)) {
        echo"<script>alert('New Agent Added !');</script>";
        header("Location: agent.php?Type=$A");
    }
    else {
        echo"<script>alert('Something went wrong! Please Retry');</script>";
        echo"<script>window.location='agent.php?Type=$A'</script>";
    }

} -->