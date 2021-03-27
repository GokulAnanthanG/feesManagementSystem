<?php
$con=new mysqli('localhost','root','','fees');
$sql="DELETE FROM studentdetail WHERE id='{$_POST['id']}' ";
if($con->query($sql)){
    echo"Record Deleted";
}
else{
    echo"Something went wrong";
}
?>