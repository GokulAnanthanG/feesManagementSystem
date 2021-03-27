<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Fees Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-jquery-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-css-->
            <link rel="stylesheet" href="search.css">
            <!-google font->
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link
                    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@700&display=swap"
                    rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Benne&family=Oswald:wght@300&display=swap"
                    rel="stylesheet">
                <!-font awesome-->
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav id="topNav" class="navbar navbar-inverse navbar-fixed-top">
        &nbsp; <span class="logo">
            <h1>Student Fees Management</h1>
        </span>
    </nav>
    <div class="sidebar">
    <a title="get student" class="active" href="search.php"><i class="fa fa-search i"></i></a>
    <a title="view students" href="home.php"><i class="fa fa-eye i"></i></a>
  <a title="Add Student"  href="addDetail.php"><i class="fa fa-plus i"></i></a>
  <a title="sign out" href="#about"><i class="fa fa-sign-out i"></i></a>
</div>

<!-- Page content -->
<div class="content heading">
    <br><br><br> <br><br><br>
    <div class="blockOne">
<h2 ><i class="fa fa-search"></i></h2>
            <br>
<div class="searchBar">
<form id="action" action="">
<div class="form-group">
     <label for="">Enter The Studet Roll No</label>
    <input autocomplete="off" class="form-control" type="text" name="search" id="search">
</div>
</form>
</div>
       
<div class="col-md-12"  id="data">

</div>
</div>
<!-block two-->
<div style="visibility:  hidden ;" class="blockTwo">
<h2>Edit <i class='fa fa-edit'></i> <span class="student"></span></h2>
<form id="frm" method="post">
                    <table>

                    <tr>
                     <td>1st Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="fSemFees"></td>

                     <td>1st Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="fSemBFees"></td>
                     </tr>

                     <tr>
                     <td>2nd Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="sSemFees"></td>

                     <td>2nd Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="sSemBFees"></td>
                     </tr>

                     <tr>
                     <td>3rd Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="tSemFees"></td>

                     <td>3rd Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="tSemBFees"></td>
                     </tr>
                     <tr>
                     <td>4th Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="foSemFees"></td>

                     <td>4th Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="foSemBFees"></td>
                     </tr>

                     <tr>
                     <td>5th Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="fiSemFees"></td>

                     <td>5th Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="fiSemBFees"></td>
                     </tr>

                     <tr>
                     <td>6th Sem Fees</td>
                     <td><input class="form-control" type="text" name="" id="siSemFees"></td>

                     <td>6th Sem Bus Fees</td>
                     <td><input class="form-control" type="text" name="" id="siSemBFees"></td>
                     </tr>

                     

                     <tr>
                     <td></td>
                           
                            <td><input type="hidden" name="id" id="editIdFeild"></td>
                            <td><a href="search.php">
                            <button type="button" class="btn btn-lg btn-success btn2">Back <i
                                        class="fa fa-chevron-left"></i> </button>
                            </a></td> 
                            <td><button type="button" id="submit" class="btn btn-lg btn-primary btn">Update <i
                                        class="fa fa-pencil"></i></button></td>
                        </tr>

                    </table>
                </form>
</div>
</div>
    <script>
        $(document).ready(function () {
           $("#search").keyup(function(){
               var data=$("#search").val();
               $.ajax({
                   url:'searchDb.php',
                   type:'post',
                   data:{data:data},
                   success:function(d){
$("#data").html(d)                   }
               })
           })

//edit
var editId;
$(document).on('click','.edit',function(){
    $(".blockOne").fadeOut()
    setTimeout(() => {
        $(".blockTwo").css({"visibility":"visible"});
    }, 1000);
    var edit=$(this);
    var id=edit.attr("edit");
    editId=id
    $.ajax({
        url:'displayPaticularDb.php',
        type:'post',
        data:{id:id},
        success:function(d){
            alert(editId)
            $("#editIdFeild").val(editId)
 var data=JSON.parse(d);
 $(".student").html(data.name)
 $("#fSemFees").val(data.sem1Fee);
 $("#fSemBFees").val(data.sem1TransportFee);

 $("#sSemFees").val(data.sem2Fee);
 $("#sSemBFees").val(data.sem2TransportFee);

 $("#tSemFees").val(data.sem3Fee);
 $("#tSemBFees").val(data.sem3TransportFee);

 $("#foSemFees").val(data.sem4Fee);
 $("#foSemBFees").val(data.sem4TransportFee);

 $("#fiSemFees").val(data.sem5Fee);
 $("#fiSemBFees").val(data.sem5TransportFee);

 $("#siSemFees").val(data.sem6Fee);
 $("#siSemBFees").val(data.sem6TransporFee);
        }

    })
 })
//update
$("#submit").click(function(){
    var id=$("#editIdFeild").val( )

  var semFee1=$("#fSemFees").val();
  var semBFee1=$("#fSemBFees").val();

  var semFee2=$("#sSemFees").val();
  var semBFee2=$("#sSemBFees").val();

  var semFee3=$("#tSemFees").val();
  var semBFee3=$("#tSemBFees").val();

  var semFee4=$("#foSemFees").val();
  var semBFee4=$("#foSemBFees").val();

  var semFee5=$("#fiSemFees").val();
  var semBFee5=$("#fiSemBFees").val();

  var semFee6=$("#siSemFees").val();
  var semBFee6=$("#siSemBFees").val();
  
  var obj={
      id:id,
       one:semFee1,
       oneB:semBFee1,
       second:semFee2,
       secondB:semBFee2,
       third:semFee3,
       thirdB:semBFee3,
       fourth:semFee4,
       fourthB:semBFee4,
       fifth:semFee5,
       fifthB:semBFee5,
       sixth:semFee6,
       sixthB:semBFee6,
  }
   var des=confirm("Confirm");;
if(des){
    $.ajax({
        url:"updateFeesDetail.php",
        type:"post",
        data:obj,
        success:function(d){
alert(d)
location.reload();
        }
    })
}
  })
        })
    </script>
</body>

</html>