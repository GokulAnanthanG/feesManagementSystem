<?php

 
$con=new mysqli("localhost","root","","fees");
 if($con->connect_error)
 echo"error in connecting db";
 $sql="INSERT INTO studentDetail(name,regNo,department,dob,fname,conNo,joinedYear,address,transport) VALUES('{$_POST["name"]}','{$_POST["regNo"]}','{$_POST["department"]}','{$_POST["dob"]}','{$_POST["fname"]}','{$_POST["conNo"]}','{$_POST["joinedYear"]}','{$_POST["address"]}','{$_POST["transport"]}')";
 if($con->query($sql)){
     echo"Student Added";
 }
 else{
     echo"Something Went Wrong";
 }
?>