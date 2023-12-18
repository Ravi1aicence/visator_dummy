
<?php
 //echo $email;
 include 'dbconn.php';

 if (isset($_POST['firstname'])) {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $mobile = $_POST['mobile1'];
     $role = $_POST['role'];
     $password = $_POST['pass'];
     $designation = $_POST['designation'];

  $sql1="INSERT INTO vr_users(firstname, lastname,mobile,role,password,designation) VALUES ('$firstname','$lastname','$mobile','$role','$password','$designation')";
    
   $result = mysqli_query($conn, $sql1);
    if ($result) {
    //   echo "Data inserted successfully!";
      
  } else {
    //   echo "Error: " . mysqli_error($conn);
    
  }

  header("location:user.php");
}