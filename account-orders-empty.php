

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
        content="">

    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="icon/icomoon/style.css">
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/short-logo.svg">
    <link rel="apple-touch-icon-precomposed" href="images/logo/short-logo.svg">

</head>

<body>

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right-2"></span>
    </button>

    <div id="wrapper">
        <!-- Top Bar-->
       
        <!-- /Top Bar -->
        <!-- Header -->
         <?php include("layout/header.php") ?>
        <!-- /Header -->
        <!-- Page Title -->
        <section class="flat-spacing-2 black-overlay pb-0">
            <div class="container">
                <div class="page-title">
                    <div class="breadcrumbs">
                        <ul class="bread-wrap">
                            <li><a href="index.html" class="text-main-4 link-secondary">Home</a></li>
                            <li class="br-line w-12 bg-main"></li>
                            <li>Account</li>
                        </ul>
                        <h1 class="heading fw-normal text-uppercase">
                            my account
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Account -->
        <div class="flat-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar-account-wrap sidebar-content-wrap sticky-top d-lg-block d-none">
                            <ul class="my-account-nav">
                                <li>
                                    <a href="account-page.php" class="link-account ">
                                        <span class="text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="account-orders.php" class="link-account active">
                                        <span class="text">My Orders</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php" class="link-account">
                                        <span class="text">My Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="account-addresses.php" class="link-account">
                                        <span class="text">Addresses</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="account-details.php" class="link-account">
                                        <span class="text">Detail</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php" class="link-account">
                                        <span class="text">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex justify-content-center">
                        <div class="my-acount-content account-order empty">
                            <div class="ic-img">
                                <img src="images/section/empty-cart.svg" alt="Emty Cart">
                            </div>
                            <p class="title text-lg-2">You haven’t placed any order yet</p>
                            <p class="sub-title">It’s time to make your first order</p>
                            <a href="account-orders.html" class="tf-btn fw-medium btn-out-line">
                                SHOPPING
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Account -->
        <!-- Footer -->
         <?php include("layout/footer.php") ?>
        <!-- /Footer -->
    </div>
    <!-- Button Account Sidebar -->
    <div class="btn-sidebar-mb d-lg-none left">
        <button data-bs-toggle="offcanvas" data-bs-target="#mbSidebar">
            <i class="icon icon-sidebar"></i>
        </button>
    </div>
    <!-- /Button Account Sidebar -->
    <!-- Account Sidebar-->
    <div class="offcanvas offcanvas-start canvas-sidebar" id="mbSidebar">
        <div class="canvas-wrapper">
            <div class="canvas-header">
                <span class="title">SIDEBAR</span>
                <span class="icon-close link icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="canvas-body sidebar-mobile-append blog-sidebar"></div>
        </div>
    </div>
    <!-- /Account Sidebar -->
      <?php include("layout/side-menu.php") ?>
    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/lazysize.min.js"></script>
    <script src="js/count-down.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/infinityslide.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/SplitText.min.js"></script>


    <script src="js/main.js"></script>
</body>


</html>