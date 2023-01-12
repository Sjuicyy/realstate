<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user=$_POST['email'];
    $pass=$_POST['password'];
    require_once 'Connection.php';
    $sql="SELECT * FROM agent WHERE Email='$user' && Password='$pass'";
    $data=mysqli_query($conn,$sql);
    $result=mysqli_num_rows($data);
    if($result ==1){
        session_start();
        $_SESSION['User'] = $_POST['email'];
        $_SESSION['status'] = 'logedin';
        echo"login successful";
        header('location:property-admin.php');
    }
    else{
        echo"login unsuccessful";
    }
}
?>

