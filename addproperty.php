<?php
if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    $A=$_POST['name'];
    $B=$_POST['address'];
    $C=$_POST['area'];
    $D=$_POST['price'];
    $E=$_POST['type'];
    $E=$_POST['valid'];
    $E=$_POST['beds'];
    $E=$_POST['baths'];
    $E=$_POST['description'];
    // $E=$_POST['baths'];
    // $I=$_FILES['Photo']['name'];
    // $target2 = "../assets/img/agent/".basename($I);
    // $J = $_POST['Date'];
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

}