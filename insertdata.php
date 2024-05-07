<?php
 require 'dbconnect.php';
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $gender = $_POST["gender"];
 $skill = implode(",",$_POST["skill"]);

 $insert = "INSERT INTO employee(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$skill')";
 
 $result = mysqli_query($con,$insert);
 if($result){
    header("location:index.php");
 }else{
    echo mysqli_error($con);
 }
 ?>