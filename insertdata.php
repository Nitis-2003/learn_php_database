<?php
 require 'dbconnect.php';
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $gender = $_POST["gender"];

 $insert = "INSERT INTO employee(fname,lname,gender) VALUES('$fname','$lname','$gender')";
//  echo $insert;
 $result = mysqli_query($con,$insert);
 if($result){
    echo "post success<br>";
 }else{
    echo "post error";
 }
 ?>
 <a href="index.php">back</a>