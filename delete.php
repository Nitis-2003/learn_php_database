<?php
require 'dbconnect.php';
$id = $_GET['idemp'];
$sql = "DELETE FROM employee WHERE id='$id'";
$result = mysqli_query($con,$sql);

if($result){
    header("location:showdata.php");
 }else{
    echo mysqli_error($con);
 }
?>