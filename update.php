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
    <header class="header">
        <div class="header-icon-menu-div">
            <a href="#" class="open-close-btn">
                <i class="ri-arrow-left-double-line double-line-arrow"></i>
            </a>
        </div>
        <div class="header-profile-content">
            <img src="./images/profile1.jpg" alt="" class="header-profile-img">
        </div>

    </header>
    <!-- Header Section Ended Here -->
     <!-- Main Div Section Started Here contact_save.php-->
    <!-- <form method="post" action=""> -->
    <form method="post" action="user_edit.php" enctype="multipart/form-data">
    <div id="main">
        <div class="main-div-section1">

            <!-- <div class="user-add-section">
                <button class="user-table-add-user-btn">
                    <i class="fa-solid fa-user"></i> Add User
                </button>
            </div> -->

            <table class="user-table-border">
                <tr>
                    <th class="user-table-heading">First Name</th>
                    <th class="user-table-heading">Last Name</th>
                    <th class="user-table-heading">Mobile No</th>
                    <th class="user-table-heading">Role</th>
                    <th class="user-table-heading">Password</th>
                    <th class="user-table-heading">Designation</th>
                    <th class="user-table-heading">Manage</th>
                </tr>
                <tr><?php
                          include 'dbconn.php';
                          $conn = new mysqli($servername, $username, $password, $db);
                    $i = 1;
                    $q = "select  * from  vr_users";
                     $res_tbl = mysqli_query($conn, $q);
                      while ($fetch = $res_tbl->fetch_array()) {

                        ?>
                    <td class="user-table-data"><?php echo $fetch['firstname']; ?></td>
                    <td class="user-table-data"><?php echo $fetch['lastname']; ?></td>
                    <td class="user-table-data"><?php echo $fetch['mobile']; ?></td>
                    <td class="user-table-data"><?php echo $fetch['role']; ?></td>
                    <td class="user-table-data"><?php echo $fetch['password']; ?></td>
                    <td class="user-table-data"><?php echo $fetch['designation']; ?></td>
                    <td class="user-table-data">
                        <!-- <button class="user-table-edit-btn"><i class="fa-solid fa-pen user-table-icon"></i> Edit</button> -->
                        <!-- <button class="user-table-edit-btn"><i class="fa-solid fa-pen user-table-icon"></i><a href="user.php?edit=<?php //echo $fetch['id']; ?>"> Edit</button> -->
                        <!-- <button class="user-table-edit-btn" onclick="showedit();"><i class="fa-solid fa-pen user-table-icon"></i> Edit</button> -->
                        <!-- <button class="user-table-delete-btn"><a href="delete.php?=<?php //echo $row['id']; ?>"><i class="fa-solid fa-trash user-table-icon"></i> Delete</button> -->
                        <button class="user-table-edit-btn"
                            onClick="showEdit(<?php echo("'" . $fetch['id'] . "','" . $fetch['firstname'] . "','" . $fetch['lastname'] . "','" . $fetch['mobile'] . "','". $fetch['role'] . "','". $fetch['password'] . "','".$fetch['designation'] ."''"); ?>);"
                            <i class="fa-solid fa-pen user-table-icon"></i> Edit</button>

                        <a class="user-table-delete-btn" href="delete.php?id=<?php echo $fetch['id']; ?>">Delete</a>
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

    <!-- Main Div Section Ended Here -->



    <!-- Modal User Form Section Started Here -->
    
    <div class="user-table-modal-popup hidden">
        <div class="user-table-modal-header">
            <h3 class="user-table-modal-title">Update User</h3>
            <button class="user-modal-close-btn user-table-icon">&times;</button>
        </div>


        <div class="user-table-modal-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">First Name</label>
                        <!-- <input type="text" name="firstname" id="firstname" class="form-input"
                            placeholder="First name"> -->
                        <input type="text" value=<?php echo $fname; ?> name="fname" id="fname" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Last Name</label>
                       
                        <input type="text" value=<?php echo $lname; ?> name="lname" id="lname" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Mobile No.</label>
                       
                        <input type="text"  value=<?php echo $mobile; ?> name="mobile" id="mobile" class="form-input">
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
                              echo '<option value="' . $row['role'] . '" >' . $row['role'] .'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="" class="form-label">Password</label>
                        <!-- <input type="text" name="password" id="password" class="form-input" placeholder="Password"> -->
                        <input type="text" value=<?php echo $pass; ?> name="pass" id="pass" class="form-input">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-input-div">
                        <label for="des" class="form-label">Designation</label>
                        <!-- <select id="role" name="role" class="dropdown-select"> -->
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
                    <div class="property-submit-btn-div">
                        <button type="submit" name="submit" id="submit" class="property-submit-btn"><a href="update.php?id=<?php echo $fetch['id']; ?>">Update</button>
                        <!-- <td><a class="property-submit-btn" type="submit" name="submit" id="submit" href="update.php?id=<?php //echo $row['id']; ?>">Update</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Modal User Form Section Ended Here -->


    <!-- Modal User Form Section Started Here -->
    <div class="user-table-modal-popup1 hidden1">
        <div class="user-table-modal-header">
            <h3 class="user-table-modal-title">Add User</h3>
            <button class="user-modal-close-btn1 user-table-icon">&times;</button>
        </div>
        <div class="user-table-modal-body">
            <form action="adduser.php" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-input"
                                placeholder="First name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-input" placeholder="Last name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="" class="form-label">Mobile No.</label>
                            <input type="text" name="mobile" id="mobile" class="form-input" placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="property-type" class="form-label">Role</label>
                            <select id="role" name="role" class="dropdown-select">
                            <?php
                            include 'dbconn.php';
                            $query = "SELECT 	role  from user_role ";
                            $result = mysqli_query($conn, $query);
                            foreach ($result as $row) {
                              echo '<option value="' . $row['role'] . '" >' . $row['role'] .'</option>';
                            }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" id="password" class="form-input" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form-input-div">
                            <label for="property-type" class="form-label">Designation</label>
                            <select id="desgination" name="desgination" class="dropdown-select">
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
                        <div class="property-submit-btn-div">
                            <button type="submit" name="submit" id="submit" class="property-submit-btn">Save</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <!-- Modal User Form Section Ended Here -->



    <!-- Custome Javascript File Link -->
    <script src="./js/user.js"></script>

    <!-- <script>
    function showEdit(id, firstname, lastname, mobile, role, password) {
        // alert(firstname);
        // document.getElementById('id').value = id;
        document.getElementById('fname').value = firstname;
        // $("#fname").text("hello world");'


        document.getElementById('lname').value = lastname;
        document.getElementById('mobile').value = mobile;
        document.getElementById('role').value = role;
        document.getElementById('pass').value = password;

    }
    </script> -->
    
</body>

</html>