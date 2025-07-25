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

    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
      
        <!-- Header -->
          <?php include("layout/header.php") ?>
        <!-- /Header -->
        <!-- Page Title -->
        <section class="flat-spacing-2 black-overlay pb-5">
            <div class="container">
                <div class="page-title type-2">
                    <div class="breadcrumbs">
                        <ul class="bread-wrap">
                            <li><a href="index.php" class="text-main-4 link-secondary">Home</a></li>
                            <li class="br-line w-12 bg-main"></li>
                            <li>
                                <p>Bracelets</p>
                            </li>
                        </ul>
                        <h1 class="heading fw-normal text-uppercase">
                            Bracelets
                            <span class="number-count">
                                26
                            </span>
                        </h1>
                    </div>
                    <div class="box-text">
                        <p class="text-main-4">
                            Discover our rings collection to find the latest addition to your jewellery box. From crown, heart and flower rings
                            adorned with clear crystals to simple beaded and wishbone styles, our rings for women collection has it all. Refine
                            your style with a  sterling silver,  14k gold-plated, 14k rose gold-plated or 14k gold ring.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
     
        <!-- Product -->
        <div class="flat-spacing pt-0">
            <span class="br-line cus-width d-block bg-line"></span>
            <div class="tf-shop-control style-2 mb_10 border-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="tf-control-filter justify-content-between pe-xxl-30">
                                <button class="tf-btn-filter h5 link">
                                    <span class="icon icon-filter d-xl-none"></span>
                                    <span class="text">FILTER</span>
                                </button>
                                <button id="reset-filter" class="btn-check-none tf-btn-line">
                                    <span class="text-body">Clear all</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tf-group-layout justify-content-end">
                                <ul class="tf-control-layout">
                                    <li class="tf-view-layout-switch sw-layout-2 d-none d-md-flex" data-value-layout="tf-col-2">
                                        <div class="item icon-grid-2">
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="tf-view-layout-switch sw-layout-3 active d-none d-md-flex" data-value-layout="tf-col-3">
                                        <div class="item icon-grid-3">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="tf-view-layout-switch sw-layout-4 d-none d-xl-flex" data-value-layout="tf-col-4">
                                        <div class="item icon-grid-4">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </li>

                                </ul>
                                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                    <div class="btn-select">
                                        <span class="text-sort-value">Best selling</span>
                                        <span class="icon icon-arrow-angle-down"></span>
                                    </div>
                                    <div class="dropdown-menu">
                                        <div class="select-item active" data-sort-value="best-selling">
                                            <span class="text-value-item">Best selling</span>
                                        </div>
                                        <div class="select-item" data-sort-value="a-z">
                                            <span class="text-value-item">Alphabetically, A-Z</span>
                                        </div>
                                        <div class="select-item" data-sort-value="z-a">
                                            <span class="text-value-item">Alphabetically, Z-A</span>
                                        </div>
                                        <div class="select-item" data-sort-value="price-low-high">
                                            <span class="text-value-item">Price, low to high</span>
                                        </div>
                                        <div class="select-item" data-sort-value="price-high-low">
                                            <span class="text-value-item">Price, high to low</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="canvas-sidebar sidebar-filter canvas-filter left pe-xxl-30">
                            <div class="canvas-wrapper">

                                <div class="canvas-header d-flex d-xl-none">
                                    <span class="title">FILTER</span>
                                    <span class="icon-close link icon-close-popup" data-bs-dismiss="offcanvas"></span>
                                </div>
                                <div class="canvas-body">
                                    <div class="apply-filter-wrap">
                                        <p class="title h6 fw-normal text-uppercase d-xl-none">Applied Filters</p>
                                        <div id="product-count-grid" class="count-text text-main-4 d-xl-none">No Filter Selected</div>
                                        <div class="meta-filter-shop">
                                            <div id="applied-filters" class="check-yes"></div>
                                        </div>
                                    </div>
                                  
                                    <div class="widget-facet">
                                        <div class="facet-title h6 fw-normal" data-bs-target="#categories" role="button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="categories">
                                            <span class="h6 fw-normal text-uppercase ">category</span>
                                            <span class="icon ic-accordion-custom"></span>
                                        </div>
                                        <div id="categories" class="collapse show">
                                            <ul class="collapse-body filter-group-check current-scrollbar">
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="bracelet">
                                                    <label for="bracelet" class="label">
                                                        <span>Bracelets</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="earring">
                                                    <label for="earring" class="label">
                                                        <span>Earrings</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="ring">
                                                    <label for="ring" class="label">
                                                        <span>Rings</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="necklace">
                                                    <label for="necklace" class="label">
                                                        <span>Necklaces</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="new-in">
                                                    <label for="new-in" class="label">
                                                        <span>New In</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="category" class="tf-check style-2" id="gift-idea">
                                                    <label for="gift-idea" class="label">
                                                        <span>Gift ideas</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title h6 fw-normal" data-bs-target="#materials" role="button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="materials">
                                            <span class="h6 fw-normal text-uppercase">Material</span>
                                            <span class="icon ic-accordion-custom"></span>
                                        </div>
                                        <div id="materials" class="collapse show">
                                            <ul class="collapse-body filter-group-check current-scrollbar">
                                                <li class="list-item">
                                                    <input type="checkbox" name="material" class="tf-check style-2" id="gold">
                                                    <label for="gold" class="label">
                                                        <span>Gold</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="material" class="tf-check style-2" id="sterling-silver">
                                                    <label for="sterling-silver" class="label">
                                                        <span>Sterling Silver</span><span class="count-wrap">[ <span class="count">20</span>
                                                            ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="material" class="tf-check style-2" id="white-gold">
                                                    <label for="white-gold" class="label">
                                                        <span>White Gold</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="material" class="tf-check style-2" id="pink-gold">
                                                    <label for="pink-gold" class="label">
                                                        <span>Pink Gold</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title h6 fw-normal" data-bs-target="#stone-color" role="button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="stone-color">
                                            <span class="h6 fw-normal text-uppercase">stone colour</span>
                                            <span class="icon ic-accordion-custom"></span>
                                        </div>
                                        <div id="stone-color" class="collapse show">
                                            <ul class="collapse-body filter-group-check current-scrollbar">
                                                <li class="list-item">

                                                    <input type="checkbox" name="color" class="tf-check style-2" id="blue">
                                                    <label for="blue" class="label">
                                                        <img src="images/products/material/dia-blue.jpg" alt="Colour" class="img-check">
                                                        <span>Blue</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="color" class="tf-check style-2" id="pink">
                                                    <label for="pink" class="label">
                                                        <img src="images/products/material/dia-pink.jpg" alt="Colour" class="img-check">
                                                        <span>Pink</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="checkbox" name="color" class="tf-check style-2" id="white">
                                                    <label for="white" class="label">
                                                        <img src="images/products/material/dia-white.jpg" alt="Colour" class="img-check">
                                                        <span>White</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title h6 fw-normal" data-bs-target="#price" role="button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="price">
                                            <span class="h6 fw-normal text-uppercase">price</span>
                                            <span class="icon ic-accordion-custom"></span>
                                        </div>
                                        <div id="price" class="collapse show">
                                            <ul class="collapse-body filter-group-check current-scrollbar">
                                                <li class="list-item">
                                                    <input type="radio" name="price" class="tf-check style-2" id="u-500">
                                                    <label for="u-500" class="label">
                                                        <span>Under $500</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="radio" name="price" class="tf-check style-2" id="u-1000">
                                                    <label for="u-1000" class="label">
                                                        <span>Under $1000</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="radio" name="price" class="tf-check style-2" id="u-2000">
                                                    <label for="u-2000" class="label">
                                                        <span>Under $2000</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                                <li class="list-item">
                                                    <input type="radio" name="price" class="tf-check style-2" id="up-2000">
                                                    <label for="up-2000" class="label">
                                                        <span>Over $2000</span><span class="count-wrap">[ <span class="count">20</span> ]</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="widget-facet">
                                        <div class="facet-title h6 fw-normal" data-bs-target="#size" role="button" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="size">
                                            <span class="h6 fw-normal text-uppercase">size</span>
                                            <span class="icon ic-accordion-custom"></span>
                                        </div>
                                        <div id="size" class="collapse show">
                                            <div class="collapse-body filter-size-box flat-check-list">
                                                <div class="check-item size-item size-check"><span class="count size">5</span></div>
                                                <div class="check-item size-item size-check"><span class="count size">6</span></div>
                                                <div class="check-item size-item size-check"><span class="count size">7</span></div>
                                                <div class="check-item size-item size-check"><span class="count size">8</span></div>
                                                <div class="check-item size-item size-check"><span class="count size">9</span></div>
                                                <div class="check-item size-item size-check disabled"><span class="count size">10</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="canvas-bottom d-xl-none">
                                    <button id="reset-filter" class=" tf-btn btn-reset">
                                        <span class=" fw-medium">CLEAR ALL</span>
                                    </button>
                                    <button type="button" class="tf-btn btn-fill animate-btn" data-bs-dismiss="offcanvas">
                                        <span class=" fw-medium">APPLY [100]</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="wrapper-control-shop gridLayout-wrapper">
                            <div class="wrapper-shop tf-grid-layout tf-col-3" id="gridLayout">
                                <!-- Product 1 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="ring"
                                    data-material="sterling-silver" data-size="6">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/jewellery/products1.png" data-src="images/jewellery/products1.png" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/jewellery/products1.png" data-src="images/jewellery/products1.png" alt="Image Product"
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Emerald-cut Halo Engagement Ring with a Diamond Platinum Band
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$3,370.00</span>
                                            <span class="price-old fw-normal">$3,899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="white-gold" data-size="5">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/jewellery/products3.png" data-src="images/jewellery/products3.png" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/jewellery/products3.png" data-src="images/jewellery/products3.png" alt="Image Product"
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Link Chain Bracelet
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$891.00</span>
                                            <span class="price-old fw-normal">$999.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="sterling-silver" data-size="9">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/products/product-3.jpg" data-src="images/products/product-3.jpg" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/products/product-14.jpg" data-src="images/products/product-14.jpg" alt="Image Product"
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Sparkling Infinity Heart Clasp Snake Chain Bracelet
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$2,499.00</span>
                                            <span class="price-old fw-normal">$2,899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="loadItem card_product--V01 grid out-of-stock" data-availability="Out of stock" data-category="bracelet"
                                    data-size="8">
                                    <div class="card_product-wrapper">
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
                           
                                <!-- Product 6 -->
                                <div class=" loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="sterling-silver" data-size="6">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/products/product-16.jpg" data-src="images/products/product-16.jpg" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/products/product-17.jpg" data-src="images/products/product-17.jpg" alt="Image Product"
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Infinite Lab-Grown Diamond Bangle
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$1,847.00</span>
                                            <span class="price-old fw-normal">$2,599.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 7 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="ring"
                                    data-material="sterling-silver" data-size="6">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/products/product-18.jpg" data-src="images/products/product-18.jpg" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/products/product-19.jpg" data-src="images/products/product-19.jpg" alt="Image Product"
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
                                        <div class="badge-box">
                                            <span class="badge-item sale">30% OFF</span>
                                        </div>
                                    </div>
                                    <div class="card_product-info">
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Olive Leaf Band Ring
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$327.00</span>
                                            <span class="price-old fw-normal">$899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 8 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="gold" data-size="9">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/products/product-20.jpg" data-src="images/products/product-20.jpg" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/products/product-21.jpg" data-src="images/products/product-21.jpg" alt="Image Product"
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Organically Shaped Heart Bangle
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$3,888.00</span>
                                            <span class="price-old fw-normal">$4,899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 9 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="sterling-silver" data-size="5">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Open Heart Bangle
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$214.00</span>
                                            <span class="price-old fw-normal">$399.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 10 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="white-gold" data-size="7">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Crystal Birthstone Eternity Circle Charm
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$865.00</span>
                                            <span class="price-old fw-normal">$999.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 11 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="sterling-silver" data-size="8">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Ball Bracelet
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$1,766.00</span>
                                            <span class="price-old fw-normal">$2,199.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 12 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="ring"
                                    data-material="pink-gold" data-size="6">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
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
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Engagement Ring in 18k Yellow Gold
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$1,583.00</span>
                                            <span class="price-old fw-normal">$1,899.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 13 -->
                                <div class="loadItem card_product--V01 grid" data-availability="In stock" data-category="bracelet"
                                    data-material="white-gold" data-size="9">
                                    <div class="card_product-wrapper">
                                        <a href="product-default.php" class="product-img">
                                            <img src="images/products/product-30.jpg" data-src="images/products/product-30.jpg" alt="Image Product"
                                                class="lazyload img-product">
                                            <img src="images/products/product-31.jpg" data-src="images/products/product-31.jpg" alt="Image Product"
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
                                        <div class="badge-box">
                                            <span class="badge-item sale">30% OFF</span>
                                        </div>
                                    </div>
                                    <div class="card_product-info">
                                        <a href="product-default.php" class="name-product h5 fw-normal link text-line-clamp-2">
                                            Wire Bangle
                                        </a>
                                        <div class="price-wrap">
                                            <span class="price-new h5">$142.00</span>
                                            <span class="price-old fw-normal">$599.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 15 16 -->
                                <!-- <div class="loadItem tempo wd-2-cols tempo box_image--V02 style-2 hover-img">
                                    <a href="#" class="box_image-image img-style">
                                        <img src="images/collections/discover-2.jpg" data-src="images/collections/discover-2.jpg" alt=""
                                            class="lazyload">
                                    </a>
                                    <div class="box_image-content type-left">
                                        <div class="heading">
                                            <p class="fw-medium text-white text-uppercase">be love</p>
                                            <a href="#" class="title h2 fw-normal font-2 text-white link link-secondary">
                                                Be <span class="fst-italic">Unmissable.</span>
                                            </a>
                                        </div>
                                        <a href="#" class="tf-btn style-3 btn-fill-white animate-btn animate-dark">
                                            <span class="fw-medium text-uppercase">discover more</span>
                                        </a>
                                    </div>
                                </div> -->
                                <!-- Pagination -->
                                <div class="wd-full tempo">
                                    <div class="wg-pagination">
                                        <a href="shop-left-sidebar.php" class="tf-btn-line style-line-2">
                                            <span class="text-body">PREV</span>
                                        </a>
                                        <ul class="pagition-list">
                                            <li>
                                                <p class="pagination-item active">1</p>
                                            </li>
                                            <li><a href="shop-left-sidebar.php" class="pagination-item link">2</a></li>
                                            <li><a href="shop-left-sidebar.php" class="pagination-item link">3</a></li>
                                        </ul>
                                        <a href="shop-left-sidebar.php" class="tf-btn-line style-line-2">
                                            <span class="text-body">NEXT</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Product -->
        <!-- Icon Box -->
        <div class="flat-spacing-8 bg-main">
            <div class="container">
                <div class="tf-swiper swiper sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="80"
                    data-space-md="30" data-space="15" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="box_icon--V01 style-white wow fadeInLeft">
                                <span class="icon">
                                    <i class="icon-box text-primary"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title">Free Shipping</h4>
                                    <p class="text">Enjoy free shipping on all orders</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="box_icon--V01 style-white wow fadeInLeft" data-wow-delay="0.1s">
                                <span class="icon">
                                    <i class="icon-credit-card text-primary"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title">Flexible Payment</h4>
                                    <p class="text">Pay with Multiple Credit Cards</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="box_icon--V01 style-white wow fadeInLeft" data-wow-delay="0.2s">
                                <span class="icon">
                                    <i class="icon-return text-primary"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title">14 - Days Return</h4>
                                    <p class="text">Free return/exchange within 30 days</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="box_icon--V01 style-white wow fadeInLeft" data-wow-delay="0.3s">
                                <span class="icon">
                                    <i class="icon-headphone text-primary"></i>
                                </span>
                                <div class="content">
                                    <h4 class="title">Premium Support</h4>
                                    <p class="text">Enjoy our premium support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default style-white tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Icon Box -->
        <!-- Footer -->
         <?php include("layout/footer.php") ?>
        <!-- /Footer -->
        <div class="overlay-filter" id="overlay-filter"></div>
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