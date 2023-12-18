<?php
             echo "email";
            include('dbconn.php');

            //if(isset($_POST["insert"]))
            $id = $_POST['setid'];
            $firstname = $_POST['firstname'];
           

            $lastname = $_POST['lastname'];
           
            $mobile = $_POST['mobile'];
            $role=$_POST['role'];
            $password=$_POST['password'];
            $designation=$_POST['designation'];
               
            $sql = "UPDATE vr_users SET firstname = '$firstname', lastname = '$lastname', mobile = '$mobile', role = '$role', password ='$password',designation ='$designation' WHERE id = '$id'";
            // $result = mysqli_query($conn, $sql);

echo $sql;

if (!mysqli_query($conn, $sql)) {
    echo "data not insert";

} else {
    echo "data insert";
    // header("location:.php");
}
