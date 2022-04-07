<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>cPanel Web Hosting Company - Web Hosting Services | CastHost</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CastHost">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="title" content="cPanel Web Hosting Company - Web Hosting Services | CastHost"/>
    <meta name="description" content="Get the most secure and affordable cPanel web hosting services for businesses of all sizes. We provide Reliable web hosting services with a plethora of features.">
        <!-- favicon icon -->
 <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
     
</head>

<body data-mobile-nav-style="classic">
     <!-- start header -->
     <?php include('header.php');?>
     <!-- end header -->
    <div class="main-content" style="margin-bottom: 460.938px;">
        <!-- start page title -->
        <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('./images/webp/cpanelbanner.webp');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">cPanel Web Hosting </h1>
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Most Trusted cPanel Web Hosting Company</h2>
                    </div>
                    <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section id="down-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 sm-margin-30px-bottom">
                        <img class="border-radius-5px" src="./images/webp/cpanelservice.webp" alt="" />
                        <!-- <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large absolute-middle-center">
                        <span>
                            <span class="video-icon bg-gradient-fast-blue-purple">
                                <i class="icon-simple-line-control-play text-white"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-gradient-fast-blue-purple opacity-7"></span>
                        <span class="video-icon-sonar-afr bg-gradient-fast-blue-purple"></span>
                        </span>
                        </span>
                        </span>
                    </a> -->
                    </div>
                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">cPanel Web Hosting Made Simple With CastHost </h5>
                        <p class="w-85 lg-w-90">Get the most secure and affordable cPanel web hosting services for businesses of all sizes. Improved website performance and speed are some of the benefits you get by choosing our web hosting service. Our service comes with a cPanel
                            control panel that allows you to easily manage your hosting account.
                        </p>
                        <div class="btn-dual margin-15px-top d-inline-block">
                            <a href="#pricinghome" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Start Hosting<span class="bg-white"></span></a>
                            <a href="#features" class="btn btn-medium btn-transparent-dark-gray btn-slide-right-bg xs-no-margin">View Features<span class="bg-extra-dark-gray"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="padding-40px-top md-no-padding-top" id="pricinghome">
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">cPanel Hosting Pricing</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We have different packages to meet your needs</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10 col-lg-11 tab-style-04">
                        <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font margin-7-half-rem-bottom sm-margin-20px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link active" data-toggle="tab" href="#monthly-tab">Monthly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#quarterly-tab">Quarterly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#semiannually-tab">Semi Annually</a><span class="tab-bg-active bg-fast-blue"></span></li>
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#yearly-tab">Yearly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">

                    <?php
                        try {
                            $product_data = "whmcs/products.json";
                            $jsondata = file_get_contents($product_data);
                            $priceList = json_decode($jsondata);
                            foreach ($priceList->product as $dkey => $products) {
                                $products = json_decode(json_encode($products), true);
                                $product_id = $products['pid'];

                                if ($product_id == 81) {
                                    $pricing = json_decode(json_encode($products), true);
                                    $price_starter_monthly = $pricing['pricing']['USD']['monthly'];
                                    $price_starter_quarterly = $pricing['pricing']['USD']['quarterly'];
                                    $price_starter_semiannually = $pricing['pricing']['USD']['semiannually'];
                                    $price_starter_annually = $pricing['pricing']['USD']['annually'];
                                }
                                if ($product_id == 82) {
                                    $pricing = json_decode(json_encode($products), true);
                                    $price_medium_monthly = $pricing['pricing']['USD']['monthly'];
                                    $price_medium_quarterly = $pricing['pricing']['USD']['quarterly'];
                                    $price_medium_semiannually = $pricing['pricing']['USD']['semiannually'];
                                    $price_medium_annually = $pricing['pricing']['USD']['annually'];
                                }
                                if ($product_id == 83) {
                                    $pricing = json_decode(json_encode($products), true);
                                    $price_large_monthly = $pricing['pricing']['USD']['monthly'];
                                    $price_large_quarterly = $pricing['pricing']['USD']['quarterly'];
                                    $price_large_semiannually = $pricing['pricing']['USD']['semiannually'];
                                    $price_large_annually = $pricing['pricing']['USD']['annually'];
                                }
                                if ($product_id == 159) {
                                    $pricing = json_decode(json_encode($products), true);
                                    $price_unlimited_monthly = $pricing['pricing']['USD']['monthly'];
                                    $price_unlimited_quarterly = $pricing['pricing']['USD']['quarterly'];
                                    $price_unlimited_semiannually = $pricing['pricing']['USD']['semiannually'];
                                    $price_unlimited_annually = $pricing['pricing']['USD']['annually'];
                                }
                            }
                        } catch (Exception $e) {
                            echo "error";
                        }
                    ?>

                    <div id="monthly-tab" class="tab-pane fade in active show">
                        <div class="row row-cols-1 row-cols-md-4 align-items-center">
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Starter plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Data-Storage icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_starter_monthly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">1000 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=81&billingcycle=monthly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Medium plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Big-Data icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_medium_monthly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">2500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=82&billingcycle=monthly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn z-index-1" style="visibility: visible; animation-name: fadeIn;">
                                <!-- start pricing table -->
                                <div class="pricing-table pricing-popular bg-white box-shadow-large border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-extra-dark-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half">Large plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-60px-tb">
                                        <i class="line-icon-Server-2 icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_large_monthly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">30 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">20</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=83&billingcycle=monthly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 wow animate__fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Unlimited plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Control icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_unlimited_monthly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited  </span> MySQL Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Addon Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Parked Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=159&billingcycle=quarterly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                        </div>
                    </div>
                    <div id="quarterly-tab" class="tab-pane fade">
                        <div class="row row-cols-1 row-cols-md-4 align-items-center">
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Starter plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Data-Storage icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_starter_quarterly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">1000 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=81&billingcycle=quarterly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Medium plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Big-Data icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_medium_quarterly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">2500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=82&billingcycle=quarterly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn z-index-1" style="visibility: visible; animation-name: fadeIn;">
                                <!-- start pricing table -->
                                <div class="pricing-table pricing-popular bg-white box-shadow-large border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-extra-dark-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half">Large plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-60px-tb">
                                        <i class="line-icon-Server-2 icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_large_quarterly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">30 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">20</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=83&billingcycle=quarterly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 wow animate__fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Unlimited plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Control icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_unlimited_quarterly; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited  </span> MySQL Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Addon Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Parked Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=159&billingcycle=quarterly">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                        </div>
                    </div>
                    <div id="semiannually-tab" class="tab-pane fade">
                        <div class="row row-cols-1 row-cols-md-4 align-items-center">
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Starter plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Data-Storage icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_starter_semiannually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">1000 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=81&billingcycle=semiannually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Medium plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Big-Data icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$<?php echo $price_medium_semiannually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">2500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=82&billingcycle=semiannually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn z-index-1" style="visibility: visible; animation-name: fadeIn;">
                                <!-- start pricing table -->
                                <div class="pricing-table pricing-popular bg-white box-shadow-large border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-extra-dark-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half">Large plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-60px-tb">
                                        <i class="line-icon-Server-2 icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_large_semiannually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">30 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">20</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=83&billingcycle=semiannually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 wow animate__fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Unlimited plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Control icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_unlimited_semiannually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited  </span> MySQL Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Addon Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Parked Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=159&billingcycle=semiannually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                        </div>
                    </div>
                    <div id="yearly-tab" class="tab-pane fade">
                        <div class="row row-cols-1 row-cols-md-4 align-items-center">
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Starter plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Data-Storage icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_starter_annually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">1000 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=81&billingcycle=annually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Medium plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Big-Data icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_medium_annually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">2500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=82&billingcycle=annually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn z-index-1" style="visibility: visible; animation-name: fadeIn;">
                                <!-- start pricing table -->
                                <div class="pricing-table pricing-popular bg-white box-shadow-large border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-extra-dark-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half">Large plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-60px-tb">
                                        <i class="line-icon-Server-2 icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_large_annually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">30 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">20</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=83&billingcycle=annually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                            <div class="col pricing-table-style-02 text-center px-md-0 wow animate__fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <!-- start pricing table -->
                                <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                    <!-- start pricing header -->
                                    <div class="pricing-header bg-light-gray padding-20px-tb">
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Unlimited plan</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <i class="line-icon-Control  icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_unlimited_annually; ?></h4>
                                        <ul class="list-style-03">
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited  </span> MySQL Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Addon Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Parked Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                             
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li>
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=159&billingcycle=annually">Register now</a>
                                    </div>
                                    <!-- end pricing footer -->
                                </div>
                                <!-- end pricing table -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="bg-light-gray wow animate__fadeIn" id="features">
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center  margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Our Web Hosting Service Offerings </span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Reliable web hosting service with a plethora of features to offer</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Server icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Free cPanel</span>
                                <p>Control your hosting account easily with a cPanel. Having a cPanel lets you effectively manage all complex server processes via a user-friendly admin interface.</p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-URL-Window icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">Addon Domains </span>
                                <p>Managing multiple hosting accounts for every website can be a challenging task. That is why we offer you add-on domain feature as a part of the hosting plan to meet your requirements. </p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Folder-Cloud icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Unlimited FTP Accounts</span>
                                <p>Securely upload bulk files, images, and much more to your directory with the help of an FTP client. By choosing our web hosting service, you get unlimited FTP accounts.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Lock icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Secure Email Accounts</span>
                                <p>Create and manage hosting email accounts using webmail clients (POP) and IMAP. Choosing our web hosting plan helps you to make the most out of professional email service. </p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Big-Data icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">MySQL Database</span>
                                <p>All our cPanel web hosting plans comes up with MySQL databases which can be managed easily using phpMyAdmin in cPanel. Data security, high uptime are some of the advantages of using MySQL databases.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                        <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Data-Refresh icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Data Backups </span>
                                <p>Regularly backup your website and database files with the help of the automated backup service we offer. Regular data backup helps ensure data protection in case of any unplanned scenarios
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-5px"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 sm-margin-30px-bottom">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0">We keep your business up and running every time of the day!
                        </h5>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1 col-md-7">
                        <div class="row row-cols-1 row-cols-sm-2">
                            <!-- start counter item -->
                            <div class="col counter-style-01 last-paragraph-no-margin">
                                <h5 class="counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2000" data-speed="7000">24/7</h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Monitoring </span>
                                <p class="w-85 md-w-100">We continuously monitor our network for any issues and get them resolved instantly</p>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col counter-style-01 last-paragraph-no-margin xs-margin-30px-bottom">
                                <h5 class=" counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="05" data-speed="7000">99 <span>%</span></h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Uptime</span>
                                <p class="w-85 md-w-100">We guarantee to keep your server up and running 24/7 under all conditions. </p>
                            </div>
                            <!-- end counter item -->

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="w-100 h-1px bg-medium-gray margin-7-rem-top margin-8-rem-bottom sm-margin-5-rem-tb"></div>
                    </div>
                </div>
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center  margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Why Choose Us? </span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half"> Benefits of CastHost as Your cPanel Web Hosting Company</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <div class="col md-margin-30px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Headset icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Reliable Support  </span>
                                <p>Have any concerns or issues related to web hosting? We are available 24/7 to assist you in solving all the hosting issues you face.
                                </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="col md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Money-Bag icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Affordable Plans  </span>
                                <p>We offer advanced and reliable cPanel web hosting services that are affordable to businesses of all sizes.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="col xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Lock-2 icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Security</span>
                                <p>We make sure to keep your server safe and secure by preventing any form of unauthorized access. </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="col wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Monitor-Laptop icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Feature-Rich</span>
                                <p>All our hosting plans are supported by a plethora of features that add value to the service we provide. </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->




        <!-- start section -->
        <section class="parallax one-half-screen md-h-450px sm-h-350px" data-parallax-background-ratio="0.5" style="background: url('./images/webp/cpanelbannerlg.webp')">
        </section>
        <!-- end section -->

        <!--start section-->
        <section class="big-section bg-light-gray wow animate__fadeIn overflow-visible" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="overlap-section">
                    <div class="z-index-6 bg-white box-shadow-small border-radius-5px padding-60px-tb md-padding-40px-all xs-padding-20px-lr">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-lg-4 offset-lg-1 col-md-6 text-center text-md-left sm-margin-20px-bottom">
                                <h6 class="alt-font font-weight-500 text-extra-dark-gray w-85 mb-0 lg-w-100">Best Radio Stream Hosting Services </h6>
                            </div>
                            <div class="col-12 col-xl-3 offset-xl-3 col-lg-4 offset-lg-2 col-md-6 text-center text-md-right">
                                <a href="https://casthost.net/stream_packages.php" class="btn btn-medium btn-round-edge btn-gradient-fast-blue-purple">Start Your Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center margin-5-rem-top  margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Our Technologies</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We offer unmatched hosting services, by making use of numerous technologies. </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font font-weight-500 margin-7-rem-bottom md-margin-5-rem-bottom sm-margin-20px-bottom">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#shoutcast">ShoutCast</a><span class="tab-border bg-gradient-fast-blue-purple"></span></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#icecast">IceCast</a><span class="tab-border bg-gradient-fast-blue-purple"></span></li>
                        </ul>
                        <!-- end tab navigation -->
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="shoutcast" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-right sm-margin-40px-bottom">
                                        <img src="images/webp/shoutcast.webp" alt="" data-no-retina="">
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-left">
                                        <span class="alt-font text-medium text-gradient-fast-blue-purple text-uppercase font-weight-500 margin-15px-bottom d-inline-block">ShoutCast</span>
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom">ShoutCast Server Hosting</h5>
                                        <p class="w-85 lg-w-100">ShoutCast Hosting is used for internet radio broadcasting that allows for audio streaming. ShoutCast Hosting can be used by end users or radio stations to bring in audio content for their internet audience. Using
                                            simple mp3 technology which is worldwide for their audio delivery, this is an easy format for anyone to use.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="icecast" class="tab-pane fade in  ">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-right sm-margin-40px-bottom">
                                        <img src="images/webp/icecast.webp" alt="" data-no-retina="">
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-left">
                                        <span class="alt-font text-medium text-gradient-fast-blue-purple text-uppercase font-weight-500 margin-15px-bottom d-inline-block">IceCast</span>
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom">IceCast Server Hosting </h5>
                                        <p class="w-85 lg-w-100">In addition, IceCast Server Hosting offers another element for you to host a radio station that suits your needs. Both ShoutCast Hosting and IceCast Hosting are similar, save for the Flash Player that needs to be
                                            embedded as IceCast makes this process easier. </p>

                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->

                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!--end section-->
      

        <?php include('form.php');?>

    </div>
    <!-- start footer -->
    <?php include('footer.php');?>
    <!-- end footer -->
</body>

</html>