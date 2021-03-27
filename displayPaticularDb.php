<?php
$result=array();
$con=new mysqli("localhost","root","","fees");
$sql="SELECT * FROM studentDetail WHERE id='{$_POST["id"]}' ";
$res=$con->query($sql);
if($res->num_rows>0){
   
    $result=$res->fetch_assoc();

  }
else{
    echo"no data";
}
echo json_encode($result);

?>