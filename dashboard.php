
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <title>Admin Dashboard</title>

  <!-- Custom CSS File -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/dashboard.css">

</head>

<body>
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
      </div> -->
    </header>
  <!-- Header Section Ended Here -->

<?php
include 'dbconn.php';

?>
  <!-- Dashboard Content Started Here -->
    <div id="main" class="main2">
      <div class="main-div-section1">
      <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
        <div class="mr-auto  d-lg-block">
          <h2 class="text-black font-w600">Dashboard</h2>
          <p class="mb-0 p-style">Welcome to Visator Realty Admin</p>
        </div>
        <a class="btn btn-primary rounded light mr-3" href="">Refresh</a>
        
      </div>
        <!-- <div class="main-dashboard-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                <a href="./property_list.php">
                  <div class="dashboard-card">
                    <div class="dashboard-img-div">
                      <img src="./images/images/arrow.png" alt="">
                    </div>
                    <span class="dashboard-card-content-line">
                    </span>
                    <div class="dashboard-card-content">
                      <p class="dashboard-card-para1">
                        <?php
                          include 'dbconn.php';
                          $result = mysqli_query($conn, "SELECT * FROM property_detail");
                          $num_rows = mysqli_num_rows($result);
                          echo $num_rows;
                        ?>
                      </p>
                      <p class="dashboard-card-para1">
                        Total Property
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <a href="./enquery.php">
                  <div class="dashboard-card">
                    <div class="dashboard-img-div">
                      <img src="./images/images/Book.png" alt="">
                    </div>
                    <span class="dashboard-card-content-line">
                    </span>
                    <div class="dashboard-card-content">
                      <p class="dashboard-card-para1">
                        <?php
                          include 'dbconn.php';
                          $result = mysqli_query($conn, "SELECT * FROM contact_info");
                          $num_rows = mysqli_num_rows($result);
                          echo $num_rows;
                        ?>
                      </p>
                      <p class="dashboard-card-para1">
                        Total inquerys
                      </p>
                    </div>
                  </div>
                </a>
              </div>

            </div>
          </div>

        </div> -->
        
        <div class="col-lg-6 col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-danger property-bx text-white">
                    <div class="card-body">
                        <div class="media d-sm-flex d-block align-items-center"><span
                                class="mr-4 d-block mb-sm-0 mb-3"><svg width="80" height="80" viewBox="0 0 80 80"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z"
                                        fill="white"></path>
                                    <path
                                        d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z"
                                        fill="white"></path>
                                    <path
                                        d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z"
                                        fill="white"></path>
                                </svg></span>
                            <div class="media-body mb-sm-0 mb-3 mr-5">
                                <h4 class="fs-22 text-white">Total Properties</h4>
                                <div class="progress mt-3 mb-2" style="height: 8px;">
                                    <div class="progress-bar bg-white progress-animated" role="progressbar"
                                        style="width: 86%; height: 8px;"><span class="sr-only">86% Complete</span></div>
                                </div><span class="fs-14">431 more to break last month record</span>
                            </div><span class="fs-46 font-w500"><?php
                    include 'dbconn.php';
                    $result = mysqli_query($conn, "SELECT * FROM property_info");
                    $num_rows1 = mysqli_num_rows($result);
                    if ($num_rows1 < 10) {
                      $formattedCount = str_pad($num_rows1, 2, '0', STR_PAD_LEFT);
                  } else {
                      $formattedCount = $num_rows1;
                  }
                  
                  echo $formattedCount;
                    ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-36 text-black font-w600"><?php
                      include 'dbconn.php';
                      $result = mysqli_query($conn, "SELECT prpty_type FROM property_info where prpty_type ='sale'");
                      $num_rows = mysqli_num_rows($result);
                      if ($num_rows < 10) {
                        $formattedCount = str_pad($num_rows, 2, '0', STR_PAD_LEFT);
                    } else {
                        $formattedCount = $num_rows;
                    }
                    
                    echo $formattedCount;
                      ?></h2>
                                <p class="fs-18 mb-0 text-black font-w500">Properties for Sale</p><span
                                    class="fs-13"></span>
                            </div>
                            <!-- <div class="d-inline-block position-relative donut-chart-sale">
                                <div class="donught-chart" style="margin-top: -10px;"><canvas height="125" width="125"
                                        style="display: block; height: 100px; width: 100px;"></canvas></div><small
                                    class="text-primary">71%</small><span class="circle bgl-primary"></span>
                            </div> -->
                            <div class="progress-container">
                                <svg class="progress-ring" width="120" height="120">
                                  <circle class="progress-ring-circle" cx="60" cy="60" r="50"></circle>
                                </svg>
                                <div class="progress-text">50%</div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-36 text-black font-w600"><?php
                      include 'dbconn.php';
                      $result = mysqli_query($conn, "SELECT prpty_type FROM property_info where prpty_type ='rent'");
                      $num_rows2 = mysqli_num_rows($result);
                      if ($num_rows2 < 10) {
                        $formattedCount = str_pad($num_rows2, 2, '0', STR_PAD_LEFT);
                    } else {
                        $formattedCount = $num_rows2;
                    }
                    
                    echo $formattedCount;
                      echo '<input hidden id=rent name =rent value = <?php echo "$num_rows";?>'
                        ?></h2>
                                <p class="fs-18 mb-0 text-black font-w500">Properties for Rent</p><span
                                    class="fs-13"></span>
                            </div>
                            <!-- <div class="d-inline-block position-relative donut-chart-sale">
                                <div class="donught-chart" style="margin-top: -10px;"><canvas height="125" width="125"
                                        style="display: block; height: 100px; width: 100px;"></canvas></div><small
                                    class="text-success">90%</small><span class="circle bgl-success"></span>
                            </div> -->

                            <div class="progress-container">
                                <svg class="progress-ring" width="120" height="120">
                                  <circle class="progress-ring-circle" cx="60" cy="60" r="50"></circle>
                                </svg>
                                <div class="progress-text">50%</div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-36 text-black font-w600"><?php
                      include 'dbconn.php';
                      $result = mysqli_query($conn, "SELECT * FROM contact_info");
                      $num_rows3 = mysqli_num_rows($result);
                      if ($num_rows3 < 10) {
                        $formattedCount = str_pad($num_rows3, 2, '0', STR_PAD_LEFT);
                    } else {
                        $formattedCount = $num_rows3;
                    }
                    
                    echo $formattedCount;
                      echo '<input hidden id=rent name =rent value = <?php echo "$num_rows";?>'
                        ?></h2>
                                <p class="fs-18 mb-0 text-black font-w500">Total Inquirys</p><span
                                    class="fs-13"></span>
                            </div>
                            <!-- <div class="d-inline-block position-relative donut-chart-sale">
                                <div class="donught-chart" style="margin-top: -10px;"><canvas height="125" width="125"
                                        style="display: block; height: 100px; width: 100px;"></canvas></div><small
                                    class="text-primary">71%</small><span class="circle bgl-primary"></span>
                            </div> -->
                            <div class="progress-container">
                                <svg class="progress-ring" width="120" height="120">
                                  <circle class="progress-ring-circle" cx="60" cy="60" r="50"></circle>
                                </svg>
                                <div class="progress-text">50%</div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body mr-3">
                                <h2 class="fs-36 text-black font-w600"><?php
        include 'dbconn.php';
        $result = mysqli_query($conn, "SELECT * FROM user_designation");
        $num_rows4 = mysqli_num_rows($result);
        
        // Check if the count is less than 10 and add leading zeros
        if ($num_rows4 < 10) {
            $formattedCount = str_pad($num_rows4, 2, '0', STR_PAD_LEFT);
        } else {
            $formattedCount = $num_rows4;
        }
        
        echo $formattedCount;
        ?></h2>
                                <p class="fs-18 mb-0 text-black font-w500">Total Employee's</p><span
                                    class="fs-13"></span>
                            </div>
                            <!-- <div class="d-inline-block position-relative donut-chart-sale">
                                <div class="donught-chart" style="margin-top: -10px;"><canvas height="125" width="125"
                                        style="display: block; height: 100px; width: 100px;"></canvas></div><small
                                    class="text-success">90%</small><span class="circle bgl-success"></span>
                            </div> -->

                            <div class="progress-container">
                                <svg class="progress-ring" width="120" height="120">
                                  <circle class="progress-ring-circle" cx="60" cy="60" r="50"></circle>
                                </svg>
                                <div class="progress-text">50%</div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  <!-- Dashboard Content Ended Here -->


 

  <script>
