<!DOCTYPE html>


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

    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

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
                            <li>
                                <p>Account</p>
                            </li>
                        </ul>
                        <h1 class="heading fw-normal text-uppercase">
                            my wishlist
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Product -->
        <div class="flat-spacing">
            <div class="container">
                <div class="wrapper-wishlist tf-grid-layout tf-col-2 md-col-3 xl-col-4">
                    <!-- Product 1 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-1.jpg" data-src="images/products/product-1.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-12.jpg" data-src="images/products/product-12.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="badge-box">
                                <span class="badge-item new">NEW IN</span>
                            </div>
                            <div class="variant-box ">
                                <div class="size-box bg-light-gray text-center">
                                    <p class="text-caption">3 sizes are available</p>
                                </div>
                            </div>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Emerald-cut Halo Engagement Ring with a Diamond Platinum Band
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$3,370.00</span>
                                <span class="price-old fw-normal">$3,899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 2 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-2.jpg" data-src="images/products/product-2.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-13.jpg" data-src="images/products/product-13.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Link Chain Bracelet
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$891.00</span>
                                <span class="price-old fw-normal">$999.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 3 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-3.jpg" data-src="images/products/product-3.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-14.jpg" data-src="images/products/product-14.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="badge-box">
                                <span class="badge-item sale">30% OFF</span>
                            </div>
                            <div class="variant-box bg-primary">
                                <div class="marquee-sale infiniteSlide" data-clone="2">
                                    <!-- clone 1 -->
                                    <p class="text-caption text-white">30% OFF</p>
                                    <i class="icon-thunder text-white"></i>
                                    <!-- clone 2 -->
                                    <p class="text-caption text-white">Selling fast</p>
                                    <i class="icon-thunder text-white"></i>
                                    <!-- clone 3 -->
                                    <p class="text-caption text-white">30% OFF</p>
                                    <i class="icon-thunder text-white"></i>
                                    <!-- clone 4 -->
                                    <p class="text-caption text-white">Selling fast</p>
                                    <i class="icon-thunder text-white"></i>
                                    <!-- clone 5 -->
                                    <p class="text-caption text-white">30% OFF</p>
                                    <i class="icon-thunder text-white"></i>
                                    <!-- clone 6 -->
                                    <p class="text-caption text-white">Selling fast</p>
                                    <i class="icon-thunder text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Sparkling Infinity Heart Clasp Snake Chain Bracelet
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$2,499.00</span>
                                <span class="price-old fw-normal">$2,899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 4 -->
                    <div class="card_product--V01 out-of-stock">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-notify-avaiable.html" class="product-img">
                                <img src="images/products/product-4.jpg" data-src="images/products/product-4.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-15.jpg" data-src="images/products/product-15.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <a href="#unavailable" data-bs-toggle="modal" class="variant-box stock bg-main link text-white">
                                <p class="text-center d-none d-md-block">Notify Me When Available</p>
                                <p class="text-center d-md-none">Notify Me</p>
                            </a>
                        </div>
                        <div class="card_product-info">
                            <a href="product-notify-avaiable.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Sparkling Infinity Heart Clasp Snake Chain Bracelet
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$773.00</span>
                                <span class="price-old fw-normal">$899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 5 -->
                    <div class="loadItem box_image--V02 hover-img">
                        <a href="#" class="box_image-image img-style">
                            <img src="images/collections/discover-1.jpg" data-src="images/collections/discover-1.jpg" alt="" class="lazyload">
                        </a>
                        <div class="box_image-content align-items-center text-center">
                            <a href="shop-left-sidebar.php" class="title h3 fw-normal font-2 text-white link-secondary">
                                <span class="fst-italic">Diamond</span> For All
                            </a>
                            <a href="shop-left-sidebar.php" class="tf-btn style-3 btn-fill-white animate-btn animate-dark">
                                <span class="fw-medium text-uppercase">discover <span class="d-none d-sm-inline">now</span></span>
                            </a>
                        </div>
                    </div>
                    <!-- Product 6 -->
                    <div class=" card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-3.jpg" data-src="images/products/product-3.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-14.jpg" data-src="images/products/product-14.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Infinite Lab-Grown Diamond Bangle
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$1,847.00</span>
                                <span class="price-old fw-normal">$2,599.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 7 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-18.jpg" data-src="images/products/product-18.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-19.jpg" data-src="images/products/product-19.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="badge-box">
                                <span class="badge-item sale">30% OFF</span>
                            </div>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Olive Leaf Band Ring
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$327.00</span>
                                <span class="price-old fw-normal">$899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 8 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-20.jpg" data-src="images/products/product-20.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-21.jpg" data-src="images/products/product-21.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Organically Shaped Heart Bangle
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$3,888.00</span>
                                <span class="price-old fw-normal">$4,899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 9 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-22.jpg" data-src="images/products/product-22.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-23.jpg" data-src="images/products/product-23.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Open Heart Bangle
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$214.00</span>
                                <span class="price-old fw-normal">$399.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 10 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-24.jpg" data-src="images/products/product-24.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-25.jpg" data-src="images/products/product-25.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Crystal Birthstone Eternity Circle Charm
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$865.00</span>
                                <span class="price-old fw-normal">$999.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 11 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-26.jpg" data-src="images/products/product-26.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-27.jpg" data-src="images/products/product-27.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Ball Bracelet
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$1,766.00</span>
                                <span class="price-old fw-normal">$2,199.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 12 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-28.jpg" data-src="images/products/product-28.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-29.jpg" data-src="images/products/product-29.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Engagement Ring in 18k Yellow Gold
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$1,583.00</span>
                                <span class="price-old fw-normal">$1,899.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 13 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-30.jpg" data-src="images/products/product-30.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-31.jpg" data-src="images/products/product-31.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="badge-box">
                                <span class="badge-item sale">30% OFF</span>
                            </div>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Wire Bangle
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$142.00</span>
                                <span class="price-old fw-normal">$599.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 14 -->
                    <div class="card_product--V01">
                        <div class="card_product-wrapper">
                            <span class="remove icon-close"></span>
                            <a href="product-default.html" class="product-img">
                                <img src="images/products/product-32.jpg" data-src="images/products/product-32.jpg" alt="Image Product"
                                    class="lazyload img-product">
                                <img src="images/products/product-33.jpg" data-src="images/products/product-33.jpg" alt="Image Product"
                                    class="lazyload img-hover">
                            </a>
                            <ul class="list-product-btn d-none d-md-flex">
                                <li>
                                    <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-shop-cart"></span>
                                        <span class="tooltip">Quick Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li class="compare">
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare" class="hover-tooltip tooltip-left box-icon">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card_product-info">
                            <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                Curb Link Bracelet
                            </a>
                            <div class="price-wrap">
                                <span class="price-new h5">$3,210.00</span>
                                <span class="price-old fw-normal">$3,599.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- Product 15 16 -->
                    <div class="loadItem wd-2-cols box_image--V02 style-2 hover-img">
                        <a href="#" class="box_image-image img-style">
                            <img src="images/collections/discover-2.jpg" data-src="images/collections/discover-2.jpg" alt="" class="lazyload">
                        </a>
                        <div class="box_image-content type-left">
                            <div class="heading">
                                <p class="fw-medium text-white text-uppercase">be love</p>
                                <a href="shop-left-sidebar.php" class="title h3 fw-normal font-2 text-white link link-secondary">
                                    Be <span class="fst-italic">Unmissable.</span>
                                </a>
                            </div>
                            <a href="shop-left-sidebar.php" class="tf-btn style-3 btn-fill-white animate-btn animate-dark">
                                <span class="fw-medium text-uppercase">discover more</span>
                            </a>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="wd-full">
                        <div class="wg-show-more">
                            <p>Showing 13 of 26 products</p>
                            <a href="#" class="tf-btn fw-medium">
                                LOAD MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product -->
        <!-- Recently -->
        <section class="s-recently d-none flat-spacing pt-0">
            <div class="container">
                <div class="sect-top">
                    <h3 class="s-title">recently viewed products</h3>
                    <div class="group-btn-slider">
                        <div class="nav-prev-swiper tf-sw-nav">
                            <i class="icon-arrow-left"></i>
                        </div>
                        <div class="nav-next-swiper tf-sw-nav">
                            <i class="icon-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="30"
                    data-space-md="20" data-space="15" data-pagination="2" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="card_product--V01">
                                <div class="card_product-wrapper">
                                    <a href="product-default.html" class="product-img">
                                        <img src="images/products/product-22.jpg" data-src="images/products/product-22.jpg" alt="Image Product"
                                            class="lazyload img-product">
                                        <img src="images/products/product-23.jpg" data-src="images/products/product-23.jpg" alt="Image Product"
                                            class="lazyload img-hover">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart-2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickAdd" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shop-cart"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card_product-info">
                                    <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                        Open Heart Bangle
                                    </a>
                                    <div class="price-wrap">
                                        <span class="price-new h5">$1,799.00</span>
                                        <span class="price-old fw-normal">$1,259.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="card_product--V01">
                                <div class="card_product-wrapper">
                                    <a href="product-default.html" class="product-img">
                                        <img src="images/products/product-24.jpg" data-src="images/products/product-24.jpg" alt="Image Product"
                                            class="lazyload img-product">
                                        <img src="images/products/product-25.jpg" data-src="images/products/product-25.jpg" alt="Image Product"
                                            class="lazyload img-hover">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart-2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shop-cart"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card_product-info">
                                    <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                        Crystal Birthstone Eternity Circle Charm
                                    </a>
                                    <div class="price-wrap">
                                        <span class="price-new h5">$2,499.00</span>
                                        <span class="price-old fw-normal">$2,899.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="card_product--V01">
                                <div class="card_product-wrapper">
                                    <a href="product-default.html" class="product-img">
                                        <img src="images/products/product-26.jpg" data-src="images/products/product-26.jpg" alt="Image Product"
                                            class="lazyload img-product">
                                        <img src="images/products/product-27.jpg" data-src="images/products/product-27.jpg" alt="Image Product"
                                            class="lazyload img-hover">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart-2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shop-cart"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card_product-info">
                                    <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                        Ball Bracelet
                                    </a>
                                    <div class="price-wrap">
                                        <span class="price-new h5">$3,199.00</span>
                                        <span class="price-old fw-normal">$2,239.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="card_product--V01">
                                <div class="card_product-wrapper">
                                    <a href="product-default.html" class="product-img">
                                        <img src="images/products/product-28.jpg" data-src="images/products/product-28.jpg" alt="Image Product"
                                            class="lazyload img-product">
                                        <img src="images/products/product-29.jpg" data-src="images/products/product-29.jpg" alt="Image Product"
                                            class="lazyload img-hover">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart-2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shop-cart"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card_product-info">
                                    <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                        Engagement Ring in 18k Yellow Gold
                                    </a>
                                    <div class="price-wrap">
                                        <span class="price-new h5">$1,399.00</span>
                                        <span class="price-old fw-normal">$979.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 5 -->
                        <div class="swiper-slide">
                            <div class="card_product--V01">
                                <div class="card_product-wrapper">
                                    <a href="product-default.html" class="product-img">
                                        <img src="images/products/product-22.jpg" data-src="images/products/product-22.jpg" alt="Image Product"
                                            class="lazyload img-product">
                                        <img src="images/products/product-23.jpg" data-src="images/products/product-23.jpg" alt="Image Product"
                                            class="lazyload img-hover">
                                    </a>
                                    <ul class="list-product-btn">
                                        <li class="wishlist">
                                            <a href="javascript:void(0);" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-heart-2"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#shoppingCart" data-bs-toggle="offcanvas" class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-shop-cart"></span>
                                                <span class="tooltip">Add to Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#quickView" data-bs-toggle="modal" class="hover-tooltip tooltip-left box-icon quickview">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                class="hover-tooltip tooltip-left box-icon">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card_product-info">
                                    <a href="product-default.html" class="name-product h5 fw-normal link text-line-clamp-2">
                                        Open Heart Bangle
                                    </a>
                                    <div class="price-wrap">
                                        <span class="price-new h5">$1,119.00</span>
                                        <span class="price-old fw-normal">$1,599.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination d-xl-none"></div>
                </div>
            </div>
        </section>
        <!-- /Recently -->
        <!-- Footer -->
        <?php include("layout/footer.php") ?>
        <!-- /Footer -->
    </div>
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
    <script src="js/shop.js"></script>

    <script src="js/main.js"></script>
</body>


</html>