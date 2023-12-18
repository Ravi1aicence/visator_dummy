<?php 

include "dbconn.php"; 


// if (isset($_GET['id'])) {

//     $user_id = $_GET['id'];
if(isset($_REQUEST['id'])) {
    $access_oid = $_REQUEST['id'];

    $sql = "DELETE FROM `vr_users` WHERE `id`='$access_oid'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

    header("location:user.php");

} 




?>