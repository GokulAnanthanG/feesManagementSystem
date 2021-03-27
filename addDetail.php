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
            <link rel="stylesheet" href="addDetail.css">
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
    <a title="get student" href="search.php"><i class="fa fa-search i"></i></a>
    <a title="view students" href="home.php"><i class="fa fa-eye i"></i></a>
  <a title="Add Student" class="active" href="addDetail.php"><i class="fa fa-plus i"></i></a>
  <a title="sign out" href="#about"><i class="fa fa-sign-out i"></i></a>
</div>

<!-- Page content -->
<div class="content heading">
    <br><br><br<br><br><br><br><br>
<h2 >Add Student Detail</h2>
            <br>

            
                <form id="frm" method="post">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input class="form-control" autocomplete="off" type="text" name="name" id="name">
                                </div>
                            </td>

                            <td>
                                <div class="form-group">
                                    <label for="">Register No</label>
                                    <input class="form-control" autocomplete="off" type="text" name="regNo" id="regNo">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Department</label>
                                    <select class="form-control" name="department" id="department">
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
                                    <input class="form-control" type="date" name="dob" id="dob">
                                </div>



                            <td>
                                <div class="form-group">
                                    <label for="">Father Name</label>
                                    <input class="form-control" autocomplete="off" type="text" name="fname" id="fName">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Contact Number</label>
                                    <input class="form-control" autocomplete="off" type="text" name="conNo" id="conNo">
                                </div>
                            </td>



                        </tr>


                        <tr>

                            <td>
                                <div class="form-group">
                                    <label for="">Joined Year</label>
                                    <input class="form-control" type="text" autocomplete="off" name="joinedYear"
                                        id="joinedYear">
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <textarea class="form-control" name="address" autocomplete="off" id="address"
                                        cols="50" rows="2"></textarea>
                                </div>
                            </td>


                            <td>
                                <div class="form-group">
                                    <label for="">Transport</label>
                                    <select class="form-control" name="transport" id="transport">
                                        <option value="">--</option>
                                        <option value="College Bus">College Bus</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr></tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><button type="button" id="submit" class="btn btn-lg btn-primary btn">Add <i
                                        class="fa fa-plus"></i></button></td>
                        </tr>
                    </table>
                </form>
</div>
    <script>
        $(document).ready(function () {
            var name;
            var regNo;
            var department;
            var dob;
            var fname;
            var conNo;
            var joinedYear;
            var address;
            var transport;
            $("#submit").click(function () {
                if ($("#name").val().length == '') {
                    $("#name").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#name").css({
                        "border": "  solid  "
                    });
                    name = true
                }

                //reg no

                if ($("#regNo").val().length == '') {
                    $("#regNo").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#regNo").css({
                        "border": "  solid  "
                    });
                    regNo = true
                }


                //department

                if ($("#department").val().length == '') {
                    $("#department").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#department").css({
                        "border": "  solid  "
                    });
                    department = true
                }
                //dob

                if ($("#dob").val().length == '') {
                    $("#dob").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#dob").css({
                        "border": "  solid  "
                    });
                    dob = true
                }
                //fname
                if ($("#fName").val().length == '') {
                    $("#fName").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#fName").css({
                        "border": "  solid  "
                    });
                    fName = true
                }
                //contact no
                if ($("#conNo").val().length < 10) {
                    $("#conNo").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#conNo").css({
                        "border": "  solid  "
                    });
                    conNo = true
                }
                //joined year
                if ($("#joinedYear").val().length == ' ') {
                    $("#joinedYear").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#joinedYear").css({
                        "border": "  solid  "
                    });
                    joinedYear = true
                }
                //address

                if ($("#address").val().length == ' ') {
                    $("#address").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#address").css({
                        "border": "  solid  "
                    });
                    address = true
                }

                //transport


                if ($("#transport").val().length == ' ') {
                    $("#transport").css({
                        "border": "1px solid red"
                    })
                } else {
                    $("#transport").css({
                        "border": "  solid  "
                    });
                    transport = true
                }

                if (name && regNo && department && dob && fName && conNo && joinedYear && address &&
                    transport) {
                    $.ajax({
                        url: 'addDetailDb.php',
                        type: 'post',
                        data: $("#frm").serialize(),
                        success: function (d) {
                            alert(d)
                            $("#frm")[0].reset();
                        }

                    })
                } else {
                    alert("check all the feilds")
                }

            }) //btn click
        })
    </script>
</body>

</html>