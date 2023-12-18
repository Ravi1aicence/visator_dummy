<?php 

include "dbconn.php"; 


// if (isset($_GET['id'])) {

//     $user_id = $_GET['id'];
if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    // echo 'id'.$access_oid.'';

    $sql = "DELETE FROM `property_info` WHERE `id`='$id'";
  // echo $sql;
  // exit;
     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

    header("location:property_list.php");

} 




?>