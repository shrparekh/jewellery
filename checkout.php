<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="author" content="themesflat.com">
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
                            <li>Cart</li>
                        </ul>
                        <h1 class="heading fw-normal text-uppercase">
                            checkout
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Page Title -->
        <!-- Checkout -->
        <section class="flat-spacing">
            <div class="container">
                <div class="s-checkout flex-xl-nowrap">
                    <div class="left-col">
                        <div class="s-wrap">
                            <form class="form-checkout-cart-main style-border">
                                <div class="box-ip-checkout">
                                    <h4 class="checkout-title">DELIVERY</h4>
                                    <div class="form-content-2">
                                        <div class="cols tf-grid-layout sm-col-2">
                                            <fieldset class="tf-field-2">
                                                <input class="tf-input" type="text" value="Vincent" placeholder="">
                                                <label class="tf-lable">First name</label>
                                            </fieldset>
                                            <fieldset class="tf-field-2">
                                                <input class="tf-input" type="text" placeholder="">
                                                <label class="tf-lable">Last name</label>
                                            </fieldset>
                                        </div>
                                        <fieldset class="tf-field-2">
                                            <input class="tf-input" type="text" placeholder="">
                                            <label class="tf-lable">Country</label>
                                        </fieldset>
                                        <fieldset class="tf-field-2">
                                            <input class="tf-input" type="text" placeholder="">
                                            <label class="tf-lable">Address</label>
                                        </fieldset>
                                        <fieldset class="tf-field-2">
                                            <input class="tf-input" type="text" placeholder="">
                                            <label class="tf-lable">Apartment, suite, etc (optional)</label>
                                        </fieldset>
                                        <div class="cols tf-grid-layout sm-col-2 md-col-3">
                                            <fieldset class="tf-field-2">
                                                <input class="tf-input" type="text" placeholder="">
                                                <label class="tf-lable">City</label>
                                            </fieldset>
                                            <fieldset class="tf-field-2">
                                                <!-- <input class="tf-input" type="text" placeholder="">
                                                <label class="tf-lable">State</label> -->
                                                <div class="tf-select">
                                                    <select class="w-100" id="shipping-country-form" name="address[country]" data-default="">
                                                        <option value="Australia"
                                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                                            Australia</option>
                                                        <option value="Austria" data-provinces='[]'>Austria</option>
                                                        <option value="Belgium" data-provinces='[]'>Belgium</option>
                                                        <option value="Canada" data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                                        </option>
                                                        <option value="Czech Republic" data-provinces='[]'>Czechia</option>
                                                        <option value="Denmark" data-provinces='[]'>Denmark</option>
                                                        <option value="Finland" data-provinces='[]'>Finland</option>
                                                        <option value="France" data-provinces='[]'>France</option>
                                                        <option value="Germany" data-provinces='[]'>Germany</option>
                                                        <option selected value="United States"
                                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                                            United States</option>
                                                        <option value="United Kingdom"
                                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                                            United Kingdom</option>
                                                        <option value="India" data-provinces='[]'>India</option>
                                                        <option value="Japan" data-provinces='[]'>Japan</option>
                                                        <option value="Mexico" data-provinces='[]'>Mexico</option>
                                                        <option value="South Korea" data-provinces='[]'>South Korea</option>
                                                        <option value="Spain" data-provinces='[]'>Spain</option>
                                                        <option value="Italy" data-provinces='[]'>Italy</option>
                                                        <option value="Vietnam"
                                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                                            Vietnam</option>
                                                    </select>
                                                </div>
                                            </fieldset>
                                            <fieldset class="tf-field-2">
                                                <input class="tf-input" type="text" data-opend-focus placeholder="" id="zipcode" name="address[zip]"
                                                    value="">
                                                <label class="tf-lable">Zipcode/Postal</label>
                                            </fieldset>
                                        </div>
                                        <fieldset class="tf-field-2">
                                            <input class="tf-input" type="number" placeholder="">
                                            <label class="tf-lable">Phone</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="box-ip-contact">
                                    <h4 class="checkout-title">
                                        CONTACT INFORMATION
                                        <a href="#log" data-bs-toggle="modal" class="tf-btn-line">
                                            Log in
                                        </a>
                                    </h4>
                                    <fieldset class="tf-field-2">
                                        <input class="tf-input" type="text" placeholder="">
                                        <label class="tf-lable">Email or phone number</label>
                                    </fieldset>
                                </div>
                                <div class="box-ip-shipping">
                                    <h4 class="checkout-title">
                                        SHIPPING METHOD
                                        <a href="#log" data-bs-toggle="modal" class="tf-btn-line">
                                            Log in
                                        </a>
                                    </h4>
                                    <div class="form-content-2">
                                        <label for="freeship" class="check-ship">
                                            <input type="radio" id="freeship" class="tf-check-rounded" name="checkshipping">
                                            <span class="text">
                                                <span>Free Shipping (Estimate in 7/10 - 10/10/2025)</span>
                                                <span class="price">$00.00</span>
                                            </span>
                                        </label>
                                        <label for="express-ship" class="check-ship">
                                            <input type="radio" id="express-ship" class="tf-check-rounded" name="checkshipping">
                                            <span class="text">
                                                <span>Express Shipping (Estimate in 4/10 - 5/10/2025)</span>
                                                <span class="price">$10.00</span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="box-ip-payment">
                                    <h4 class="checkout-title mb_12">PAYMENT</h4>
                                    <p class="sub-title text-main-4">
                                        All transactions are secure and encrypted.
                                    </p>
                                    <fieldset class="payment-item mb_12">
                                        <label for="bank-transfer" class="check-payment">
                                            <input type="checkbox" id="bank-transfer" class="tf-check-rounded" name="bank-transfer">
                                            <span class="text-payment">Direct bank transfer</span>
                                        </label>
                                    </fieldset>
                                    <p class="mb_15 text-main-4">Make your payment directly into our bank account. Please use
                                        your Order ID as the payment reference. Your order will not be shipped until the
                                        funds have cleared in our account.
                                    </p>
                                    <div class="payment-method-box" id="payment-method-box">
                                        <div class="payment-item">
                                            <label for="delivery" class="check-payment collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#delivery-payment" aria-controls="delivery-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="delivery">
                                                <span class="pay-title">Cash on delivery</span>
                                            </label>
                                            <div id="delivery-payment" class="collapse" data-bs-parent="#payment-method-box"></div>
                                        </div>
                                        <div class="payment-item">
                                            <label for="credit-card" class="check-payment" data-bs-toggle="collapse"
                                                data-bs-target="#credit-card-payment" aria-controls="credit-card-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="credit-card" checked>
                                                <span class="pay-title">Credit card</span>
                                            </label>
                                            <div id="credit-card-payment" class="collapse show" data-bs-parent="#payment-method-box">
                                                <div class="payment-body form-content-2">
                                                    <fieldset class="tf-field-2 ip-card">
                                                        <input class="tf-input" type="text" placeholder="">
                                                        <label class="tf-lable">Card number</label>
                                                        <img class="card-logo" width="41" height="12" src="images/payment/visa-3.svg" alt="card">
                                                    </fieldset>
                                                    <div class="cols tf-grid-layout sm-col-2">
                                                        <fieldset class="tf-field-2">
                                                            <input class="tf-input" type="text" placeholder="">
                                                            <label class="tf-lable">Expiration date (MM/YY) </label>
                                                        </fieldset>
                                                        <fieldset class="tf-field-2">
                                                            <input class="tf-input" type="text" placeholder="">
                                                            <label class="tf-lable">Sercurity code</label>
                                                        </fieldset>
                                                    </div>
                                                    <fieldset class="tf-field-2">
                                                        <input class="tf-input" type="text" placeholder="">
                                                        <label class="tf-lable">Name on card</label>
                                                    </fieldset>
                                                    <div class="checkbox-wrap">
                                                        <input id="this-address" type="checkbox" class="tf-check style-4 p-0" required="">
                                                        <label for="this-address">Use shipping address as billing address</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="payment-item">
                                            <label for="paypal" class="check-payment collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#paypal-payment" aria-controls="paypal-payment">
                                                <input type="radio" name="payment-method" class="tf-check-rounded" id="paypal">
                                                <span class="pay-title">PayPal
                                                    <img class="card-logo" width="78" height="20" src="images/payment/paypal-2.svg" alt="apple">
                                                </span>
                                            </label>
                                            <div id="paypal-payment" class="collapse" data-bs-parent="#payment-method-box"></div>
                                        </div>
                                    </div>
                                    <p class="text-main-4">
                                        Your personal data will be used to process your order, support your experience throughout this website, and
                                        for
                                        other purposes described in our
                                        <a href="privacy.html" class="fw-medium text-decoration-underline link">privacy policy.</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right-col sticky-top">
                        <div class="tf-page-cart-sidebar">
                            <h4 class="checkout-title">YOUR CART</h4>
                            <ul class="list-order-product">
                                <li class="order-item">
                                    <div class="content">
                                        <div class="img-product">
                                            <img src="images/products/product-1.jpg" alt="" class="prd">
                                            <span class="text-caption quantity">2</span>
                                        </div>
                                        <div class="info">
                                            <p class="name">Crystal Birthstone Eternity Circle
                                                <br>
                                                Charm
                                            </p>
                                            <span class="variant">Rose Gold / 50</span>
                                        </div>
                                    </div>
                                    <h6 class="price">$260.00</h6>
                                </li>
                                <li class="order-item">
                                    <div class="content">
                                        <div class="img-product">
                                            <img src="images/products/product-2.jpg" alt="" class="prd">
                                            <span class="text-caption quantity">2</span>
                                        </div>
                                        <div class="info">
                                            <p class="name">Ball Bracelet</p>
                                            <span class="variant">Rose Gold / 50</span>
                                        </div>
                                    </div>
                                    <h6 class="price">$260.00</h6>
                                </li>
                                <li class="order-item">
                                    <div class="content">
                                        <div class="img-product">
                                            <img src="images/products/product-3.jpg" alt="" class="prd">
                                            <span class="text-caption quantity">2</span>
                                        </div>
                                        <div class="info">
                                            <p class="name">Engagement Ring in 18k Yellow Gold</p>
                                            <span class="variant">Rose Gold / 50</span>
                                        </div>
                                    </div>
                                    <h6 class="price">$260.00</h6>
                                </li>
                            </ul>
                            <span class="br-line"></span>
                            <ul class="list-total">
                                <li class="total-item">
                                    <span>SUBTOTAL:</span>
                                    <span>$780.00 USD</span>
                                </li>
                                <li class="total-item">
                                    <span>DISCOUNT:</span>
                                    <span>-$78.00 USD</span>
                                </li>
                                <li class="total-item">
                                    <span>SHIPPING:</span>
                                    <span>$10.00 USD</span>
                                </li>
                                <li class="total-item">
                                    <span>TAXES:</span>
                                    <span>$7.00 USD</span>
                                </li>
                            </ul>
                            <span class="br-line"></span>
                            <h4 class="last-total d-flex justify-content-between">
                                <span>SUBTOTAL:</span>
                                <span class="total-price-order">$719.00 USD</span>
                            </h4>
                            <a href="thank-you.php" class="tf-btn btn-fill fw-medium animate-btn w-100">
                                Place order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Checkout -->
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
    <script src="js/gsap.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/SplitText.min.js"></script>


    <script src="js/main.js"></script>
</body>


</html>