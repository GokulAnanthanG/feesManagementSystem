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
        <link rel="stylesheet" href="home.css">
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
   <!-- The sidebar -->
<div class="sidebar">
<a title="get student" href="search.php"><i class="fa fa-search i"></i></a>
<a class="active" title="view students" href="home.php"><i class="fa fa-eye i"></i></a>
  <a title="Add Student"  href="addDetail.php"><i class="fa fa-plus i"></i></a>
  <a title="sign out" href="#about"><i class="fa fa-sign-out i"></i></a>
</div>

<!-- Page content -->
<div class="content heading">
    <br><br><br><br> <br><br><br>  
 
 
 <div class="coverBlock">
<div id="data" class="block1"></div>
 
 
 
<div class="block2">
    <h2><span id="student"></span> Detail</h2>
<form id="frm" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input readonly class="form-control" autocomplete="off" type="text" name="name" id="name">
                                </div>
                            </td>

                            <td>
                                <div class="form-group">
                                    <label for="">Register No</label>
                                    <input readonly class="form-control" autocomplete="off" type="text" name="regNo" id="regNo">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <input class="form-control" readonly type="text" name="" id="department">

                                </div>
                            </td>

                        </tr>

                        <tr>


                            <td>
                                <div class="form-group">
                                    <label for="">D.O.B</label>
                                    <input readonly class="form-control" type="date" name="dob" id="dob">
                                </div>



                            <td>
                                <div class="form-group">
                                    <label for="">Father Name</label>
                                    <input readonly class="form-control" autocomplete="off" type="text" name="fname" id="fName">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <input readonly  class="form-control" autocomplete="off" type="text" name="conNo" id="conNo">
                                </div>
                            </td>



                        </tr>


                        <tr>

                            <td>
                                <div class="form-group">
                                    <label for="">Joined Year</label>
                                    <input readonly class="form-control" type="text" autocomplete="off" name="joinedYear"
                                        id="joinedYear">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea readonly class="form-control" name="address" autocomplete="off" id="address"
                                        cols="50" rows="2"></textarea>
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Transport</label>
                                   <input class="form-control" readonly type="text" name="" id="transport">
                                </div>
                            </td>
                        </tr>

                        <tr></tr>
                        
                    </table>
                </form>
</div>
</div>
 
<!-block two----------->
<div style="visibility: hidden;" class="blockTwo">
<h2>Edit <i class='fa fa-edit'></i> <span class="student"></span></h2>
<form id="frm" method="post">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input class="form-control" autocomplete="off" type="text" name="name" id="name1">
                                </div>
                            </td>

                            <td>
                                <div class="form-group">
                                    <label for="">Register No</label>
                                    <input class="form-control" autocomplete="off" type="text" name="regNo" id="regNo1">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <select class="form-control" name="department" id="department1">
                                        <option value="">--</option>
                                        <option value="Computer science">Computer science</option>
                                        <option value="Maths">Maths</option>
                                        <option value="English">English</option>
                                        <option value="Tamil">Tamil</option>
                                        <option value="BBA">B.B.A</option>
                                        <option value="B.com">B.com</option>
                                    </select>
                                </div>
                            </td>

                        </tr>

                        <tr>


                            <td>
                                <div class="form-group">
                                    <label for="">D.O.B</label>
                                    <input class="form-control" type="date" name="dob" id="dob1">
                                </div>



                            <td>
                                <div class="form-group">
                                    <label for="">Father Name</label>
                                    <input class="form-control" autocomplete="off" type="text" name="fname" id="fName1">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <input class="form-control" autocomplete="off" type="text" name="conNo" id="conNo1">
                                </div>
                            </td>



                        </tr>


                        <tr>

                            <td>
                                <div class="form-group">
                                    <label for="">Joined Year</label>
                                    <input class="form-control" type="text" autocomplete="off" name="joinedYear"
                                        id="joinedYear1">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea class="form-control" name="address" autocomplete="off" id="address1"
                                        cols="50" rows="2"></textarea>
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Transport</label>
                                    <select class="form-control" name="transport" id="transport1">
                                        <option value="">--</option>
                                        <option value="College Bus">College Bus</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr></tr>
                        <tr>
                            <td><input type="hidden" name="id" id="editIdFeild"></td>
                            <td><a href="home.php">
                            <button type="button" class="btn btn-lg btn-success btn2">Back <i
                                        class="fa fa-chevron-left"></i> </button>
                            </a></td>
                            <td><button type="button" id="submit" class="btn btn-lg btn-primary btn">Update <i
                                        class="fa fa-pencil"></i></button></td>
                        </tr>
                    </table>
                </form>
</div>
    <script>
     
         $(document).ready(function () {
 
         $("#data").load("displayAll.php")
  //view

$(document).on('click','.view',function(){
    var view=$(this);
    var id=view.attr("view");
  $.ajax({
      url:'displayPaticularDb.php',
      type:"post",
      data:{id:id},
      success:function(d){
 var data =JSON.parse(d)
 $("#student").html(data.name)
$("#name").val(data.name)
$("#regNo").val(data.regNo)
$("#department").val(data.department)
$("#dob").val(data.dob)
$("#fName").val(data.fname)
$("#conNo").val(data.conNo)
$("#joinedYear").val(data.joinedYear)
$("#address").val(data.address)
$("#transport").val(data.transport)

      }
  })
    })

    //delete

    $(document).on('click','.del',function(){
        var del=$(this)
        var id=$(this).attr('del')
        var des=confirm("Are you sure want to delete this record");
       if(des){
           $.ajax({
               url:"deleteStudentRecord.php",
               type:"post",
               data:{id:id},
               success:function(d){
                
                   location.reload();
               }
           })
       }
    })
  //edit
var editId;
$(document).on('click','.edit',function(){
    
    var edit=$(this);
    var id=edit.attr("edit");
    editId=id;
     $("#editIdFeild").val(editId)
   $.ajax({
url:'displayPaticularDb.php',
type:'post',
data:{id:id},
success:function(d){
   $(".coverBlock").fadeOut(); 
setTimeout(() => {
    $(".blockTwo").css({"visibility": "visible"})
}, 1000);
 var data=JSON.parse(d)
 $("#editIdFeild").val(editId)
 $(".student").html(data.name)
$("#name1").val(data.name);
$("#regNo1").val(data.regNo)
$("#department1").val(data.department)
$("#dob1").val(data.dob)
$("#fName1").val(data.fname)
$("#conNo1").val(data.conNo)
$("#joinedYear1").val(data.joinedYear)
$("#address1").val(data.address)
$("#transport1").val(data.transport)
}
   })//ajax
    
})

$("#submit").click(function(){
    var id=$("#editIdFeild").val();
    var name=$("#name1").val();
    var regNo=$("#regNo1").val();
    var department=$("#department1").val();
    var dob=$("#dob1").val();
    var fname=$("#fName1").val();
    var conNo=$("#conNo1").val();
    var joinedYear=$("#joinedYear1").val();
    var address=$("#address1").val();
    var transport=$("#transport1").val();

var obj={
    id:id,
    name:name,
    regNo:regNo,
    department:department,
    dob:dob,
    fname:fname,
    conNo:conNo,
    joinedYear:joinedYear,
    address:address,
    transport:transport
}
      var res=confirm("Confirm");
    if(res){
        $.ajax({
            url:'updateRecordDb.php',
            type:"post",
            data:obj ,
            success:function(d){
alert(d)
 location.reload();
            }        })
    }
})
    });
    </script>
</body>

</html>