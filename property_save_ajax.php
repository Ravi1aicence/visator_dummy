<?php
            //  echo "email";
            include('dbconn.php');

            //if(isset($_POST["insert"]))
            $id = $_POST['id'];
            $building_name = $_POST['building_name'];
             //echo $property_type;
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
            //exit;


            $sql = "UPDATE property_info SET
            building_name = '$building_name',
            micromarket = '$micromarket',
            locality = '$locality',
            city_list = '$city_list',
            address = '$address',
            prpty_type = '$prpty_type',
            developer_name = '$developer_name',
            year_built = '$year_built',
            airport = '$airport',
            air_conditn = '$air_conditn',
            powerbk = '$powerbk',
            floor_desc = '$floor_desc',
            internal_parking = '$internal_parking',
            transport = '$transport',
            price ='$price',
            nearbyamenities = '$nearbyamenities',
            floor_area = '$floor_area',
            toatl_area = '$toatl_area',
            parking_ratio = '$parking_ratio',
            storey = '$storey',
            building_info = '$building_info',
            insert_check = '$chk'
            WHERE id = $id";

//echo $sql;

if (!mysqli_query($conn, $sql)) {
    echo "data not insert";

} else {
    echo "data insert";
    header("location:property_list.php");
}
//echo $insert;
// $statusMsg = '';
// //File upload directory 
// $targetDir = "upload_img/";

// if (isset($_POST["submit"])) {

//     echo $statusMsg;
//     //}
    
//     $uploadedFiles = $_FILES['file'];
//    // echo  $uploadedFiles;
    
//     // Array to store the uploaded file names
//     $imageNames = [];
    
//     // Loop through each uploaded file
//     foreach ($uploadedFiles['tmp_name'] as $key => $tmpName) {
//         // Generate a unique file name or use the original file name
//         $imageName = $uploadedFiles['name'][$key];
    
//         // Move the uploaded file to a directory
//         $destination = 'upload_img/' . $imageName;
//         move_uploaded_file($tmpName, $destination);
    
//         // Add the file name to the array
//         $imageNames[] = $imageName;
//     }
    
    
    
//       // Convert the array 
//     // Save the image names in the database
//     $commaSeparatedImageNames = implode(" ,",$imageNames);
//     echo $commaSeparatedImageNames ;
    
//     $temp = rtrim(implode(',', $imageNames), ','); //trim last comma caused by last empty value
//     $temp2 = "'"; //starting quote
//     $temp2 .=  str_replace(",", "','", $temp); //quotes around commas
//     $temp2 .= "'"; //ending quote
//     $result = $temp2; // = 'apples','bananas','oranges'

// // File upload directory 
// $targetDir = "upload_img/";

// if (isset($_POST["submit"])) {

//     // if (!empty($_FILES["file"]["name"])) {
//         // $fileName = basename($_FILES["file"]["name"]);

//         // for picture file
//         if (!empty($_FILES["file1"]["name"])) {
//             $fileName1 = basename($_FILES["file1"]["name"]);

//             //for video file
//             $targetFilePath = $targetDir . $fileName1;
//             $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

//             // Allow certain file formats 
//             if (move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath))
//                 // if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
//                     // Insert image file name into database 
//                     // $sql = "INSERT Into `image` (`name`,`video`) VALUES('$fileName','$fileName1')";
//                     // $sql = "INSERT Into `property_detail` (property_type,property_status,property_price,room_count,beds_count,baths_count,area,price,agencies,message,address,zipcode,country,city,landmark,insert_check,name,video) 
//                     // VALUES('$property_type','$property_status','$property_price','$room_count','$beds_count','$baths_count','$area','$price','$agencies','$message','$address','$zipcode','$country','$city','$landmark','$insert','$fileName','$fileName1')";
                   
//                 // }


//         }
//     }
// }
// //Display status message 
// echo $statusMsg;
// //}
// // apps-fileview.texmex_20230907.01_p0
// // property_save_ajax.php
// // Displaying property_save_ajax.php.