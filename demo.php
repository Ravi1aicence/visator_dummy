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
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color_skins.css">




</head>

<body class="theme-purple">

    <section id="sidebar" class="">
        <div class="sidebar-logo-div">
            <img src="./images/logo.webp" alt="" class="sidebar-logo">
        </div>
        <div class="sidebar-profile">
            <div class="profile-img-div">
                <img src="./images/profile1.jpg" alt="" class="profile-img">
            </div>
            <div class="profile-content">
                <p class="profile-name">
                    Visator Realty
                </p>
                <p class="profile-email">
                    visatorrealty@gmail.com
                </p>
            </div>
        </div>
        <div class="sidebar-menu-flex">
            <ul class="sidebar-menu">
                <li class="sidebar-menu-li">
                    <a href="./dashboard.php" class="sidebar-menu-anchor ">
                        <i class="ri-dropdown-list dashboard-icon"></i> Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./user.php" class="sidebar-menu-anchor">
                        <i class="ri-dropdown-list dashboard-icon"></i> User Management
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./enquery.php" class="sidebar-menu-anchor">
                        <i class="ri-dropdown-list dashboard-icon"></i> Inquiry
                    </a>
                </li>
                <li class="sidebar-menu-li open-menu-li">
                    <a href="#" class="sidebar-menu-anchor active">
                        <i class="ri-dashboard-line dashboard-icon"></i> My properties <i
                            class="ri-arrow-right-s-line dropdown-arrow-icon"></i>
                    </a>
                    <ul class="side-dropdown close-side-dropdown">
                        <li class="dropdown-li">
                            <a href="./index.php" class="sidebar-menu-anchor">
                                Add New Property
                            </a>
                        </li>
                        <li class="dropdown-li">
                            <a href="./property_list.php" class="sidebar-menu-anchor">
                                Property List
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="login-logout-content">
                <a href="./../visator_realty_website/index.php" class="login-logout-btn">
                    Sign Out
                </a>
            </div>
        </div>
    </section>


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
                                                            <input type="text" class="form-control"
                                                                placeholder="Building name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Micromarket">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Locality">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="City" list="browsers">
                                                                <span class="input-group-addon arrow">
                                                                    <span class="caret"></span>
                                                                </span>
                                                            </div>
                                                            <datalist id="browsers">
                                                                <option value="Chrome">
                                                                <option value="Firefox">
                                                                <option value="Internet Explorer">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                                <option value="Microsoft Edge">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea rows="4" class="form-control no-resize"
                                                                    placeholder="Address"></textarea>
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
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Property type" list="browsers">
                                                                <span class="input-group-addon arrow">
                                                                    <span class="caret"></span>
                                                                </span>
                                                            </div>
                                                            <datalist id="browsers">
                                                                <option value="Chrome">
                                                                <option value="Firefox">
                                                                <option value="Internet Explorer">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                                <option value="Microsoft Edge">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Developer/Landlord name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Year built">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Ownership structure" list="browsers">
                                                                <span class="input-group-addon arrow">
                                                                    <span class="caret"></span>
                                                                </span>
                                                            </div>
                                                            <datalist id="browsers">
                                                                <option value="Chrome">
                                                                <option value="Firefox">
                                                                <option value="Internet Explorer">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                                <option value="Microsoft Edge">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Airport">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Air conditioning">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Power backup" list="browsers">
                                                                <span class="input-group-addon arrow">
                                                                    <span class="caret"></span>
                                                                </span>
                                                            </div>
                                                            <datalist id="browsers">
                                                                <option value="Chrome">
                                                                <option value="Firefox">
                                                                <option value="Internet Explorer">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                                <option value="Microsoft Edge">
                                                            </datalist>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Floor description">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Internal parking" list="Internal_parking">
                                                                <span class="input-group-addon arrow">
                                                                    <span class="caret"></span>
                                                                </span>
                                                            </div>
                                                            <datalist id="Internal_parking">
                                                                <option value="Available">
                                                                <option value="In house">
                                                                <option value="Internet Explorer">
                                                                <option value="Opera">
                                                                <option value="Safari">
                                                                <option value="Microsoft Edge">
                                                            </datalist>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Transport">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea rows="4" class="form-control no-resize"
                                                                placeholder="Nearby Amenities"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <h6 class="mt-4">Dimensions</h6>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                placeholder="Floor area">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                placeholder="Total area">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                placeholder="Parking ratio">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control"
                                                                placeholder="Storey">
                                                        </div>
                                                    </div>


                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <textarea rows="4" class="form-control no-resize"
                                                                placeholder="Building Information"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="mt-4">General Amenities</h6>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox21" type="checkbox">
                                                            <label for="checkbox21">Swimming pool</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox22" type="checkbox">
                                                            <label for="checkbox22">Terrace</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox23" type="checkbox" checked="">
                                                            <label for="checkbox23">Air conditioning</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox24" type="checkbox" checked="">
                                                            <label for="checkbox24">Internet</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox25" type="checkbox">
                                                            <label for="checkbox25">Balcony</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox26" type="checkbox">
                                                            <label for="checkbox26">Cable TV</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox27" type="checkbox">
                                                            <label for="checkbox27">Computer</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox28" type="checkbox" checked="">
                                                            <label for="checkbox28">Dishwasher</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox29" type="checkbox" checked="">
                                                            <label for="checkbox29">Near Green Zone</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox30" type="checkbox">
                                                            <label for="checkbox30">Near Church</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox31" type="checkbox">
                                                            <label for="checkbox31">Near Estate</label>
                                                        </div>
                                                        <div class="checkbox inlineblock m-r-20">
                                                            <input id="checkbox32" type="checkbox">
                                                            <label for="checkbox32">Cofee pot</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-input-div demo-create-div"
                                                            onclick="showHtmlDiv()">
                                                            <input type="file" name="file[]" id="imageInput" multiple
                                                                style="display: none;">
                                                            <label for="imageInput"
                                                                class="btn btn-primary add-image-button img-input"
                                                                id="imagePreview">
                                                                <div class="img_upload_div" id="imgUploadDiv">
                                                                    <img class="upload_img"
                                                                        src="./images/upload_img.png" alt="">
                                                                    <p class="image-count">Drop files here or click to
                                                                        upload.</p>
                                                                </div>
                                                            </label>
                                                            <!-- <div class="mt-3"></div> -->
                                                            <!-- <p class="image-count" id="imageCount">Total Images: 0</p> -->

                                                            <?php

                    include('dbconn.php');

                    ?>
                                                        </div>
                                                        <!-- <form action="/" id="frmFileUpload" class="dropzone m-b-15 m-t-15" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3>
                                        <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em> </div>
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="">
                                    </div>
                                </form> -->
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-round">Submit</button>
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
    function showHtmlDiv() {
        var htmlShow = document.getElementById("imgUploadDiv");
        if (htmlShow.style.display === "none" || htmlShow.style.display === "") {
            htmlShow.style.display = "block";
        } else {
            htmlShow.style.display = "none";
        }
    }





    $(document).ready(function() {

        $("#submit").click(function() {
            var insert = [];
            $('.additional-feature-checkbox').each(function() {
                if ($(this).is(":checked")) {
                    insert.push($(this).val());
                }
            });
            insert = insert.toString();
            var property_type = $("#property_type").find(":selected").val();


            var property_status = $('#property_status').find(":selected").val();
            var property_price = $("#property_price").val();
            var balcony = $('#balcony').find(":selected").val();


            var bedroom = $('#bedroom').find(":selected").val();
            var bathroom = $('#bathroom').find(":selected").val();
            var built_up = document.getElementById('built_up').value;
            var carpet_area = document.getElementById('carpet_area').value;
            var property_age = document.getElementById('property_age').value;

            var facing = $("#facing").find(":selected").val();
            var location = document.getElementById('location').value;
            var possession = $("#possession").find(":selected").val();

            var furnishing = $("#furnishing").find(":selected").val();
            var total_floor = $("#total_floor").find(":selected").val();
            var floor_number = $("#floor_number").find(":selected").val();
            var city = $("#city").find(":selected").val();
            var landmark = document.getElementById('landmark').value;
            var message = document.getElementById('message').value;


            var parking = $("#parking").find(":selected").val();

            var furnishing = $("#furnishing").find(":selected").val();
            console.table('insert', 'name');
            $.ajax({
                type: "POST",
                url: "contact_save.php",

                data: {
                    property_type: property_type,
                    property_status: property_status,
                    property_price: property_price,
                    balcony: balcony,
                    bedroom: bedroom,
                    bathroom: bathroom,
                    built_up: built_up,
                    carpet_area: carpet_area,
                    property_age: property_age,
                    facing: facing,
                    location: location,
                    possession: possession,
                    floor_number: floor_number,
                    total_floor: total_floor,
                    city: city,
                    landmark: landmark,
                    message: message,
                    insert: insert
                },
                success: function(data) {
                    console.log(data);
                }
            });
        });
    });
    </script>
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