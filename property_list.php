<?php
include('dbconn.php');
//require_once 'config.php';
$num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `property_info`"));

if ($num_rows < 10) {
    $formattedCount = str_pad($num_rows, 2, '0', STR_PAD_LEFT);
} else {
    $formattedCount = $num_rows;
}
// Define the number of records per page
$recordsPerPage = 4;

// Get the current page from the URL parameter, default to 1 if not set
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the starting record for the current page
$startFrom = ($current_page - 1) * $recordsPerPage;

// Fetch records from the database based on pagination
$q = "SELECT * FROM `property_info` ORDER BY id DESC LIMIT $startFrom, $recordsPerPage";
$res_tbl = mysqli_query($conn, $q);

?>




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

    <style>
        /* Add your CSS styles for pagination here */
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .pagination a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #ff5f23;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .pagination a:hover {
            background-color: #45a049;
        }
    </style>


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
        </div>

    </header> -->
    <!-- Header Section Ended Here -->


    <!-- Main Div Section Started Here -->

    <!-- <div id="main">
        <div class="main-div-section1">
            <div class="container">
                <div class="main-heading-div">
                    <div class="main-heading-content-wrapper">
                        <div class="main-heading-div-content1">
                            <h3 class="main-heading-div-h3">
                                Property List
                            </h3>
                            <p class="main-heading-div-para">
                                Welcome To Admin Panel
                            </p>
                        </div>
                        <div class="main-heading-div-content2">
                            <p class="main-heading-div-para2">
                                My Properties
                            </p>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row mt-5">
                        <a href="./property_detailed.php">
                            </a>
                          </div>
                    </div>                    

                    <?Php

                    // include 'dbconn.php';
                    
                    // $i = 0;
                    // $q = "select * from property_info order by id desc";
                    

                    // $res_tbl = mysqli_query($conn, $q);
                    


                    // foreach ($res_tbl as $row_tbl) {
                    //     $id = $row_tbl['id'];
                    // echo $id;
                    ?>

                    <a href="./property_detailed.php?inv_id=<?php //echo $id; ?>">
                        <div class="main-property-list-div">
                            <div class="properties-list-card">
                                <div class="swiper mySwiper admin-property-list-div-hover">
                                    <div
                                        class="swiper-wrapper property-list-swiper-wrapper admin-property-list-img-div">
                                        <div class="swiper-slide">
                                            <input hidden id="postId" value="<?php //echo $row_tbl['id']; ?> ">
                                            <img src="upload_img/<?php // echo $row_tbl['name']; ?>"
                                                class="admin-property-list-img" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="upload_img/<?php //echo $row_tbl['p_name']; ?>"
                                                class="admin-property-list-img" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="upload_img/<?php //echo $row_tbl['p_name2']; ?>"
                                                class="admin-property-list-img" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="properties-list-card-content">
                                    <div class="properties-list-card-content-div1">
                                        <h5 class="property-list-heading-h5">
                                            <?php //echo $row_tbl['property_type']; ?>
                                        </h5>
                                        <a href="./property-edit.php?inv_id=<?php //echo $id; ?>"
                                            class="admin-dashboard-edit-property-btn">
                                            Edit
                                        </a>
                                    </div>
                                    <p class="property-list-heading-para">

                                        <?php //echo $row_tbl['message']; ?>
                                    </p>
                                    <div class="property2-section1-div-flex">
                                        <p class="property2-section1-card-content-para3">
                                            <?php //echo $row_tbl['carpet_area']; ?>
                                        </p>
                                        <p class="property2-section1-card-content-para4">
                                            <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;
                                            <?php // echo $row_tbl['property_price'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            //    }
                            ?>
                        </div>
                </div>
                </a>
            </div> -->
    <!-- Pagination links -->


    <div id="main">

        <div class="main-div-section1">
            <div class="container">
                <div class="main-heading-div">
                    <div class="main-heading-content-wrapper">
                        <div class="main-heading-div-content1">
                            <h3 class="main-heading-div-h3">
                                Property List
                            </h3>
                            <p class="main-heading-div-para">
                                Welcome To Admin Panel
                            </p>
                        </div>
                        <div class="main-heading-div-content2">
                            <p class="main-heading-div-para2">
                                My Properties : 
                                <?php echo $formattedCount; ?>

                            </p>
                        </div>
                        <!-- pagiantion -->
                        <div class="pagination">
                            <?php
                            $totalRecords = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `property_info`"));
                            $totalPages = ceil($totalRecords / $recordsPerPage);

                            for ($i = 1; $i <= $totalPages; $i++) {
                                echo "<a href='?page=$i'>$i</a> ";
                            }
                            ?>
                        </div>
                        <!-- end pagination -->
                    </div>
                    <?Php

                    // include 'dbconn.php';
                    
                    // $i = 0;
                    // $q = "select * from property_detail ";
                    

                    // $res_tbl = mysqli_query($conn, $q);
                    


                    // foreach ($res_tbl as $row_tbl) {
                    //    $id = $row_tbl['id'];
                    // echo $id;
                    ?>
                    <div class="main-heading-div2">
                        <div class="main-heading-div2-content2">
                            <h4 class="main-heading-div2-h4">
                                <!-- Showing <span class="main-heading-div2-h4-span"> 1-8 of 14 </span> Listings -->
                            </h4>
                        </div>
                    </div>
                    <div class="row mt-5">

                        <?Php

                        // include 'dbconn.php';
                        
                        // $i = 0;
                        // $q = "select * from property_info order by id desc ";
                        

                        // $res_tbl = mysqli_query($conn, $q);
                        


                        foreach ($res_tbl as $row_tbl) {
                            $id = $row_tbl['id'];
                            // echo $id;
                            ?>

                            <div class="col-lg-6 col-md-6 col-12">
                                <a href="./property_detailed.php?inv_id=<?php echo $id; ?>">
                                    <div class="properties-list-card">
                                        <div class="swiper mySwiper admin-property-list-div-hover">
                                            <div
                                                class="swiper-wrapper property-list-swiper-wrapper admin-property-list-img-div">
                                                <div class="swiper-slide">
                                                    <input hidden id="postId" value="<?php echo $row_tbl['id']; ?> ">
                                                    <img src="upload_img/<?php echo $row_tbl['name']; ?>"
                                                        class="admin-property-list-img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="upload_img/<?php echo $row_tbl['p_name']; ?>"
                                                        class="admin-property-list-img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="upload_img/<?php echo $row_tbl['p_name2']; ?>"
                                                        class="admin-property-list-img" />
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name3']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name4']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name5']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name6']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name7']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name8']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="property-detail-section2-hero2">
                                                        <img src="upload_img/<?php echo $row_tbl['p_name9']; ?>"
                                                            alt="img_three" class="property-detail-section2-img">
                                                    </div>
                                                </div>
                                                <!-- <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="admin-property-list-img" />
                          </div> -->
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                        <div class="properties-list-card-content">
                                            <div class="properties-list-card-content-div1">
                                                <h5 class="property-list-heading-h5">
                                                    <?php echo $row_tbl['building_name']; ?>
                                                </h5>
                                                <div class="property_edit_delete">
                                                    <a href="./property-edit.php?inv_id=<?php echo $id; ?>"
                                                        class="admin-dashboard-edit-property-btn">
                                                        Edit
                                                    </a>

                                                    <!-- <a href="./delete_property.php?id=<?php echo $id; ?>"
                                                        class="admin-dashboard-delete-property-btn">
                                                        Delete
                                                    </a> -->
                                                    <a href="javascript:void(0);"
                                                        class="admin-dashboard-delete-property-btn"
                                                        onclick="openModal(<?php echo $id; ?>)">
                                                        Delete
                                                    </a>

                                                </div>
                                            </div>
                                            <p class="property-list-heading-para">
                                                <?php
                                                $address = $row_tbl['address'];
                                                $addressShort = strlen($address) > 34 ? substr($address, 0, 34) . '...' : $address;
                                                echo $addressShort;
                                                ?>
                                                <span class="full-text" style="display: none;">
                                                    <?php echo $address; ?>
                                                </span>
                                                <a class="read-more-link"
                                                    href="./property_detailed.php?inv_id=<?php echo $id; ?>">Read More</a>
                                            </p>

                                            <div class="property2-section1-div-flex">
                                                <p class="property2-section1-card-content-para3">
                                                    <?php echo $row_tbl['floor_area']; ?> 
                                                </p>
                                                <p class="property2-section1-card-content-para4">
                                                    <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;
                                                    <?php echo $row_tbl['price'] ?> Lacks
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>




                            <?php
                        }
                        ?>
                    </div>


                    <!-- delete modal -->
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Delete Confirmation</h2>
                                <span class="close" id="closeButton">&times;</span>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this data?</p>
                            </div>
                            <div class="modal-footer">
                                <button id="deleteButton" class="user-table-delete-btn-modal">Delete</button>
                            </div>
                        </div>
                    </div>

                    <!-- delete modal end here -->
                </div>
            </div>
        </div>





        <!-- Main Div Section Ended Here -->


        <!-- Custom JS Link -->
        <script src="./js/script.js"></script>

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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            var modal = document.getElementById("myModal");
            var deleteButton = document.getElementById("deleteButton");
            var cancelButton = document.getElementById("cancelButton");

            function openModal(oid) {
                modal.style.display = "block";

                deleteButton.onclick = function () {
                    var myurl = 'delete_property.php?id=' + oid;
                    $.ajax({
                        url: myurl,
                        success: function (result) {
                            // Handle the result as needed (e.g., show a message)
                            // alert(result);
                            window.location.reload();
                        }
                    });
                    modal.style.display = "none";
                };

                cancelButton.onclick = function () {
                    modal.style.display = "none";
                };
            }

            var span = document.getElementById("closeButton");

            span.onclick = function () {
                modal.style.display = "none";
            };

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            };
        </script>






</body>

</html>