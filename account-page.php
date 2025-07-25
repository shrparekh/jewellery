<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

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
                            <li><a href="index.php" class="text-main-4 link-secondary">Home</a></li>
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
                                    <a href="account-page.php" class="link-account active">
                                        <span class="text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="account-orders-empty.php" class="link-account">
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
                    <div class="col-lg-8">
                        <div class="my-acount-content account-dashboard">
                            <div class="heading">
                                <p class="hello-name">
                                    <span class="hello fw-normal h4">Hello</span>
                                    VINCENT PHAM!
                                    <span>
                                        (not
                                        <span class="name text-main">Vincent Pham</span>?
                                    </span>
                                    <a href="#" class="link text-body">Log Out</a><span>)</span>
                                </p>
                            </div>
                            <p class="notice">
                                Today is a great day to check your account page. You can check
                                <a href="account-orders.php" class="text-primary text-decoration-underline link-secondary-2">
                                    your last orders
                                </a>
                                or have a look to
                                <a href="wishlist.php" class="text-primary text-decoration-underline link-secondary-2">
                                    your wishlist
                                </a>. Or maybe you can start to shop
                                <a href="shop-left-sidebar.php" class="text-primary text-decoration-underline link-secondary-2">our
                                    latest offers
                                </a>?
                            </p>
                            <ul class="box-check-list">
                                <li>
                                    <a href="account-orders.php" class="box-check">
                                        <span class="icon">
                                            <i class="icon-dou-bag"></i>
                                        </span>
                                        <div class="text">
                                            <h4 class=" link name-type">Orders
                                                <span class="count-number">1</span>
                                            </h4>
                                            <p class="sub-type">Check the history of all your orders</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.php" class="box-check">
                                        <span class="icon">
                                            <i class="icon-hearth-2"></i>
                                        </span>
                                        <div class="text">
                                            <h4 class=" link name-type">wishlist
                                                <span class="count-number">1</span>
                                            </h4>
                                            <p class="sub-type">Check your wishlist</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="banner_V02 hover-img flex-wrap-reverse">
                                <div class="bn-content bg-linear-golden-cream-2">
                                    <h6 class="caption text-caption text-uppercase ">discount code: vemus20off</h6>
                                    <h2 class="title font-2 fw-normal"><span class="fst-italic">Unveil</span> Your Sparkle</h2>
                                    <p class="sub-title">
                                        Enjoy exclusive deals and limited-time offers—your moment to shine is now!
                                    </p>
                                    <a href="shop-default.html" class="tf-btn type-large ">
                                        Shop Now
                                        <i class="icon-arrow-right-2 fs-24"></i>
                                    </a>
                                </div>
                                <div class="bn-image img-style">
                                    <img src="images/banner/banner-1.jpg" data-src="images/banner/banner-1.jpg" alt="" class="lazyload">
                                </div>
                            </div>
                            <div class="banner_countdown-v3">
                                <div class="bn_content">
                                    <p class="text-top text-caption fw-medium">DON’T MISS OUT!</p>
                                    <h2 class="title font-2 fw-normal"><span class="fst-italic">Limited</span> Time Deal</h2>
                                    <p class="sub-title">
                                        Score exclusive discounts on our top styles! Hurry – these offers won’t last long.
                                    </p>

                                    <a href="shop-collection-list.php" class="tf-btn text-uppercase type-large">
                                        SHOP COLLECTION
                                        <i class="icon-arrow-right-3 fs-24"></i>
                                    </a>
                                </div>
                                <div class="countdown-V04">
                                    <div class="js-countdown cd-custom" data-timer="46555" data-labels="DAYs,Hours,Mins,Secs"></div>
                                </div>
                            </div>
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