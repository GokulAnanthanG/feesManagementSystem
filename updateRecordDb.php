<?php

 
$con=new mysqli("localhost","root","","fees");
 if($con->connect_error)
 echo"error in connecting db";
 $id=$_POST["id"];
$name=$_POST["name"];
$regNo=$_POST["regNo"];
$department=$_POST["department"];
$dob=$_POST["dob"];
$fname=$_POST["fname"];
$conNo=$_POST["conNo"];
$joinedYear=$_POST["joinedYear"];
$address=$_POST["address"];
$transport=$_POST["transport"];

 
$sql="UPDATE studentdetail set name='$name',regNo='$regNo',department='$department',dob='$dob',fname='$fname',conNo='$conNo',joinedYear='$joinedYear',address='$address',transport='$transport' WHERE id='$id'  ";

if($con->query($sql)){
    echo"Record Updated";
}
else{
    echo"Something went wrong";
}

?>