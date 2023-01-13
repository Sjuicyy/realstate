<?php
require_once 'Connection.php';

$sql = "SELECT * FROM property where id='5'";
$result = $conn->query($sql);

$data = mysqli_fetch_array($result);

$s=$data['agent_id'];
echo $data["agent_id"]; 
?>
 





 <?php

$sql2 = "SELECT * FROM agent where id='$s'";
$result2 = $conn->query($sql2);


$data2=mysqli_fetch_array($result2);

echo $data2['name'];



?>