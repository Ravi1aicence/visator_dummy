<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Remix Icon Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title>Admin Dashboard</title>

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./css/style.css">


</head>

<body>

    <?php
    include("sidebar.php");
    ?>

    <!-- Header Section Started Here -->
    <!-- <header class="header">
        <div class="header-icon-menu-div">
            <a href="#" class="open-close-btn">
                <i class="ri-arrow-left-double-line double-line-arrow"></i>
            </a>
        </div>
        <div class="header-profile-content">
            <img src="./images/profile1.jpg" alt="" class="header-profile-img">
        </div>

    </header> -->
    <!-- Header Section Ended Here -->
    <?php
    include 'dbconn.php';

    ?>

    <!-- Main Div Section Started Here contact_save.php-->
    <!-- <form method="post" action=""> -->
    <div id="main">
        <div class="main-div-section1">

            <div class="user-add-section">
                <button class="user-table-add-user-btn">
                    <i class="fa-solid fa-user"></i> Add User
                </button>
            </div>

            <table class="user-table-border">
                <tr class="table-head-bg">
                    <th class="user-table-heading">First Name</th>
                    <th class="user-table-heading">Last Name</th>
                    <th class="user-table-heading">Mobile No</th>
                    <th class="user-table-heading">Role</th>
                    <!-- <th class="user-table-heading">Password</th> -->
                    <th class="user-table-heading">Designation</th>
                    <th class="user-table-heading">Manage</th>
                </tr>
                <tr>
                    <?php
                    include 'dbconn.php';
                    $conn = new mysqli($servername, $username, $password, $db);
                    $i = 1;
                    $q = "select  * from  vr_users";
                    $res_tbl = mysqli_query($conn, $q);
                    while ($fetch = $res_tbl->fetch_array()) {

                        ?>
                    <td class="user-table-data">
                        <?php echo $fetch['firstname']; ?>
                    </td>
                    <td class="user-table-data">
                        <?php echo $fetch['lastname']; ?>
                    </td>
                    <td class="user-table-data">
                        <?php echo $fetch['mobile']; ?>
                    </td>
                    <td class="user-table-data">
                        <?php echo $fetch['role']; ?>
                    </td>
                    <!-- <td class="user-table-data"><?php // echo $fetch['password']; 
                            ?></td> -->
                    <td class="user-table-data">
                        <?php echo $fetch['designation']; ?>
                    </td>
                    <td class="user-table-data">
                        <!-- <button class="user-table-edit-btn"><i class="fa-solid fa-pen user-table-icon"></i> Edit</button> -->
                        <!-- <button class="user-table-edit-btn"><i class="fa-solid fa-pen user-table-icon"></i><a href="user.php?edit=<?php //echo $fetch['id']; 
                                ?>"> Edit</button> -->
                        <!-- <button class="user-table-edit-btn" onclick="showedit();"><i class="fa-solid fa-pen user-table-icon"></i> Edit</button> -->
                        <!-- <button class="user-table-delete-btn"><a href="delete.php?=<?php //echo $row['id']; 
                                ?>"><i class="fa-solid fa-trash user-table-icon"></i> Delete</button> -->
                        <button class="user-table-edit-btn"
                            onClick="showEdit(<?php echo ("'" . $fetch['id'] . "','" . $fetch['firstname'] . "','" . $fetch['lastname'] . "','" . $fetch['mobile'] . "','" . $fetch['role'] . "','" . $fetch['password'] . "','" . $fetch['designation'] . "'"); ?>);">
                            <i class="ri ri-edit-2-line"></i>
                        </button>

                        <!-- <a class="user-table-delete-btn"  href="delete.php?id=<?php //echo $fetch['id']; 
                                ?>">Delete</a> -->
                        <a class="user-table-delete-btn" onclick="openModal(<?php echo $fetch['id']; ?>);">
                            <i class="ri ri-delete-bin-line"></i>
                        </a>

                    </td>
                </tr>
                <?php
                    $i++;
                    }
                    ?>

            </table>
        </div>
    </div>
    <!-- </form> -->

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">

                <h2>Delete Confirmation</h2>
                <span class="close" id="closeButton">&times;</span>
            </div>
            <hr>
            <div class="modal-body">
                <p>Are you sure you want to delete this data?</p>
            </div>

            <div class="modal-footer">

                <button id="deleteButton" class="user-table-delete-btn-modal">Delete</button>
            </div>
        </div>
    </div>

    <!-- Main Div Section Ended Here -->



    <!-- Modal User Form Section Started Here -->
    <?php
    // include("auth.php");
    // require('dbconn.php');
    // $id=$_REQUEST['id'];
    // $query = "SELECT * from vr_users where id='".$id."'"; 
    // $result = mysqli_query($conn, $query) or die ( mysqli_error($conn));
    // $row = mysqli_fetch_assoc($result);
    ?>
    <div class="user-table-modal-popup hidden">
        <div class="user-table-modal-header">
            <h3 class="user-table-modal-title">Update User</h3>
            <button class="user-modal-close-btn user-table-icon">&times;</button>
        </div>

        <!-- <form action="updatecode.php" method="POST"> -->

        <div class="user-table-modal-body">
            <div class="row">
                <input type="hidden" name="update_id" id="update_id">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">First Name</label>
                        <!-- <input type="text" name="firstname" id="firstname" class="form-input"
                            placeholder="First name"> -->
                        <input type="text" name="fname" id="fname" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Last Name</label>
                        <!-- <input type="text" name="lastname" id="lastname1"  value =''class="form-input" placeholder="Last name"> -->
                        <input type="text" name="lname" id="lname" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Mobile No.</label>
                        <!-- <input type="text" name="mobile" id="mobile1" class="form-input" placeholder="Mobile number"> -->
                        <input type="text" name="mobile" id="mobile"   maxlength="10" pattern="[1-9]{1}[0-9]{9}" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" name="role" class="dropdown-select">
                            <?php
                            include 'dbconn.php';
                            $query = "SELECT 	role  from user_role ";
                            $result = mysqli_query($conn, $query);
                            foreach ($result as $row) {
                                echo '<option value="' . $row['role'] . '" >' . $row['role'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="pass" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" name="password" id="password" class="form-input"
                                placeholder="Password">
                            <span class="fa fa-eye-slash field_icon toggle-password" onclick="togglePassword()"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="property-type" class="form-label">Designation</label>
                        <select id="des" name="des" class="dropdown-select">
                            <?php
                            include 'dbconn.php';
                            $query = "SELECT designation  from  user_designation ";
                            $result = mysqli_query($conn, $query);
                            foreach ($result as $row) {
                                echo '<option value="' . $row['designation'] . '" >' . $row['designation'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="property-submit-btn-div text-center">
                        <button type="submit" name="submit" id="submit" name="submit" onclick="show_update();"
                            class="property-submit-btn">Update</button>
                        <!-- <td><a class="property-submit-btn" type="submit" name="submit" id="submit" href="update.php?id=<?php //echo $row['id']; 
                        ?>">Update</a>  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
    </div>

    <!-- Modal User Form Section Ended Here -->


    <!-- Modal User Form Section Started Here -->
    <div class="user-table-modal-popup1 hidden1">
        <div class="user-table-modal-header">
            <h3 class="user-table-modal-title">Add User</h3>
            <button class="user-modal-close-btn1 user-table-icon">&times;</button>
        </div>
        <div class="user-table-modal-body">
            <!-- <form action="adduser.php" method="POST"> -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-input" placeholder="First name"
                            required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-input" placeholder="Last name"
                            required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Mobile No.</label>
                        <input type="text" name="mobile1" id="mobile1"  maxlength="10" pattern="[1-9]{1}[0-9]{9}"  class="form-input" placeholder="Mobile number"
                            required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="property-type" class="form-label">Role</label>
                        <select id="role" name="role" class="dropdown-select">
                            <?php
                            include 'dbconn.php';
                            $query = "SELECT 	role  from  user_role ";
                            $result = mysqli_query($conn, $query);
                            foreach ($result as $row) {
                                echo '<option value="' . $row['role'] . '" >' . $row['role'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="pass" class="form-label">Password</label>
                        <div class="input-with-icon">
                            <input type="password" name="pass" id="pass" class="form-input" placeholder="Password">
                            <span class="fa fa-eye-slash field_icon toggle-password1"
                                onclick="togglePassword1()"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="property-type" class="form-label">Designation</label>
                        <select id="designation" name="designation" class="dropdown-select">
                            <?php
                            include 'dbconn.php';
                            $query = "SELECT designation  from  user_designation ";
                            $result = mysqli_query($conn, $query);
                            foreach ($result as $row) {
                                echo '<option value="' . $row['designation'] . '" >' . $row['designation'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="property-submit-btn-div text-center">
                        <button type="submit" onclick="validate_user()" ;name="submit" id="submit"
                            class="property-submit-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->
    </div>
    <!-- Modal User Form Section Ended Here -->

    <script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var toggleIcon = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        }
    }


    function togglePassword1() {
        var passwordField = document.getElementById("pass");
        var toggleIcon = document.querySelector(".toggle-password1");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        } else {
            passwordField.type = "password";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        }
    }
    </script>

    <!-- Custome Javascript File Link -->
    <script src="./js/user.js"></script>
    <script src="your-jquery-library.js"></script>
    <script>
    var modal = document.getElementById("myModal");
    var deleteButton = document.getElementById("deleteButton");
    var cancelButton = document.getElementById("cancelButton");

    function openModal(oid) {
        modal.style.display = "block";

        deleteButton.onclick = function() {
            var myurl = 'delete.php?id=' + oid;
            $.ajax({
                url: myurl,
                success: function(result) {
                    // Handle the result as needed (e.g., show a message)
                    // alert(result);
                    window.location.reload();
                }
            });
            modal.style.display = "none";
        };

        cancelButton.onclick = function() {
            modal.style.display = "none";
        };
    }

    var span = document.getElementById("closeButton");

    span.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    </script>
    <script>
    function showEdit(id, firstname, lastname, mobile, role, password, designation) {
        // alert(firstname);
        // alert(lastname);
        // alert(mobile);
        // alert(role);
        // alert(password);
        // alert(designation);

        document.getElementById('update_id').value = id;
        document.getElementById('fname').value = firstname;
        // $("#fname").text("hello world");'


        document.getElementById('lname').value = lastname;
        document.getElementById('mobile').value = mobile;
        document.getElementById('role').value = role;
        document.getElementById('password').value = password;
        document.getElementById('des').value = designation;


    }

    function show_update() {

        //  debugger;

        var id = document.getElementById('update_id').value;
        var firstname = document.getElementById('fname').value;

        var lastname = document.getElementById('lname').value;

        var mobile = document.getElementById('mobile').value;


        var role = document.getElementById('role').value;
        var password = document.getElementById('password').value;
        var designation = document.getElementById('des').value;

        var mobileLength = mobile.length;


        if (!(mobileLength === 10)) {
            alert("Mobile number has an incorrect length.");
            document.getElementById("mobile").focus();
            // Use "return;" instead of "exit;" to exit the function
            return;
        }
        //  alert(designation);

        $.ajax({

            url: "save_update_ajax.php",
            type: "POST",



            data: {
                id: id,
                firstname: firstname,
                lastname: lastname,
                mobile: mobile,
                role: role,
                password: password,
                designation: designation

            },
            success: function(result) {
                alert("User List Updated ");
                location.reload();
            },

        });

    }


    function validate_user() {
        // Get form input values
        var firstname = document.getElementById("firstname").value;
        var lastname = document.getElementById("lastname").value;
        var mobile1 = document.getElementById("mobile1").value;
        // alert(mobile1);
        var role = document.getElementById("role").value;
        var pass = document.getElementById("pass").value;
        var designation = document.getElementById("designation").value;

        // Perform validation
        if (firstname === "") {
            alert("First Name is required");
            return false;
        }

        if (lastname === "") {
            alert("Last Name is required");
            return false;
        }
        var mobileLength = mobile1.length;


        if (!(mobileLength === 10)) {
            alert("Mobile number has an incorrect length.");
            document.getElementById("mobile1").focus();
            // Use "return;" instead of "exit;" to exit the function
            return;
        }


        // Add other validation checks as needed...

        // If all validations pass, make the AJAX call
        $.ajax({
            type: "POST",
            url: "adduser.php",

            data: {
                firstname: firstname,
                lastname: lastname,
                mobile1: mobile1,
                role: role,
                pass: pass,
                designation: designation
            },
            success: function(result) {
                //alert("User List submitted");
                location.reload();
            },
        });
    }
    </script>


</body>

</html>