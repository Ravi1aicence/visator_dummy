<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Remix Icon Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"/>
  
  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


  <title>Admin Dashboard</title>

    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color_skins.css">
</head>
<body class="theme-purple">

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
  
  
    <!-- Main Div Section Started Here -->
    




    <?php

include('dbconn.php');

$id = isset($_REQUEST['inv_id']) ? $_REQUEST['inv_id'] : null;
//echo $id;

$q = "SELECT * FROM `property_info` WHERE id like '$id' ";
// echo $q;

$res_tbl = mysqli_query($conn, $q);

foreach ($res_tbl as $row_tbl) {
    $id = $row_tbl["id"];
    $building_name = $row_tbl['building_name'];
    //  echo $property_type;
    $micromarket = $row_tbl['micromarket'];
    $locality = $row_tbl['locality'];
    $city_list = $row_tbl['city_list'];
    $address = $row_tbl['address'];
    $prpty_type = $row_tbl['prpty_type'];
    $developer_name = $row_tbl['developer_name'];
    $year_built = $row_tbl['year_built'];
    $airport = $row_tbl['airport'];
    $air_conditn = $row_tbl['air_conditn'];
    $powerbk = $row_tbl['powerbk'];
    //  $address=$row_tbl['address'];
    $floor_desc = $row_tbl['floor_desc'];
    $internal_parking = $row_tbl['internal_parking'];
    $transport = $row_tbl['transport'];
    $price =$row_tbl['price'];
    $nearbyamenities = $row_tbl['nearbyamenities'];
    //  $zipcode=$row_tbl['zipcode'];
    //  $country=$row_tbl['country'];
    $floor_area = $row_tbl['floor_area'];
    $toatl_area = $row_tbl['toatl_area'];
    $parking_ratio = $row_tbl['parking_ratio'];
    $storey = $row_tbl['storey'];
    $building_info = $row_tbl['building_info'];

    // $file=$row_tbl['file'];
    // echo $property_type;
    $insert_check[] = $row_tbl['insert_check'];

    // echo $name;



    foreach ($insert_check as $value) {

        $max = explode(',', $value);

        $trimmed_myArray = array_map('trim', $max);
        ?>





<!-- <form method="post" action="" enctype="multipart/form-data"> -->
<div>
    <div class="main-div-section1">
        <div class="container">
            <div class="main-heading-div">

                <!-- Main Content -->
                <section class="content">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <h2>Property Edit
                                    <small>Welcome to Visator Realty</small>
                                </h2>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">



                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="header">
                                        <h2><strong>Basic</strong> Information <small>Description text
                                                here...</small> </h2>

                                    </div>
                                    <div class="body">
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" id="id"
                                                        value="<?php echo $id; ?>">
                                                    <input type="text" class="form-control" id='building_name'
                                                        name='building_name' value="<?php echo $building_name; ?>"
                                                        placeholder="Building name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='micromarket'
                                                        name='micromarket' value="<?php echo $micromarket; ?>"
                                                        placeholder="Micromarket">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='locality'
                                                        name='locality' value="<?php echo $locality; ?>"
                                                        placeholder="Locality">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="city"
                                                            id="city_list" name="city_list" list="city"
                                                            value="<?php echo $city_list; ?>">
                                                        <span class="input-group-addon arrow">
                                                            <span class="caret"></span>
                                                        </span>
                                                    </div>
                                                    <datalist id="city">
                                                        <?php
                                                                    include("dbconn.php");
                                                                    $query = "SELECT city FROM admin_city";
                                                                    $result = mysqli_query($conn, $query);

                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value='" . $row['city'] . "'>";
                                                                    }
                                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize"
                                                            placeholder="Address" id='address'
                                                            name='address'> <?php echo $address; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mt-4">Property Information</h6>
                                        <div class="row clearfix">
                                            <!-- <div class="col-sm-6">
                                                    <div class="radio inlineblock m-r-25">
                                                        <input type="radio" name="radio1" id="radio1"
                                                            value="option1" checked="">
                                                        <label for="radio1">For Rent</label>
                                                    </div>
                                                    <div class="radio inlineblock">
                                                        <input type="radio" name="radio1" id="radio2"
                                                            value="option2">
                                                        <label for="radio2">For Sale</label>
                                                    </div>
                                                </div> -->
                                            <!-- property_type -->
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Property type" id="prpty_type"
                                                            name="prpty_type" value="<?php echo $prpty_type; ?>"
                                                            list="property_type">
                                                        <span class="input-group-addon arrow">
                                                            <span class="caret"></span>
                                                        </span>
                                                    </div>
                                                    <datalist id="property_type">
                                                        <?php
                                                                    include("dbconn.php");
                                                                    $query = "SELECT property_type FROM admin_property";
                                                                    $result = mysqli_query($conn, $query);

                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value='" . $row['property_type'] . "'>";
                                                                    }
                                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='developer_name'
                                                        name='developer_name' value="<?php echo $developer_name; ?>"
                                                        placeholder="Developer/Landlord name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='year_built'
                                                        name='year_built' value="<?php echo $year_built; ?>"
                                                        placeholder="Year built">
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Ownership structure"
                                                                id='ownership_strctr' name ='ownership_strctr' list="owner">
                                                            <span class="input-group-addon arrow">
                                                                <span class="caret"></span>
                                                            </span>
                                                        </div>
                                                        <datalist id="owner">
                                                            <?
                                                            // include("dbconn.php");
                                                            // $query = "SELECT structure FROM ownership_structure";
                                                            // $result = mysqli_query($conn, $query);
                                                    
                                                            // while ($row = mysqli_fetch_assoc($result)) {
                                                            //     echo "<option value='" . $row['structure'] . "'>";
                                                            // }
                                                            ?>
                                                        </datalist>
                                                    </div>
                                                </div> -->

                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='airport'
                                                        name='airport' value="<?php echo $airport; ?>"
                                                        placeholder="Airport">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='air_conditn'
                                                        name='air_conditn' value="<?php echo $air_conditn; ?>"
                                                        placeholder="Air conditioning">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Power backup" id='powerbk' name='powerbk'
                                                            value="<?php echo $powerbk; ?>" list="power">
                                                        <span class="input-group-addon arrow">
                                                            <span class="caret"></span>
                                                        </span>
                                                    </div>
                                                    <datalist id="power">
                                                        <?php
                                                                    include("dbconn.php");
                                                                    $query = "SELECT power FROM power_backup";
                                                                    $result = mysqli_query($conn, $query);

                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value='" . $row['power'] . "'>";
                                                                    }
                                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='floor_desc'
                                                        value="<?php echo $floor_desc; ?>" name='floor_desc'
                                                        placeholder="Floor description">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control"
                                                            id='internal_parking' name='internal_parking'
                                                            value="<?php echo $internal_parking; ?>"
                                                            placeholder="Internal parking" list="parling_option">
                                                        <span class="input-group-addon arrow">
                                                            <span class="caret"></span>
                                                        </span>
                                                    </div>
                                                    <datalist id="parling_option">
                                                        <?php
                                                                    include("dbconn.php");
                                                                    $query = "SELECT parling_option FROM internalparking ";
                                                                    $result = mysqli_query($conn, $query);

                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        echo "<option value='" . $row['parling_option'] . "'>";
                                                                    }
                                                                    ?>
                                                    </datalist>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='transport'
                                                        value="<?php echo $transport; ?>" name='transport'
                                                        placeholder="Transport">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id='price'
                                                        value="<?php echo $price; ?>" name='price'
                                                        placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea rows="4" class="form-control no-resize"
                                                        id='nearbyamenities' name='nearbyamenities'
                                                        placeholder="Nearby Amenities"><?php echo $nearbyamenities; ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <h6 class="mt-4">Dimensions</h6>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id='floor_area'
                                                        value="<?php echo $floor_area; ?>" name='floor_area'
                                                        placeholder="Floor area">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id='toatl_area'
                                                        value="<?php echo $toatl_area; ?>" name='toatl_area'
                                                        placeholder="Total area">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id='parking_ratio'
                                                        value="<?php echo $parking_ratio; ?>" name='parking_ratio'
                                                        placeholder="Parking ratio">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id='storey'
                                                        value="<?php echo $storey; ?>" name='storey'
                                                        placeholder="Storey">
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <textarea rows="4" class="form-control no-resize"
                                                        id='building_info' name='building_info'
                                                        placeholder="Building Information"><?php echo $building_info; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="mt-4">General Amenities</h6>
                                        <div class="row" id="insert" name="insert">
                                            <div class="col-sm-12">
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox21" type="checkbox" id="insert[]"
                                                        name="insert[]"
                                                        <?php if (in_array('Swimming pool', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>value='Swimming pool'>
                                                    <label for="checkbox21">Swimming pool</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox22" type="checkbox" id="insert[]"
                                                        name="insert[]"
                                                        <?php if (in_array('Terrace', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>value='Terrace'>
                                                    <label for="checkbox22">Terrace</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox23" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Air conditioning', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Air conditioning'>
                                                    <label for="checkbox23">Air conditioning</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox24" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Internet', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Internet'>
                                                    <label for="checkbox24">Internet</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox25" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Balcony', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Balcony'>
                                                    <label for="checkbox25">Balcony</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox26" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Cable TV', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Cable TV'>
                                                    <label for="checkbox26">Cable TV</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox27" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Computer', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Computer'>
                                                    <label for="checkbox27">Computer</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox28" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Dishwasher', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Dishwasher'>
                                                    <label for="checkbox28">Dishwasher</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox29" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Near Green Zone', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Near Green Zone'>
                                                    <label for="checkbox29">Near Green Zone</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox30" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Near Church', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Near Church'>
                                                    <label for="checkbox30">Near Church</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox31" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Near Estate', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Near Estate'>
                                                    <label for="checkbox31">Near Estate</label>
                                                </div>
                                                <div class="checkbox inlineblock m-r-20">
                                                    <input id="checkbox32" type="checkbox" id="insert[]"
                                                        name="insert[]" <?php if (in_array('Cofee pot', $trimmed_myArray))
                                                                        echo 'checked="checked"'; ?>
                                                        value='Cofee pot'>
                                                    <label for="checkbox32">Cofee pot</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">

                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-round"
                                                    name="submit" id="submit">Update</button>
                                                <button type="submit"
                                                    class="btn btn-default btn-round btn-simple">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
</div>
<?php 
}
}
?>


<!-- Main Div Section Ended Here -->


<!-- Custom JS Link -->
<script src="./js/script.js"></script>
<script>
$(document).ready(function() {

    $("#submit").click(function() {
        //alert("function is working");
       // debugger;
        var insert = [];

        $(':checkbox').each(function() {
            if ($(this).is(":checked")) {
                insert.push(this.value);
            }
        });

        insert = insert.join(', '); // Convert the array to a comma-separated string
        if (insert == '') {
            alert("Please Provide valid input");
            return false;
        }
        // alert(insert);
        var id = document.getElementById('id').value;
        var building_name = $("#building_name").val();
        if (building_name == '') {
            alert("Please Provide valid input");
            return false;
        }
        var micromarket = document.getElementById('micromarket').value;
        var locality = document.getElementById('locality').value;
        var city_list = $('#city_list').val();

        var address = document.getElementById('address').value;
        var prpty_type = $('#prpty_type').val();

        var developer_name = document.getElementById('developer_name').value;
        var year_built = document.getElementById('year_built').value;

        var airport = document.getElementById('airport').value;
        var air_conditn = document.getElementById('air_conditn').value;
        var powerbk = $('#powerbk').val();
        var floor_desc = document.getElementById('floor_desc').value;
        var internal_parking = $('#internal_parking').val();
        var transport = document.getElementById('transport').value;
        var price = document.getElementById('price').value;

        var nearbyamenities = document.getElementById('nearbyamenities').value;
        var floor_area = document.getElementById('floor_area').value;
        var toatl_area = document.getElementById('toatl_area').value;
        var parking_ratio = document.getElementById('parking_ratio').value;
        var storey = document.getElementById('storey').value;
        var building_info = document.getElementById('building_info').value;

        $.ajax({
            url: "property_save_ajax.php",
            type: "POST",
            

            data: {
                id: id,
                building_name: building_name,
                micromarket: micromarket,
                locality: locality,
                city_list: city_list,
                address: address,
                prpty_type: prpty_type,
                developer_name: developer_name,
                year_built: year_built,
               
                airport: airport,
                air_conditn: air_conditn,
                powerbk: powerbk,
                floor_desc: floor_desc,
                internal_parking: internal_parking,
                transport: transport,
                price: price,
                nearbyamenities: nearbyamenities,
                floor_area: floor_area,
                toatl_area: toatl_area,
                parking_ratio: parking_ratio,
                storey: storey,
                building_info: building_info,
                insert: insert

            },
            success: function(data) {
                alert("data is updated");
                window.location.href = 'property_list.php';

            }
        });









    });
});
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
</body>
</html>