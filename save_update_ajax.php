

<?php
echo 'hii';

include 'dbconn.php';

    if(isset($_POST['id']))
    {   
        $id = $_POST['id'];
        
        $firstname  = $_POST['firstname'];
        // echo $firstname;
        $lastname = $_POST['lastname'];
        $mobile = $_POST['mobile'];
        $role = $_POST['role'];
        $password=$_POST['password'];
        $designation=$_POST['designation'];
        // echo $designation;

        
        $query = "UPDATE vr_users SET firstname = '$firstname', lastname = '$lastname', mobile = '$mobile', role = '$role', password ='$password',designation ='$designation' WHERE id = '$id' ";
         echo $query;
        
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:user.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>

