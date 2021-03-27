<?php
$con=new mysqli("localhost","root","","fees");
$sql="SELECT * FROM studentDetail";
$res=$con->query($sql);
if($res->num_rows>0){
    echo"<table >
    <tr> <th>Name</th> <th>Register No</th> <th>Father Name</th> <th>Joined Year</th><th></th><th>----Actions---</th></tr>
    ";
    
    while($row=$res->fetch_object()){
       
        echo"
        <tr class='well'><td>$row->name</td><td>$row->regNo</td><td>$row->fname</td><td>$row->joinedYear</td><td><button view='$row->id' title='view full detail' class='btn btn-primary view'><i class='fa fa-eye'><i/></td><td><button edit='$row->id' title='edit record' class='btn btn-info edit'><i class='fa fa-edit'><i/></td><td><button del='$row->id' title='Delete record' class='btn btn-danger del'><i class='fa fa-trash'><i/></td></tr>        ";
     }
     echo"  </table>";
 }
else{
    echo"no data";
}
?>