const progressBars = document.querySelectorAll(".progress-ring-circle");
const progressTexts = document.querySelectorAll(".progress-text");

// Set the progress (percentage) for the first bar
const percentage1 = <?php echo $num_rows; ?>;
const circumference1 = 314;
const offset1 = circumference1 - (percentage1 / 100) * circumference1;
progressBars[0].style.strokeDashoffset = offset1;
progressTexts[0].textContent = `${percentage1}%`;

// Set the progress (percentage) for the second bar
const percentage2 = <?php echo $num_rows2; ?>;
const circumference2 = 314;
const offset2 = circumference2 - (percentage2 / 100) * circumference2;
progressBars[1].style.strokeDashoffset = offset2;
progressTexts[1].textContent = `${percentage2}%`;

// Set the progress (percentage) for the third bar
const percentage3 = <?php echo $num_rows3; ?>;
const circumference3 = 314;
const offset3 = circumference3 - (percentage3 / 100) * circumference3;
progressBars[2].style.strokeDashoffset = offset3;
progressTexts[2].textContent = `${percentage3}%`;

// Set the progress (percentage) for the fourth bar
const percentage4 = <?php echo $num_rows4; ?>;
const circumference4 = 314;
const offset4 = circumference4 - (percentage4 / 100) * circumference4;
progressBars[3].style.strokeDashoffset = offset4;
progressTexts[3].textContent = `${percentage4}%`;
</script>
  <!-- Custom JS Link -->
  <script src="./js/script.js"></script>
  <script>
  $(document).ready(function () {
      
      $("#submit").click(function () {
        var insert = [];
                $('.additional-feature-checkbox').each(function() {
                    if ($(this).is(":checked")) {
                        insert.push($(this).val());
                    }
                });
                insert = insert.toString();
				alert(insert);
        var property_type = $("#property_type").val();
alert(property_type);
        // var p_status = $("#p_status").val();
        var property_status = $('#property_status').find(":selected").val();
      //  alert(conceptName);
        var property_price = $("#property_price").val();
       // alert(property_price);
        var room_count =  $("#room_count").val();
        //alert(room_count);


        var beds_count = document.getElementById('beds_count').value;
     //alert(beds_count);
         var baths_count = document.getElementById('baths_count').value;
        // alert(baths_count);

         var area = document.getElementById('area').value;
       //  alert(area);
        var price = document.getElementById('price').value;
       // alert(price);

        var agencies = document.getElementById('agencies').value;
        //alert(agencies);

        var message = document.getElementById('message').value;
       // alert(message);

       
        var zipcode = document.getElementById('zipcode').value;
        //alert(zipcode);

        var country = document.getElementById('country').value;
       // alert(country);
        var city = document.getElementById('city').value;
        //alert(city);
        var landmark = document.getElementById('landmark').value;
      
       // alert(emergency_exit);
        //for checkbox
      
      //  exit;
console.table('insert','name');
        $.ajax({
                    type: "POST",
                    url: "contact_save.php",
                   
                    data: {
                      property_type: property_type,
                      property_status: property_status,
                      property_price: property_price,
                      room_count: room_count,
                      beds_count: beds_count,
                      baths_count: baths_count,
                      area: area,
                      price: price,
                      agencies: agencies,
                      message: message,
                 
                      zipcode: zipcode,
                      country: country,
                      city: city,
                      landmark: landmark,
                       insert: insert
                    },
                    success: function(data) {
                      alert("sucess");
                      console.log(data);
                       // $('#result').html(data);
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
