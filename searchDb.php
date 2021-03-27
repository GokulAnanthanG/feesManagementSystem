<?php

 
$con=new mysqli("localhost","root","","fees");
 if($con->connect_error)
 echo"error in connecting db";

 $sql="SELECT * FROM studentdetail WHERE regNo ='{$_POST["data"]}' ";
 $res=$con->query($sql);
 if($res->num_rows>0){
while($row=$res->fetch_object()){
    echo"<table class='table'>";  

echo"
<tr>
<td><h3>reg no : $row->regNo</h3></td>
</tr>
<tr>
<td><b>Name : $row->name</b></td>
<td> </td><td> </td>
<td><b>Transport Type : <u>$row->transport</b></u></td>
<tr></tr>
</tr>
<tr><td><b>1st</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem1Fee></td>
<td><b>1st</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem1TransportFee></td>
 </tr>
<tr><td><b>2nd</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem2Fee></td>
<td><b>2nd</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem2TransportFee></td>
</tr>
<tr><td><b>3rd</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem3Fee></td>
<td><b>3rd</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem3TransportFee></td>
</tr>
<tr><td><b>4th</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem4Fee></td>
<td><b>4th</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem4TransportFee></td>
</tr>
<tr><td><b>5th</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem5Fee></td>
<td><b>5th</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem5TransportFee></td>
</tr>
<tr><td><b>6th</b> Semester Fees Payed</td><td><input readonly class='form-control' value=$row->sem6Fee></td>
<td><b>6th</b> Semester Bus Fees Payed</td><td><input readonly class='form-control' value=$row->sem6TransporFee></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>
<button title='edit the details'  edit='$row->id' class='btn edit'><i class='fa fa-pencil'></i></button>
</td>

</tr>
";
echo"</table>
<hr>
";

}
 }
 else{
     echo"No record";
 }