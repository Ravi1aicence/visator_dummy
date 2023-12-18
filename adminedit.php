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
  <?php
include 'dbconn.php';

?>

  <!-- Main Div Section Started Here contact_save.php-->
    <!-- <form method="post" action=""> -->
        <!-- <div id="main">
            <div class="main-div-section1">
                
                <div class="user-add-section">
                  <button class="user-table-add-user-btn">
                    <i class="fa-solid fa-user"></i> Add User
                  </button>
                </div>

                <table class="user-table-border">
                  <tr>
                      <th class="user-table-heading">First Name</th>
                      <th class="user-table-heading">Last Name</th>
                      <th class="user-table-heading">Mobile No</th>
                      <th class="user-table-heading">Role</th>
                      <th class="user-table-heading">Manage</th>
                  </tr>
                  <tr><?php
                    //       include 'dbconn.php';
                    //       $conn = new mysqli($servername, $username, $password, $db);
                    // $i = 1;
                    // $q = "select  * from vr_users";


                    // $res_tbl = mysqli_query($conn, $q);


                    // while ($fetch = $res_tbl->fetch_array()) {

                        ?>
                      <td class="user-table-data"><?php //echo $fetch['firstname']; ?></td>
                      <td class="user-table-data"><?php //echo $fetch['lastname']; ?></td>
                      <td class="user-table-data"><?php //echo $fetch['mobile']; ?></td>
                      <td class="user-table-data"><?php //echo $fetch['role']; ?></td>
                      <td class="user-table-data">
                        <button class="user-table-edit-btn"> <i class="fa-solid fa-pen user-table-icon"></i> Edit</button>
                        <button class="user-table-delete-btn"> <i class="fa-solid fa-trash user-table-icon"></i> Delete</button>
                      </td>
                  </tr>
                  <?php
               // $i++;
               // }
                ?>
                  <!-- <tr>
                      <td class="user-table-data">Row 2, Cell 1</td>
                      <td class="user-table-data">Row 2, Cell 2</td>
                      <td class="user-table-data">Row 2, Cell 3</td>
                      <td class="user-table-data">Row 2, Cell 4</td>
                      <td class="user-table-data">
                        <button class="user-table-edit-btn"> <i class="fa-solid fa-pen user-table-icon"></i> Edit</button>
                        <button class="user-table-delete-btn"> <i class="fa-solid fa-trash user-table-icon"></i> Delete</button>
                      </td>
                  </tr>
                  <tr>
                      <td class="user-table-data">Row 3, Cell 1</td>
                      <td class="user-table-data">Row 3, Cell 2</td>
                      <td class="user-table-data">Row 3, Cell 3</td>
                      <td class="user-table-data">Row 3, Cell 4</td>
                      <td class="user-table-data">
                        <button class="user-table-edit-btn"> <i class="fa-solid fa-pen user-table-icon"></i> Edit</button>
                        <button class="user-table-delete-btn"> <i class="fa-solid fa-trash user-table-icon"></i> Delete</button>
                      </td>
                  </tr> -->
              <!-- </table>
            </div>
        </div>  -->
    <!-- </form> -->

  <!-- Main Div Section Ended Here -->



  <!-- Modal User Form Section Started Here -->
  <form method="post" action="edituser.php" enctype="multipart/form-data">
    <div class="user-table-modal-popup hidden">
      <div class="user-table-modal-header">
        <h3 class="user-table-modal-title">Update User</h3>
        <button class="user-modal-close-btn user-table-icon">&times;</button>
      </div>
      <div class="user-table-modal-body">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <?php  
                        include('dbconn.php');
                        $id = isset($_REQUEST['inv_id']) ? $_REQUEST['inv_id'] : null;
                        $q = "SELECT * FROM `vr_users` WHERE id like '$id' ";
                        $res_tbl = mysqli_query($conn, $q);

                    foreach ($res_tbl as $row_tbl) {
                    $firstname=$row_tbl['firstname'];
                    $lastname=$row_tbl['lastname'];
                    $property_price=$row_tbl['property_price'];
                    $mobile=$row_tbl['mobile'];
                    $role=$row_tbl['role'];
                    $password=$row_tbl['password'];
                    $designation=$row_tbl['designation'];
                ?>

              <div class="form-input-div">
                <label for="" class="form-label">First Name</label>
                <input type="text" value=<?php echo $firstname; ?> name="firstname" id="firstname" class="form-input" placeholder="First name">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-input-div">
                <label for="" class="form-label">Last Name</label>
                <input type="text"  value=<?php echo $lastname; ?> name="lastname" id="lastname" class="form-input" placeholder="Last name">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-input-div">
                <label for="" class="form-label">Mobile No.</label>
                <input type="text"  value=<?php echo $mobile; ?> name="mobile" id="mobile" class="form-input" placeholder="Mobile number">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-input-div">
                <label for="" class="form-label">Role</label>
                <select id="role" name="role" class="dropdown-select">
                <?php
                            include 'dbconn.php';
                            $query = "SELECT 	role  from  user_role ";
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
                <input type="text" value=<?php echo $password; ?>  name="password" id="password" class="form-input" placeholder="Password">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-input-div">
                <label for="" class="form-label">Role</label>
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
                  <button type="submit" name="submit" id="submit" class="property-submit-btn">Update</button>
                </div>
              </div>
          </div>
      </div>
    </div>
  </form>
  <?php } 
      ?>
  <!-- Modal User Form Section Ended Here -->


  <!-- Modal User Form Section Started Here -->
    <div class="user-table-modal-popup1 hidden1">
      <!-- <div class="user-table-modal-header">
        <h3 class="user-table-modal-title">Add User</h3>
        <button class="user-modal-close-btn1 user-table-icon">&times;</button>
      </div> -->
      <!-- <div class="user-table-modal-body">
        <form action="adduser.php" method="POST">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-input-div">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-input" placeholder="First name">
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
                     // include 'dbconn.php';
                      //$query = "SELECT 	role  from  user_role ";
                     // $result = mysqli_query($conn, $query);
                     // foreach ($result as $row) {
                        // echo '<option value="' . $row['role'] . '" >' . $row['role'] . '</option>';
                      //}
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
            <div class="col-12">
                <div class="property-submit-btn-div">
                  <button type="submit" name="submit" id="submit" class="property-submit-btn" >Save</button>
                </div>
              </div>
          </div>
          </div> -->
        </form>
    </div>
  <!-- Modal User Form Section Ended Here -->



  <!-- Custome Javascript File Link -->
  <script src="./js/user.js"></script>
  <!-- <script>
  function save_contact() {     

debugger;
     var firstname = document.getElementById('firstname').value;

     var lastname = document.getElementById('lastname').value;
  
     var mobile = document.getElementById('mobile').value;
  
     var role = document.getElementById('role').value;
     var password = document.getElementById('password').value;

    //  if (name == "") {
    //     document.getElementById('name').focus();
    //     document.getElementById("namevalidate").innerHTML = "Please enter your Name";
    //     status = false;
    //  }
    //  else {
    //     document.getElementById("namevalidate").innerHTML = "";
    //     status = true;
    //  }
     
    //  if (email == "") {
    //     //document.getElementById('email').focus();
    //     document.getElementById("email_validate").innerHTML = "Please enter your E-mail";
    //     status = false;
    //  }
    //  else {
    //     document.getElementById("email_validate").innerHTML = "";
    //     status = true;
    //  }
    //  if (contact_no == "") {
    //     document.getElementById('contact_no').focus();
    //     document.getElementById("Contact_validate").innerHTML = "Please enter your Contact Number";
    //     status = false;
    //  }
    //  else {
    //     document.getElementById("Contact_validate").innerHTML = "";
    //     status = true;
    //  }
     
   
     
    //  var atposition = email.indexOf("@");
    //  var dotposition = email.lastIndexOf(".");
    //  if (atposition < 1 || dotposition < atposition + 2 ) {
     
        
    //     document.getElementById('email').focus();
    //     return false;
    //  }
     
    //  if (contact_no.length != 10) {
    //     window.alert("Phone number must be 10 digits.");
    //     return false;
    //  } //alert(email);
     $.ajax({
        url: 'adduser.php',
        type: 'POST',
        
        data: {
        firstname: firstname,
        lastname: lastname,
        mobile: mobile,
        role: role,
        password: password
        
        },
        success: function (result) {
           alert("Thank You For Contacting Us !! Our team come Back to You Soon!");
           location.reload();
        },
        // error: function (result) {
        // alert('error');
        // }
     });
     
    }

</script> -->

</body>
</html>