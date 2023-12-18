<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Remix Icon Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" />

  <title>Admin Dashboard</title>

  <!-- Custom CSS File -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style2.css">

</head>

<body>


<?php 
include("sidebar.php");
?>



<div id="main">
    <div class="main-div-section1">
      <div class="back-to-property-list-btn-div">
        <a href="./property_list.php" class="back-list-property-btn">
          Back to list
        </a>
      </div>
      <?php
        include('dbconn.php');

        $id = isset($_REQUEST['inv_id']) ? $_REQUEST['inv_id'] : null;
          //echo $id;

          $q = "SELECT * FROM `property_info` WHERE id = '$id' ";
          //echo $q;

          $res_tbl = mysqli_query($conn, $q);

          foreach ($res_tbl as $row_tbl) {
            
        
      ?>

     
      <!-- Property Detailed Section 1 Started Here -->
      <div class="property-section11">
        <div class="property-section1-content">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['name']; ?>" alt="img_one" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name']; ?>" alt="img_two" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name2']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name3']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name4']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name5']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name6']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name7']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name8']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="property-detail-section2-hero2">
                  <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['p_name9']; ?>" alt="img_three" class="property-detail-section2-img">
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="container">
          <div class="property-detail-section2-hero1">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="property-detail-section2-hero1-content1">
                  <h3 class="main-heading">
                    <?php echo $row_tbl['building_name']; ?>
                  </h3>
                  <p class="main-card-paragraph">
                    <i class="ri-map-pin-2-line"></i> &nbsp;
                    <?php echo $row_tbl['locality']; ?>
                  </p>
                  <div class="property-detail-sec1-hero1-div">
                    <p class="main-card-paragraph">
                      <i class="ri-reply-fill"></i>&nbsp;
                      <?php echo $row_tbl['building_name']; ?>
                    </p>
                    <p class="main-card-paragraph">
                      <i class="ri-building-line"></i>&nbsp;
                      
                      <?php echo $row_tbl['prpty_type']; ?>
                    </p>
                  </div>
                  
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-12">
                <!-- <div class="property-detail-section2-hero1-content2">
                  <div class="bookmark-heart1 main-card-paragraph">
                    <i class="ri-bookmark-line fa-heart2"></i> Bookmark
                  </div>
                  <button class="contat-btn-for-property-detail">
                    Contact Us
                  </button>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Form Preload Modal Section Started Here -->
        <!-- <div class="popup-modal-content hidden">
          <i class="ri-close-line fa-xmark fa-xmark1"></i>

          <div class="container">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="modal-left">
                  <h1 class="modal-left-heading">
                    Interested to know more
                  </h1>
                  <p class="modal-left-para">
                    Schedule a meeting for more details
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="modal-right">
                  <form action="">
                    <div class="input-form-div">
                      <input type="text" name="name" id="name" class="form-input col-12" placeholder="Name">

                    </div>
                    <span id="namevalidate" style="color:red"></span>
                    <div class="input-form-div">
                      <input type="text" name="" id="email" class="form-input col-12" placeholder="Email">
                    </div>
                    <span id="email_validate" style="color:red"></span>
                    <div class="input-form-div">
                      <input type="text" name="" id="contact_no" class="form-input" placeholder="Phone No">
                    </div>
                    <span id="contact_no_validate" style="color:red"></span>
                    <div class="input-form-div">
                      <textarea name="" id="message" class="form-textarea col-12" placeholder="Message"></textarea>
                    </div>
                    <div class="button-form-div">
                      <a href="#" id="submit" onclick="save_contact()" class="modal-submit-btn">Schedule a meeting</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-container hidden">
        </div> -->
      <!-- Form Preload Modal Section Ended Here -->



      <!-- Property Detailed Section 1 Ended Here -->
      <div class="property-detail-section3">
        <div class="container">
          <h1 class="main-heading mt-5">
            Building Information
          </h1>
          <p class="main-card-paragraph property-detail-section3-para">
          <?php echo $row_tbl['building_info']; ?>
            <span class="main-card-paragraph property-detail-show-less-text">
              Five Star hotel, hospitals and malls are within a radius of 2 KM to 5 KM. The A grade structure is graced
              by in-house parking.
            </span>
          </p>
          <span class="property-detail-show-more-btn">
            Show More
          </span>

          <div class="row property-detail-section3-row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
              Building Name
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['prpty_type']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Micromarket
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['micromarket']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                 Price
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['price']; ?>
                </p>
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Locality
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['locality']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  City
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['city_list']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Address
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['address']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Year built
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['year_built']; ?>
                </p>
              </div>
            </div>
           
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Storey
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['storey']; ?>
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                Developer Name
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['developer_name']; ?>
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Typical floor area
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['floor_area']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Total area
                </h5>
                <p class="main-card-paragraph">
                  <?php echo $row_tbl['toatl_area']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Parking ratio
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['parking_ratio']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Power backup
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['powerbk']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Airport
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['airport']; ?>
                </p>
              </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                Transport
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['transport']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Air conditioning
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['air_conditn']; ?>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Floor description
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['floor_desc']; ?>
                </p> 
              </div>
              

              
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Parking
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['internal_parking']; ?>
                </p> 
              </div>
              
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
              <div class="building-information-div">
                <h5 class="main-card-heading">
                  Ameneties
                </h5>
                <p class="main-card-paragraph">
                <?php echo $row_tbl['insert_check']; ?>
                </p> 
              </div>
              

              
            </div>
          </div>
        </div>
      </div>
      

      <!-- Property Detailed Section 4 Started Here -->
      <div class="property-detail-section4">
        <div class="container">
          <div class="property-detail-section4-content">
            <h1 class="property-detail-section4-h1">
              Floor Plan
            </h1>
            <div class="property-detail-section4-img-div">
              <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['fileName1']; ?>" alt="" class="floor-plan-img1">
            </div>

            <div class="img-modal img-hidden">
              <i class="ri-close-line fa-xmark fa-xmark2"></i>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-12">
                    <div class="img-modal-content">
                      <img src="./../visator_realty_admin/upload_img/<?php echo $row_tbl['fileName1']; ?>" alt="" class="img-modal-content-img">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="img-modal-container img-hidden"></div>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
      <!-- Property Detailed Section 4 Ended Here -->

      <!-- Property Detailed Section 5 Started Here -->
      <div class="property-detail-section5">
        <div class="container">
          <div class="property-detail-section5-map">
            <div class="mapouter">
              <div class="gmap_canvas"><iframe width="100%" height="360" id="gmap_canvas"
                  src="https://maps.google.com/maps?q=india&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0"
                  scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 360px;
                  width: 100%;
                }
                </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 360px;
                  width: 100%;
                }
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Property Detailed Section 5 Ended Here -->




    </div>
  </div>
  <!-- Main Div Section Ended Here -->


  <!-- Custom JS Link -->
  <script src="./js/script.js"></script>
  <script src="./js/property-detail.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  </script>

</body>

</html>