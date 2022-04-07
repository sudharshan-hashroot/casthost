<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>Internet Radio Stream Hosting Service | CastHost</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CastHost">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="title" content="Internet Radio Stream Hosting Service | CastHost " />
    <meta name="description" content="CastHost offers affordable internet radio stream hosting services to customers. Create top-quality audio streams and broadcast them to your listeners">
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
        <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('./images/webp/streambanner.webp');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">Stream Packages</h1>
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Internet Radio Stream Hosting Services</h2>
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
                        <img class="border-radius-5px" src="./images/webp/streamsec1.webp" alt="" />
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
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">Planning to Start an Internet Radio Station?</h5>
                        <p class="w-85 lg-w-90">CastHost offers affordable and compatible internet radio stream hosting services to customers all over the world. With CastHost create top-quality audio streams and broadcast them to your millions of listeners in all parts of the
                            world.
                        </p>
                        <div class="btn-dual margin-15px-top d-inline-block">
                            <a href="#pricinghome" class="btn btn-medium btn-dark-gray btn-slide-right-bg">Start Streaming<span class="bg-white"></span></a>
                            <a href="#features" class="btn btn-medium btn-transparent-dark-gray btn-slide-right-bg xs-no-margin">View Features<span class="bg-extra-dark-gray"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <?php
            try {
                $product_data = "whmcs/products.json";
                $jsondata = file_get_contents($product_data);
                $priceList = json_decode($jsondata);
                foreach ($priceList->product as $dkey => $products) {
                    $products = json_decode(json_encode($products), true);
                    $product_id = $products['pid'];

                    if ($product_id == 240) {
                        $configoptions = json_decode(json_encode($products['configoptions']), true);
                        $price_starter_monthly = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['monthly'];
                        $price_starter_quarterly = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['quarterly'];
                        $price_starter_semiannually = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['semiannually'];
                        $price_starter_annually = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['annually'];
                    }
                    if ($product_id == 204) {
                        $configoptions = json_decode(json_encode($products['configoptions']), true);
                        $price_unlimited_monthly = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['monthly'];
                        $price_unlimited_quarterly = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['quarterly'];
                        $price_unlimited_semiannually = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['semiannually'];
                        $price_unlimited_annually = $configoptions['configoption'][0]['options']['option'][0]['pricing']['USD']['annually'];
                    }
                }
            } catch (Exception $e) {
                echo "error";
            }
        ?>

            <!-- start section -->
            <section class="padding-40px-top md-no-padding-top" id="pricinghome">
                <div class="container">
                    <div class="row justify-content-center wow animate__fadeIn">
                        <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Streaming Packages Pricing</span>
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We have different packages to meet your needs</h5>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-10 col-lg-11 tab-style-04">
                            <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font margin-7-half-rem-bottom sm-margin-20px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                                <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link active" data-toggle="tab" href="#monthly-tab">Monthly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                                <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#quarterly-tab">Quarterly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                                <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#semiannually-tab">Semi Annually</a><span class="tab-bg-active bg-fast-blue"></span></li>
                                <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#yearly-tab">Annually</a><span class="tab-bg-active bg-fast-blue"></span></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="tab-content">
                        <div id="monthly-tab" class="tab-pane fade in active show">
                            <div class="row row-cols-1 row-cols-md-4 align-items-center">
                                <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <!-- start pricing table -->
                                    <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                        <!-- start pricing header -->
                                        <div class="pricing-header bg-light-gray padding-20px-tb">
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Free plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-Cassette icon-medium text-fast-blue margin-20px-bottom"></i>

                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Free</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    <source class="audiobitrate"  src="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">512</span> MB</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Centova</span> Control Panel</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3000</span> MB Bandwidth </li>

                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=76&billingcycle=monthly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=75&billingcycle=monthly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=308&billingcycle=monthly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=307&billingcycle=monthly">Register Now</a>

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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half ptype">Starter plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-TV icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price1"><?php echo $price_starter_monthly; ?></span></h4>
                                            <input class="hiddenval1" type="text" style="display: none;" value="<?php echo $price_starter_monthly; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('1');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>
                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity1" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('1');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn1 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class='storagevalue1  configdj'>512 MB</span> 
                                                    <i class="fa fa-chevron-down margin-20px-left"></i>
                                                    </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('1','512 MB','0');">512 MB</a>
                                                            <a class="dropdown-item" onclick="storageprice('1','2 GB','1.00');">2 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('1','5 GB','2.50');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('1','10 GB','4.75');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('1','25 GB','10.00');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('1','50 GB','17.25');">50 GB</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">75</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>
                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=240&billingcycle=monthly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=241&billingcycle=monthly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=312&billingcycle=monthly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=311&billingcycle=monthly">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half ptype">Unlimited plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-60px-tb">
                                            <i class="line-icon-Communication-Tower icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price2"><?php echo $price_unlimited_monthly; ?></span></h4>
                                            <input class="hiddenval2" type="text" style="display: none;" value="<?php echo $price_unlimited_monthly; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('2');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>

                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity2" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('2');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn2 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue2  configdj'>5 GB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('2','5 GB','0');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('2','10 GB','2.50');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('2','25 GB','8.25');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('2','50 GB','15.75');">50 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('2','100 GB','28.50');">100 GB</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>
                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=204&billingcycle=monthly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=205&billingcycle=monthly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=310&billingcycle=monthly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=309&billingcycle=monthly">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Reseller plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Headset  icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Contact Us</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64-320 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Custom</span> Disk Space</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/submitticket.php?step=2&deptid=2">Contact Us</a>
                                        </div>
                                        <!-- end pricing footer -->
                                    </div>
                                    <!-- end pricing table -->
                                </div>
                            </div>
                        </div>
                        <div id="quarterly-tab" class="tab-pane fade  ">
                            <div class="row row-cols-1 row-cols-md-4 align-items-center">
                                <div class="col pricing-table-style-02 text-center px-md-0 sm-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                    <!-- start pricing table -->
                                    <div class="pricing-table bg-white border-all border-color-medium-gray border-radius-6px">
                                        <!-- start pricing header -->
                                        <div class="pricing-header bg-light-gray padding-20px-tb">
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Free plan</div>

                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-Cassette icon-medium text-fast-blue margin-20px-bottom"></i>

                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Free</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">512</span> MB</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Centova</span> Control Panel</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3000</span> MB Bandwidth </li>

                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=76&billingcycle=quarterly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=75&billingcycle=quarterly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=308&billingcycle=quarterly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=307&billingcycle=quarterly">Register Now</a>

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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half ptype">Starter plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">

                                            <i class="line-icon-Old-Radio icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price3"><?php echo $price_starter_quarterly; ?></span></h4>
                                            <input class="hiddenval3" type="text" style="display: none;" value="<?php echo $price_starter_quarterly; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                            
                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                          Your browser does not support the audio element.
                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('3');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>
                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity3" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('3');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn3 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class='storagevalue3 configdj'>512 MB</span> 
                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('3','512 MB','0');">512 MB</a>
                                                            <a class="dropdown-item" onclick="storageprice('3','2 GB','3.00');">2 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('3','5 GB','7.50');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('3','10 GB','14.25');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('3','25 GB','30.00');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('3','50 GB','51.75');">50 GB</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">75</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=240&billingcycle=quarterly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=241&billingcycle=quarterly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=312&billingcycle=quarterly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=311&billingcycle=quarterly">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half ptype">Unlimited plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-60px-tb">
                                            <i class="line-icon-Communication-Tower icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price4"><?php echo $price_unlimited_quarterly; ?></span></h4>
                                            <input class="hiddenval4" type="text" style="display: none;" value="<?php echo $price_unlimited_quarterly; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                                            
                                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                                          Your browser does not support the audio element.
                                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('4');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>

                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity4" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('4');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn4 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue4 configdj'>5 GB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('4','5 GB','0');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('4','10 GB','7.50');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('4','25 GB','24.75');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('4','50 GB','47.25');">50 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('4','100 GB','85.50');">100 GB</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>
                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=204&billingcycle=quarterly" data-link2="https://portal.casthost.net/cart.php?a=add&pid=205&billingcycle=quarterly"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=310&billingcycle=quarterly" icecanada="https://portal.casthost.net/cart.php?a=add&pid=309&billingcycle=quarterly">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Reseller plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Headset  icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Contact Us</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64-320 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Custom</span> Disk Space</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/submitticket.php?step=2&deptid=2">Contact Us</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Free plan</div>

                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-Cassette icon-medium text-fast-blue margin-20px-bottom"></i>

                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Free</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">512</span> MB</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Centova</span> Control Panel</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3000</span> MB Bandwidth </li>

                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=76&billingcycle=semiannually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=75&billingcycle=semiannually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=308&billingcycle=semiannually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=307&billingcycle=semiannually">Register Now</a>

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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half ptype">Starter plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">

                                            <i class="line-icon-Old-Radio icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price5"><?php echo $price_starter_semiannually; ?></span></h4>
                                            <input class="hiddenval5" type="text" style="display: none;" value="<?php echo $price_starter_semiannually; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                                            
                                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                                          Your browser does not support the audio element.
                                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('5');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>
                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity5" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('5');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn5 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue5 configdj'>512 MB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('5','512 MB','0');">512 MB</a>
                                                            <a class="dropdown-item" onclick="storageprice('5','2 GB','6.00');">2 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('5','5 GB','15.00');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('5','10 GB','28.50');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('5','25 GB','60.00');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('5','50 GB','102.50');">50 GB</a>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">75</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=240&billingcycle=semiannually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=241&billingcycle=semiannually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=312&billingcycle=semiannually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=311&billingcycle=semiannually">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half ptype">Unlimited plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-60px-tb">
                                            <i class="line-icon-Communication-Tower icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price6"><?php echo $price_unlimited_semiannually; ?></span></h4>
                                            <input class="hiddenval6" type="text" style="display: none;" value="<?php echo $price_unlimited_semiannually; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                                            
                                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                                          Your browser does not support the audio element.
                                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('6');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>

                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity6" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('6');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn6 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue6 configdj'>5 GB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('6','5 GB','0');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('6','10 GB','15.00');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('6','25 GB','49.50');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('6','50 GB','94.50');">50 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('6','100 GB','171.00');">100 GB</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>
                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=204&billingcycle=semiannually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=205&billingcycle=semiannually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=310&billingcycle=semiannually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=309&billingcycle=semiannually">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Reseller plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Headset  icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Contact Us</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64-320 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Custom</span> Disk Space</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/submitticket.php?step=2&deptid=2">Contact Us</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Free plan</div>

                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-Cassette icon-medium text-fast-blue margin-20px-bottom"></i>

                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Free</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">512</span> MB</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">50</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Centova</span> Control Panel</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">3000</span> MB Bandwidth </li>

                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=76&billingcycle=annually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=75&billingcycle=annually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=308&billingcycle=annually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=307&billingcycle=annually">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half ptype">Starter plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Old-TV icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price7"><?php echo $price_starter_annually; ?></span></h4>
                                            <input class="hiddenval7" type="text" style="display: none;" value="<?php echo $price_starter_annually; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                                            
                                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                                          Your browser does not support the audio element.
                                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('7');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>
                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity7" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('7');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn7 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue7 configdj'>512 MB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('7','512 MB','0');">512 MB</a>
                                                            <a class="dropdown-item" onclick="storageprice('7','2 GB','12.00');">2 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('7','5 GB','30.00');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('7','10 GB','57.00');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('7','25 GB','120.00');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('7','50 GB','205.00');">50 GB</a>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">75</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=240&billingcycle=annually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=241&billingcycle=annually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=312&billingcycle=annually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=311&billingcycle=annually">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-white text-uppercase letter-spacing-minus-1-half ptype">Unlimited plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-60px-tb">
                                            <i class="line-icon-Communication-Tower icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <span class="price8"><?php echo $price_unlimited_annually; ?></span></h4>
                                            <input class="hiddenval8" type="text" style="display: none;" value="<?php echo $price_unlimited_annually; ?>">
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                                            
                                                                            <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                                          Your browser does not support the audio element.
                                                                          </audio>
                                                </li>
                                                <li class="border-color-medium-gray">
                                                    <div class="row">
                                                        <div class="col-4 text-right minusicon" onclick="bitrateminus('8');">
                                                            <i class="fas disable fa-minus-circle text-gray quantity-left-minus"></i>

                                                        </div>
                                                        <div class="col-4" style="padding: 0;">
                                                            <span id="quantity8" class="text-extra-dark-gray font-weight-500 configbit">64</span> kbps
                                                        </div>
                                                        <div class="col-4 text-left plusicon" onclick="bitrateplus('8');">
                                                            <i class="fas fa-plus-circle text-gray quantity-right-plus"></i>

                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray">
                                                    <div class="dropdown">
                                                        <button class="btn btn-block storagebtn8 dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class='storagevalue8 configdj'>5 GB</span> 
                                                                <i class="fa fa-chevron-down margin-20px-left"></i>
                                                                </button>
                                                        <div class="dropdown-menu dropdown-menu-center storagedd  text-center" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" onclick="storageprice('8','5 GB','0');">5 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('8','10 GB','30.00');">10 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('8','25 GB','99.00');">25 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('8','50 GB','189.00');">50 GB</a>
                                                            <a class="dropdown-item" onclick="storageprice('8','100 GB','342.00');">100 GB</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>
                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                            <a class="buynow btn btn-medium btn-transparent-dark-gray btn-round-edge popup-with-zoom-anim" href="#provider" data-link1="https://portal.casthost.net/cart.php?a=add&pid=204&billingcycle=annually" data-link2="https://portal.casthost.net/cart.php?a=add&pid=205&billingcycle=annually"
                                                shoutcanada="https://portal.casthost.net/cart.php?a=add&pid=310&billingcycle=annually" icecanada="https://portal.casthost.net/cart.php?a=add&pid=309&billingcycle=annually">Register Now</a>
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
                                            <div class="alt-font font-weight-500 text-small text-extra-dark-gray text-uppercase letter-spacing-minus-1-half">Reseller plan</div>
                                        </div>
                                        <!-- end pricing header -->
                                        <!-- start pricing body -->
                                        <div class="pricing-body padding-40px-tb">
                                            <i class="line-icon-Headset  icon-medium text-fast-blue margin-20px-bottom"></i>
                                            <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">Contact Us</h4>
                                            <ul class="list-style-03">
                                                <li class="border-color-medium-gray p-0">
                                                    <audio controls style="width: 110%;" controlsList="nodownload">
                                                    
                                                    <source class="audiobitrate"  src ="https://securestream.casthost.net:8223/64" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio>
                                                </li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500"> 64-320 </span> kbps Bitrate</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Custom</span> Disk Space</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Max Listeners</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Free </span>Web Hosting</li>

                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Advanced</span> Detailed Reports</li>
                                                <li class="border-color-medium-gray"><span class="text-extra-dark-gray font-weight-500">Unlimited</span> Bandwidth </li>


                                            </ul>
                                        </div>
                                        <!-- end pricing body -->
                                        <!-- start pricing footer -->
                                        <div class="pricing-footer margin-55px-bottom">
                                            <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/submitticket.php?step=2&deptid=2">Contact Us</a>
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
                            <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Our Key Features </span>
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Streaming made easy with the unique set of services and features we offer</h5>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Signal icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Automated Broadcasting</span>
                                    <p>Broadcast your shows live or automate your radio station to ensure your content is streamed 24/7 to listeners all over the world.</p>
                                </div>
                                <div class="feature-box-overlay bg-white border-radius-5px"></div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Audio icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">Best Audio Quality </span>
                                    <p>Make use of a high-bandwidth audio stream to offer an immersive experience to your listeners.</p>
                                </div>
                                <div class="feature-box-overlay bg-white border-radius-5px"></div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Bar-Chart icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Advanced Reports</span>
                                    <p>Get real-time insights about your audience to know about their favorite shows, geographical insights, peak-listening time, and much more.</p>
                                </div>
                                <div class="feature-box-overlay bg-white border-radius-5px"></div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Calendar-3 icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Easy Scheduling</span>
                                    <p>Easily schedule shows, assign time slots, and manage your internet radio station remotely more with ease. </p>
                                </div>
                                <div class="feature-box-overlay bg-white border-radius-5px"></div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Clock-Back icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">Low Latency</span>
                                    <p>CastHost offers a low latency internet radio stream hosting service that ensures to get your data streamed without any delay.
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
                                    <i class="line-icon-Lock-Window icon-medium text-fast-blue margin-40px-bottom md-margin-20px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Secure Stream URL</span>
                                    <p>Our secure stream URL service allows you to make your stream URL HTTPS compliant.
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
                            <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0">Try out our internet radio stream hosting services without having to pay a dime.
                            </h5>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1 col-md-7">
                            <div class="row row-cols-1 row-cols-sm-2">
                                <!-- start counter item -->
                                <div class="col counter-style-01 last-paragraph-no-margin xs-margin-30px-bottom">
                                    <h5 class=" counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="05" data-speed="7000">05 <span>Days</span></h5>
                                    <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Free Trial</span>
                                    <p class="w-85 md-w-100">Explore our hosting service for a 5-day free trial period</p>
                                </div>
                                <!-- end counter item -->
                                <!-- start counter item -->
                                <div class="col counter-style-01 last-paragraph-no-margin">
                                    <h5 class="counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2000" data-speed="7000">24/7</h5>
                                    <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Free Support </span>
                                    <p class="w-85 md-w-100">We provide free support on all inquiries made by our customer</p>
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
                            <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half"> Benefits of CastHost’s internet radio stream hosting service</h5>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                        <div class="col md-margin-30px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <!-- start feature box item -->
                            <div class="feature-box text-left padding-1-rem-all">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Wifi-2 icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">99% Network Uptime</span>
                                    <p>We guarantee to keep your station running non-stop by minimizing the chances of any hardware failures.</p>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                        <div class="col md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            <!-- start feature box item -->
                            <div class="feature-box text-left padding-1-rem-all">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Resize icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Scalable</span>
                                    <p>We provide tailor-made solutions and services that can be scaled to meet your streaming needs</p>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                        <div class="col xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <!-- start feature box item -->
                            <div class="feature-box text-left padding-1-rem-all">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Gear-2 icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Easy Setup</span>
                                    <p>With CastHost, you can easily start an internet radio station and broadcast pre-recorded or live content to your listeners.</p>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                        <div class="col wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                            <!-- start feature box item -->
                            <div class="feature-box text-left padding-1-rem-all">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Dollar-Sign icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Cost-Effective</span>
                                    <p>CastHost provide reliable and secure internet radio stream hosting services at a budget-friendly price. </p>
                                </div>
                            </div>
                            <!-- end feature box item -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- end section -->




            <!-- start section -->
            <section class="parallax one-half-screen md-h-450px sm-h-350px" data-parallax-background-ratio="0.5" style="background: url('./images/webp/banner-section.webp')">
            </section>
            <!-- end section -->

            <!--start section-->
            <section class="big-section bg-light-gray wow animate__fadeIn overflow-visible" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="overlap-section">
                        <div class="z-index-6 bg-white box-shadow-small border-radius-5px padding-60px-tb md-padding-40px-all xs-padding-20px-lr">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12 col-lg-4 offset-lg-1 col-md-6 text-center text-md-left sm-margin-20px-bottom">
                                    <h6 class="alt-font font-weight-500 text-extra-dark-gray w-85 mb-0 lg-w-100">Get Best cPanel Web Hosting Services </h6>
                                </div>
                                <div class="col-12 col-xl-3 offset-xl-3 col-lg-4 offset-lg-2 col-md-6 text-center text-md-right">
                                    <a href="https://casthost.net/cpanel_hosting.php" class=" btn btn-medium btn-round-edge btn-gradient-fast-blue-purple">Get Started Now</a>
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
                                            <p class="w-85 lg-w-100">ShoutCast Hosting is used for internet radio broadcasting that allows for audio streaming. ShoutCast Hosting can be used by end users or radio stations to bring in audio content for their internet audience.
                                                Using simple mp3 technology which is worldwide for their audio delivery, this is an easy format for anyone to use.
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
                                            <p class="w-85 lg-w-100">In addition, IceCast Server Hosting offers another element for you to host a radio station that suits your needs. Both ShoutCast Hosting and IceCast Hosting are similar, save for the Flash Player that needs
                                                to be embedded as IceCast makes this process easier. </p>

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




            <!-- start modal pop-up -->
            <div id="provider" class="  zoom-anim-dialog col-lg-6 col-sm-12 mx-auto bg-white text-center white-popup-block padding-4-half-rem-all border-radius-6px sm-padding-2-half-rem-lr mfp-hide">
                <span class="text-extra-dark-gray text-uppercase alt-font text-extra-large font-weight-600 margin-15px-bottom d-block">Please select the Software for your Streaming account </span>
                <p>Select one of the software</p>
                <div class="row row-cols-2 row-cols-lg-2 row-cols-md-2 justify-content-center margin-2-rem-bottom">
                    <!-- start feature box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom " style="visibility: visible; animation-name: fadeIn;">

                        <div class=" feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover border-all border-color-medium-gray overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-3-rem-all">
                                <span class="text-fast-blue margin-25px-bottom">
                                <img src="./images/shoutcast (1).png" alt="" style="width: 80%;"></span>
                                <div class="feature-box-content last-paragraph-no-margin pt-3">
                                    <label for="">Select Location</label>
                                    <select name="shoutcastvalue" class="form-control form-control-lg" id="">
                                       
                               <option value="usa" selected>USA</option>
                               <option value="canada">Canada</option>
                           </select>
                                </div>

                                <div class="move-bottom-top margin-15px-top">
                                    <a id="shoutcastlink" href="#" class="btn btn-link thin btn-large text-fast-blue">Select Shoutcast</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom " style="visibility: visible; animation-name: fadeIn;">

                        <div class="feature-box feature-box-show-hover box-shadow-large-hover border-radius-6px feature-box-bg-white-hover border-all border-color-medium-gray overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-move-bottom-top padding-3-rem-all">
                                <span class="text-fast-blue margin-25px-bottom">
                                <img src="./images/icecast.png" alt="" style="width: 80%;"></span>
                                <div class="feature-box-content last-paragraph-no-margin pt-3">
                                    <label for="">Select Location</label>
                                    <select name="icecastvalue" class="form-control form-control-lg" id="">                                       
                               <option value="usa" selected>USA</option>
                               <option value="canada">Canada</option>
                           </select>
                                </div>
                                <div class="move-bottom-top margin-15px-top">
                                    <a id="icecastlink" href="#" class="btn btn-link thin btn-large text-fast-blue">Select Icecast</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end feature box item -->


                </div>
                <a class="btn btn-fancy btn-small btn-transparent-light-gray popup-modal-dismiss" href="#">Dismiss</a>
                <!-- <a class="btn btn-large btn-fast-blue" href="#">Next <i class="ml-2 fas fa-arrow-right"></i></a> -->
            </div>
            <!-- end modal pop-up -->

    </div>
    <!-- start footer -->
    <?php include('footer.php');?>
    <!-- end footer -->

</body>

</html>