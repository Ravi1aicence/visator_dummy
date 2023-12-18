<!DOCTYPE html>
<html lang="en">
    <!-- jhasdh -->

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
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color_skins.css">




</head>

<body class="theme-purple">


    <?php
    include("sidebar.php");
    ?>



    <!-- Main Div Section Started Here contact_save.php-->

    <form method="post" action="contact_save.php" enctype="multipart/form-data">
        <div>
            <div class="main-div-section1">
                <div class="container">
                    <div class="main-heading-div">

                        <!-- Main Content -->
                        <section class="content">
                            <div class="block-header">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <h2>Property Add
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
                                                            <input type="text" class="form-control" id='building_name' name='building_name' placeholder="Property name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='micromarket' name='micromarket' placeholder="Micromarket">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='locality' name='locality' placeholder="Locality">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="City" id="city_list" name="city_list" list="city">
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
                                                                <textarea rows="4" class="form-control no-resize" placeholder="Address" id='address' name='address'></textarea>
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
                                                                <input type="text" class="form-control" placeholder="Property type" id="prpty_type" name="prpty_type" list="property_type">
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
                                                            <input type="text" class="form-control" id='developer_name' name='developer_name' placeholder="Developer/Landlord name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='year_built' name='year_built' placeholder="Year built">
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
                                                            <input type="text" class="form-control" id='airport' name='airport' placeholder="Airport">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='air_conditn' name='air_conditn' placeholder="Air conditioning">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Power backup" id='powerbk' name='powerbk' list="power">
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
                                                            <input type="text" class="form-control" id='floor_desc' name='floor_desc' placeholder="Floor description">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id='internal_parking' name='internal_parking' placeholder="Internal parking" list="parling_option">
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
                                                            <input type="text" class="form-control" id='transport' name='transport' placeholder="Transport">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id='price' name='price' placeholder="Price">
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea rows="4" class="form-control no-resize" id='nearbyamenities' name='nearbyamenities' placeholder="Nearby Amenities"></textarea>
                                                        </div>
                                                    </div>



                                                </div>
                                                <h6 class="mt-4">Dimensions</h6>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id='floor_area' name='floor_area' placeholder="Floor area">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id='toatl_area' name='toatl_area' placeholder="Total area">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id='parking_ratio' name='parking_ratio' placeholder="Parking ratio">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" id='storey' name='storey' placeholder="Storey">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea rows="4" class="form-control no-resize" id='building_info' name='building_info' placeholder="Property Information"></textarea>
                                                        </div>
                                                    </div>
                                                    <h6 class="mt-4">General Amenities</h6>
                                                    <div class="row" id="insert" name="insert">
                                                        <div class="col-sm-12">
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox21" type="checkbox" id="insert[]" name="insert[]" value='Swimming pool'>
                                                                <label for="checkbox21">Swimming pool</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox22" type="checkbox" id="insert[]" name="insert[]" value='Terrace'>
                                                                <label for="checkbox22">Terrace</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox23" type="checkbox" id="insert[]" name="insert[]" value='Air conditioning'>
                                                                <label for="checkbox23">Air conditioning</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox24" type="checkbox" id="insert[]" name="insert[]" value='Internet'>
                                                                <label for="checkbox24">Internet</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox25" type="checkbox" id="insert[]" name="insert[]" value='Balcony'>
                                                                <label for="checkbox25">Balcony</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox26" type="checkbox" id="insert[]" name="insert[]" value='Cable TV'>
                                                                <label for="checkbox26">Cable TV</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox27" type="checkbox" id="insert[]" name="insert[]" value='Computer'>
                                                                <label for="checkbox27">Computer</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox28" type="checkbox" id="insert[]" name="insert[]" value='Dishwasher'>
                                                                <label for="checkbox28">Dishwasher</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox29" type="checkbox" id="insert[]" name="insert[]" value='Near Green Zone'>
                                                                <label for="checkbox29">Near Green Zone</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox30" type="checkbox" id="insert[]" name="insert[]" value='Near Church'>
                                                                <label for="checkbox30">Near Church</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox31" type="checkbox" id="insert[]" name="insert[]" value='Near Estate'>
                                                                <label for="checkbox31">Near Estate</label>
                                                            </div>
                                                            <div class="checkbox inlineblock m-r-20">
                                                                <input id="checkbox32" type="checkbox" id="insert[]" name="insert[]" value='Cofee pot'>
                                                                <label for="checkbox32">Cofee pot</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-input-div demo-create-div">
                                                            <div class="property_select">
                                                            <label for="imageInput2" class="form-label">Floor Plan</label>

                                                            <input type="file" name="file1" id="imageInput2" style="display: none;">
                                                            <label for="imageInput2" class="btn btn-primary add-image-button">Upload
                                                                image</label>
                                                                </div>
                                                            <div id="imagePreviewdiv2" style="display: none;">
                                                                <div id="imagePreview2" class="mt-3"></div>
                                                            </div>
                                                            <!-- <p class="image-count" id="imageCount">Total Images: 0</p> -->

                                                            <?php

                                                            include('dbconn.php');

                                                            ?>
                                                        </div>

                                                    </div>
                                                  <div class="col-sm-12">
                                                        <div class="form-input-div demo-create-div">
                                                        <div class="property_select">
                                                            <label for="" class="form-label">Property images (max 10)</label>

                                                            <input type="file" name="file[]" id="imageInput" multiple style="display: none;">
                                                            <label for="imageInput" class="btn btn-primary add-image-button">Upload
                                                                images</label>
                                                                </div>
                                                            <div id="imagePreviewdiv" style="display: none;">
                                                                <div id="imagePreview" class="mt-3"></div>
                                                            </div>


                                                            <p id="imageCount"></p>

                                                            <?php

                                                            include('dbconn.php');

                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-4 text-center">
                                                        <button type="submit" class="btn btn-primary-submit btn-round" name="submit" id="submit">Submit</button>
                                                        <button type="submit"  onclick ="return_back()" class="btn btn-default btn-round btn-simple">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>



    </form>
    </div>
    </div>
    </div>
    </div>

    </div>


    <!-- Main Div Section Ended Here -->


    <!-- Custom JS Link -->
    <script src="./js/script.js"></script>
    <script src="./js/preview_image.js"></script>
    <script>
    function return_back(){

        
        
    }
    
                                                




        $(document).ready(function() {

            $("#submit").click(function() {
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
                    type: "POST",
                    url: "contact_save.php",

                    data: {
                        building_name: building_name,
                        micromarket: micromarket,
                        locality: locality,
                        city_list: city_list,
                        address: address,
                        prpty_type: prpty_type,
                        developer_name: developer_name,
                        year_built: year_built,
                        ownership_strctr: ownership_strctr,
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

                    }
                });









            });
        });
    </script>
    <script src="./js/preview_image_floor-plan.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Jquery Core Js -->
    <script src="js/libscripts.bundle.js"></script>
    <script src="js/vendorscripts.bundle.js"></script>

    <script src="js/dropzone.js"></script> <!-- Dropzone Plugin Js -->

    <script src="js/mainscripts.bundle.js"></script>


</body>

</html>