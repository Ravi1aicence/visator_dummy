
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <section id="sidebar" class="vertical-scroll">
        <div class="sidebar-logo-div">
            <img src="./images/logo.webp" alt="" class="sidebar-logo">
        </div>
        <div class="sidebar-profile">
            <div class="profile-img-div">
                <img src="./images/user_img.png" alt="" class="profile-img">
            </div>
            <div class="profile-content">
                <p class="profile-name">
                    Admin
                </p>

            </div>
        </div>
        <div class="sidebar-menu-flex">
            <ul class="sidebar-menu">
                <li class="sidebar-menu-li">
                    <a href="./dashboard.php" class="sidebar-menu-anchor ">
                    <i class="ri-dashboard-line icon-style"></i> Dashboard
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./user.php" class="sidebar-menu-anchor">
                    <i class="ri-shield-user-line icon-style"></i> User Management
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./enquery.php" class="sidebar-menu-anchor">
                    <i class="ri-inbox-archive-line icon-style"></i>Inquiry
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./add_property.php" class="sidebar-menu-anchor">
                    <i class="ri-hotel-line icon-style"></i> Add New Property
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./property_list.php" class="sidebar-menu-anchor">
                    <i class="ri-file-list-3-line icon-style"></i> Property List
                    </a>
                </li>
                <li class="sidebar-menu-li">
                    <a href="./email_sub.php" class="sidebar-menu-anchor">
                    <i class="ri-mail-volume-line icon-style"></i> Subscription
                    </a>
                </li>
                <li class="sidebar-menu-li log">
                    <a href="./../visator_realty_website/index.php" class="sidebar-menu-anchor">
                    <i class="ri-logout-box-line icon-style"></i> Log Out
                    </a>
                </li>

            </ul>

        </div>
    </section>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    const currentPath = window.location.pathname;
    const links = document.querySelectorAll('.sidebar-menu-anchor');

    for (const link of links) {
        const linkPath = link.getAttribute('href');
        if (currentPath.endsWith(linkPath)) {
            link.classList.add('active');
        }
    }
});
</script> -->
</body>
</html>