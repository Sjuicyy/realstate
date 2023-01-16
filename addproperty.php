<!-- 
session_start();
if (!($_SESSION['status'] == 'logedin')) {
  header('Location:index1.php');
}
$login_id = $_SESSION['id'] -->

<?php
if (isset($_POST['submit'])) {
    require_once 'Connection.php';
    session_start();
    $id=$_SESSION['id'];
    $name=ucwords($_POST['name']);
    $address=ucwords($_POST['address']);
    $area=$_POST['area'];
    $price=$_POST['price'];
    $type=ucwords($_POST['type']);
    $valid=$_POST['valid'];
    $beds=$_POST['beds'];
    $baths=$_POST['baths'];
    $description=ucfirst($_POST['description']);
    $image='sale11.jpg';
    $status='available';
    $date=date("Y-m-d");
    // $I=$_FILES['Photo']['name'];
    // $target2 = "../assets/img/agent/".basename($I);
    // $J = $_POST['Date'];

    

    $sql="INSERT INTO `property` (`id`, `agent_id`, `name`, `address`, `area`, `price`, `type`, `valid_time`, `beds`, `baths`, `description`, `other_facilities`, `image`, `video`, `floor_plan`, `status`, `report`, `date`) 
                                    VALUES (NULL,'$id', '$name', '$address', '$area', '$price', '$type', '$valid', '$beds', '$baths', '$description', NULL, '$image', NULL, NULL, '$status', NULL, '$date')";
    mysqli_query($conn,$sql);





    // if  (move_uploaded_file($_FILES['Photo']['tmp_name'], $target2)) {
    //     echo"<script>alert('New Agent Added !');</script>";
        header("Location:AAindex.php");
    // }
    // else {
    //     echo"<script>alert('Something went wrong! Please Retry');</script>";
    //     echo"<script>window.location='agent.php?Type=$A'</script>";
    // }

}