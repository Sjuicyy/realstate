<?php
if (isset($_POST['submit'])) {
    $name= ucwords($_POST['name']);
    $address= ucwords($_POST['address']);
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    $about = ucfirst($_POST['about']);
    $date=date("Y-m-d");
    $image='profile11.jpg';
    // $I = $_FILES['photo']['name'];
    // $target2 = "img/Agent/" . basename($I);
    require_once 'Connection.php';
    $sql = "INSERT INTO `agent` (`id`, `name`, `email`, `phone`, `address`, `password`, `image`, `about`, `area`, `facebook`, `otp`, `date`, `status`) 
                            VALUES (NULL, '$name', '$email', '$phone', '$address', '$pswd', '$image', '$about', NULL, NULL, NULL, '$date', NULL)";
  mysqli_query($conn,$sql);
    // if (move_uploaded_file($_FILES['photo']['tmp_name'], $target2))  {
    //     echo "<script>alert('Successfully Submitted !');</script>";
          header('Location: index.php');
    // } else {
    //     echo "<script>alert('Something went wrong! Please Retry');</script>";
    //       echo"<script>window.location='form.php'</script>";
    // }
}
?>