<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>SSL Radio Streaming - Secure HTTPS Radio Stream | CastHost</title>
    <meta charset="utf-8">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CastHost">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="title" content="SSL Radio Streaming - Secure HTTPS Radio Stream | CastHost"/>
    <meta name="description" content="We help you convert your HTTP stream to a secure HTTPS radio stream URL. Ensure the security of data being shared with your listeners by having an SSL certificate. ">
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
        <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('./images/newbanners/securestream.jpg');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">SSL Radio Streaming</h1>
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Make Your Stream URL HTTPS Compliant </h2>
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
                        <img class="border-radius-5px" src="./images/newbanners/securestreambase.jpg" alt="" />
                       
                    </div>
                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">Are you looking to secure your stream URL?</h5>
                        <p class="w-85 lg-w-90">Convert your existing HTTP stream URL to HTTPS radio stream URL with ease.
                        Our secure stream URL service allows you to connect our platform with your existing service provider 
                        ad make your stream URL HTTPS complaint. Signup to get an HTTPS URL and make your
                         website compliant. </p>
                        <div class="btn-dual margin-15px-top d-inline-block">
                            <a href="#pricinghome" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Get SSL Radio Stream<span class="bg-white"></span></a>
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
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Secure Stream URL Pricing</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We have different packages to meet your needs</h5>
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

                                if ($product_id == 284) {
                                    $pricing = json_decode(json_encode($products), true);
                                    $price_monthly = $pricing['pricing']['USD']['monthly'];
                                    $price_quarterly = $pricing['pricing']['USD']['quarterly'];
                                    $price_semiannually = $pricing['pricing']['USD']['semiannually'];
                                    $price_annually = $pricing['pricing']['USD']['annually'];
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
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Monthly</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <!-- <i class="line-icon-Line-Chart2   icon-medium text-fast-blue margin-20px-bottom"></i> -->

                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_monthly; ?></h4>

                                        <p class="margin-5px-bottom">1 Month</p>

                                        <!-- <ul class="list-style-03">
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Keyword Research</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Meta Details Optimization </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Heading Tag Optimization</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Site Performance Improvement</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">  </span> Internal Linking </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Content Optimization </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Plagiarism check </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>Analytics Integration</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>URL Optimization</li>               
                                                <li><span class="text-extra-dark-gray font-weight-500"></span> Backlink Building</li>
                                            </ul> -->
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=284&billingcycle=monthly">Register now</a>
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
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Quarterly</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_quarterly; ?></h4>

                                        <p class="margin-5px-bottom">3 Months</p>

                                        <!-- <ul class="list-style-03">
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Keyword Research</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Meta Details Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Heading Tag Optimization</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Site Performance Improvement</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">  </span> Internal Linking </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Content Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Plagiarism check </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>Analytics Integration</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>URL Optimization</li>               
                                                    <li><span class="text-extra-dark-gray font-weight-500"></span> Backlink Building</li>
                                            </ul> -->
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=284&billingcycle=quarterly">Register now</a>
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
                                        <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half">Semi Annually</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-60px-tb">
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_semiannually; ?></h4>

                                        <p class="margin-5px-bottom">6 Months</p>

                                        <!-- <ul class="list-style-03">
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Keyword Research</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Meta Details Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Heading Tag Optimization</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Site Performance Improvement</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">  </span> Internal Linking </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Content Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Plagiarism check </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>Analytics Integration</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>URL Optimization</li>               
                                                    <li><span class="text-extra-dark-gray font-weight-500"></span> Backlink Building</li>
                                                </ul> -->
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=284&billingcycle=semiannually">Register now</a>
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
                                        <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Yearly</div>
                                    </div>
                                    <!-- end pricing header -->
                                    <!-- start pricing body -->
                                    <div class="pricing-body padding-40px-tb">
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_annually; ?></h4>

                                        <p class="margin-5px-bottom">1 Year</p>

                                        <!-- <ul class="list-style-03">
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Keyword Research</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Meta Details Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Heading Tag Optimization</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Site Performance Improvement</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">  </span> Internal Linking </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Content Optimization </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span> Plagiarism check </li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>Analytics Integration</li>
                                                    <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> </span>URL Optimization</li>               
                                                    <li><span class="text-extra-dark-gray font-weight-500"></span> Backlink Building</li>
                                                </ul> -->
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=284&billingcycle=annually">Register now</a>
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
                                        <i class="line-icon-URL-Window icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$23.88</h4>
                                        <ul class="list-style-03">
                                            <!-- <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">1000 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">4 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel </li>
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li> -->
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="#">Register now</a>
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
                                        <i class="line-icon-URL-Window icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$35.88</h4>
                                        <ul class="list-style-03">
                                            <!-- <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">2500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">15</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">8 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel </li>
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li> -->
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="#">Register now</a>
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
                                        <i class="line-icon-URL-Window icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$47.88</h4>
                                        <ul class="list-style-03">
                                            <!-- <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3500 MB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">30 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">20</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 MySQL </span> Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Addon</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">12 Parked</span> Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel </li>
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li> -->
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="#">Register now</a>
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
                                        <i class="line-icon-URL-Window icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$95.88</h4>
                                        <ul class="list-style-03">
                                            <!-- <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">10 GB</span> Disk Storage Space</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50 GB</span> Monthly Bandwidth </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Sub Domains</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Email Accounts</li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited  </span> MySQL Databases </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Addon Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited </span>Parked Domains </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> FTP Accounts </li>
                                            <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel </li>
                                            <li><span class="text-extra-dark-gray font-weight-500">Free</span> cPanel</li> -->
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="#">Register now</a>
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
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Why HTTPS Radio Stream?</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Ensure security of the data being shared with your listeners</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Lock-2 icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Security</span>
                                <p>Unsecured radio websites can be targeted by third parties to install steal sensitive information. An SSL certificate helps ensure security by preventing unauthorized individuals from making changes to your radio stream. </p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Danger icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Avoid Warnings</span>
                                <p>Search engines such as Google have made it clear that they will display a warning message to users visiting a non-HTTPS complaint website. This can have a negative impact on your radio station credibility. </p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Bar-Chart icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Better Search Engine Ranking</span>
                                <p>SSL certificate is one of the most crucial factors that search engines such as Google considers while ranking your website in their search engine results. Making your stream URL HTTPS compliant can help you rank better.  </p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Shield icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Trust Factor</span>
                                <p>Users consider SSL ad HTTPS as a factor of trust. HTTPS-secured radio streams will be considered safe and secure by the users. Listeners will prefer to share their information only on a secure station website.</p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
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
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0">Convert your HTTP stream to a secure HTTPS radio stream URL

                        </h5>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1 col-md-7">
                        <div class="row row-cols-1 row-cols-sm-2">
                        <!-- start counter item -->
                        <div class="col counter-style-01 last-paragraph-no-margin xs-margin-30px-bottom">
                                <h5 class=" counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="100" data-speed="7000">100 <span>%</span></h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Stream Quality</span>
                                <p class="w-85 md-w-100">Securely stream your data to listeners across various devices without compromising on quality. </p>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col counter-style-01 last-paragraph-no-margin">
                                <h5 class="counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2000" data-speed="7000">24/7</h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Support </span>
                                <p class="w-85 md-w-100">Our team of experts is available round the clock to assist you with any issues or concerns.</p>
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
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Why Choose CastHost? </span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half"> Easily get an SSL secure HTTPS link for your radio stream. </h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    <div class="col md-margin-30px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Gears icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Easy Process</span>
                                <p>We let you connect our platform with your existing provider and make your stream URL HTTPS complaint without any difficulty. </p>
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
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Affordable</span>
                                <p>We offer services to our clients at an affordable and budget-friendly price range..</p>
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
                                <p>We help ensure the security of your radio stream URL by making it an HTTPS complaint. </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    
                </div>

            </div>
        </section>
        <!-- end section -->




        <!-- start section -->
        <section class="parallax one-half-screen md-h-450px sm-h-350px" data-parallax-background-ratio="0.5" style="background: url('./images/webp/streamurl-banner1.webp')">
        </section>
        <!-- end section -->

        <!--start section-->
        <section class="big-section bg-light-gray wow animate__fadeIn overflow-visible" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="overlap-section">
                    <div class="z-index-6 bg-white box-shadow-small border-radius-5px padding-60px-tb md-padding-40px-all xs-padding-20px-lr">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-lg-4 offset-lg-1 col-md-6 text-center text-md-left sm-margin-20px-bottom">
                                <h6 class="alt-font font-weight-500 text-extra-dark-gray w-85 mb-0 lg-w-100">Make Your Radio Stream URL Secure! </h6>
                            </div>
                            <div class="col-12 col-xl-3 offset-xl-3 col-lg-4 offset-lg-2 col-md-6 text-center text-md-right">
                                <a href="https://portal.casthost.net/cart.php?a=add&pid=284&billingcycle=monthly" target="blank" class="btn btn-medium btn-round-edge btn-gradient-fast-blue-purple">Get SSL Secure Link</a>
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