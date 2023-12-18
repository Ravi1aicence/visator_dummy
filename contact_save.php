<?php
include('dbconn.php');

$building_name = $_POST['building_name'];
// echo $property_type;
$micromarket = $_POST['micromarket'];
$locality = $_POST['locality'];
$city_list= $_POST['city_list'];

$address = $_POST['address'];

$prpty_type = $_POST['prpty_type'];
$developer_name = $_POST['developer_name'];
$year_built= $_POST['year_built'];
// $ownership_strctr= $_POST['ownership_strctr'];
$airport = $_POST['airport'];
$air_conditn = $_POST['air_conditn'];
$powerbk = $_POST['powerbk'];
$floor_desc = $_POST['floor_desc'];
$internal_parking = $_POST['internal_parking'];
$transport = $_POST['transport'];
$price = $_POST['price'];
$nearbyamenities = $_POST['nearbyamenities'];
$floor_area = $_POST['floor_area'];
$toatl_area = $_POST['toatl_area'];
$parking_ratio = $_POST['parking_ratio'];
$storey = $_POST['storey'];
$building_info = $_POST['building_info'];


$chk = implode(', ', (array) $_POST['insert']);
$statusMsg = '';


$targetDir = "upload_img/";

if (isset($_POST["submit"])) {

    echo $statusMsg;

    $uploadedFiles = $_FILES['file'];
    $imageNames = [];

    foreach ($uploadedFiles['tmp_name'] as $key => $tmpName) {
        $imageName = $uploadedFiles['name'][$key];
        $destination = 'upload_img/' . $imageName;
        move_uploaded_file($tmpName, $destination);
        $imageNames[] = $imageName;
    }


    $newSize = 10;

    // Initialize the new array with zeros
    $newArray = array_fill(0, $newSize, ' ');
    
    // Fill the new array with elements from the source array
    foreach ($imageNames as $index => $element) {
        $newArray[$index] = $element;
    }

    //print_r($newArray);




    //exit;
    $commaSeparatedImageNames = implode(" ,",$newArray);
    //echo $commaSeparatedImageNames ;
    
    $temp = rtrim(implode(',', $newArray), ',');
    $temp2 = "'";
    $temp2 .= str_replace(",", "','", $temp);
    $temp2 .= "'";
    $result = $temp2;





    // if (!empty($_FILES["file1"]["name"])) {
    $fileName1 = basename($_FILES["file1"]["name"]);
    $targetFilePath = $targetDir . $fileName1;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath))
    // $sql = "INSERT Into `property_detail` (property_type,property_status,property_price,balcony,bedroom,bathroom,built_up,carpet_area,facing,property_age,message,location,possession,floor_number,total_floor,city,landmark,parking,furnishing,insert_check,name,p_name,p_name2,p_name3,p_name4,p_name5,p_name6,p_name7,p_name8,p_name9,video) 
    // VALUES('$property_type','$property_status','$property_price','$balcony','$bedroom','$bathroom','$built_up','$carpet_area','$facing','$property_age','$message','$location','$possession','$floor_number','$total_floor','$city','$landmark','$parking','$furnishing','$chk',$result,'$fileName1')";
    $sql = "INSERT into `property_info` (`building_name`, `micromarket`, `locality`, `city_list`, `address`, `prpty_type`, `developer_name`, `year_built`, `airport`, `air_conditn`, `powerbk`, `floor_desc`, `internal_parking`, `transport`,`price`, `nearbyamenities`, `floor_area`, `toatl_area`, `parking_ratio`, `storey`, `building_info`, `insert_check`,`name`,`p_name`,`p_name2`,`p_name3`,`p_name4`,`p_name5`,`p_name6`,`p_name7`,`p_name8`,`p_name9`,`fileName1`) 
    VALUES ('$building_name', '$micromarket', '$locality','$city_list', '$address', '$prpty_type', '$developer_name','$year_built ','$airport','$air_conditn','$powerbk','$floor_desc', '$internal_parking', '$transport', '$price','$nearbyamenities', '$floor_area', '$toatl_area', '$parking_ratio', '$storey', '$building_info','$chk',$result,'$fileName1')";
    

    if (!mysqli_query($conn, $sql)) {
        echo "data not insert";

    } else {
        header("location:add_property.php");
    }


    // }
}
echo $statusMsg;