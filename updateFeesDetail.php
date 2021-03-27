<?php

 
$con=new mysqli("localhost","root","","fees");
 if($con->connect_error)
 echo"error in connecting db";
 $id=$_POST["id"];
 $one=$_POST["one"];
$oneB=$_POST["oneB"];
$second=$_POST["second"];
$secondB=$_POST["secondB"];
$third=$_POST["third"];
$thirdB=$_POST["thirdB"];
$fourth=$_POST["fourth"];
$fourthB=$_POST["fourthB"];
$fifth=$_POST["fifth"];
$fifthB=$_POST["fifthB"];
$sixth=$_POST["sixth"];
$sixthB=$_POST["sixthB"];

 
$sql="UPDATE studentdetail set sem1Fee='$one',sem1TransportFee='$oneB',sem2Fee='$second',sem2TransportFee='$secondB',sem3Fee='$third',sem3TransportFee='$thirdB',sem4Fee='$fourth',sem4TransportFee='$fourthB',sem5Fee='$fifth',sem5TransportFee='$fifthB',sem6Fee='$sixth',sem6TransporFee='$sixthB' WHERE id='$id'  ";

if($con->query($sql)){
    echo"Record Updated";
}
else{
    echo"Something went wrong";
}

?>