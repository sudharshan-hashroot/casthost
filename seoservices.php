<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>SEO Services for Radio Stations - SEO Link Building | CastHost</title>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CastHost">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="title" content="SEO Services for Radio Stations - SEO Link Building | CastHost"/>
    <meta name="description" content="Get your radio station website search engine friendly. We offer affordable SEO services to radio stations all over the world. Start promoting your website now!">
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
        <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image:url('./images/newbanners/seo-banner.jpg');">
            <div class="opacity-extra-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">SEO Services </h1>
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Top-Notch SEO Services for Radio Stations</h2>
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
                        <img class="border-radius-5px" src="./images/webp/seoservice.webp" alt="" />
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
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">Looking for More Than Just Hosting?</h5>
                        <p class="w-85 lg-w-90">We have a team of SEO experts who can get your radio station website search engine friendly and rank on top of the search results for the targeted keywords. With our SEO services, we help you to promote your radio website to millions
                            of listeners out there.
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
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">SEO Pricing</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We have different packages to meet your needs</h5>
                    </div>
                </div>
                <!-- <div class="row justify-content-center">
                    <div class="col-12 col-xl-10 col-lg-11 tab-style-04">
                        <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font margin-7-half-rem-bottom sm-margin-20px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link active" data-toggle="tab" href="#monthly-tab">Monthly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                            <li class="nav-item bg-white border-color-extra-light-gray"><a class="nav-link" data-toggle="tab" href="#yearly-tab">Yearly</a><span class="tab-bg-active bg-fast-blue"></span></li>
                        </ul>

                    </div>
                </div> -->
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

                            if ($product_id == 279) {
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
                                        <i class="line-icon-Line-Chart2   icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_monthly; ?></h4>
                                        <ul class="list-style-03">
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
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=279&billingcycle=monthly">Register now</a>
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
                                        <i class="line-icon-Bar-Chart4  icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_quarterly; ?></h4>
                                        <ul class="list-style-03">
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
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=279&billingcycle=quarterly">Register now</a>
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
                                        <i class="line-icon-Bar-Chart5  icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_semiannually; ?></h4>
                                        <ul class="list-style-03">
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
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-5px-top margin-55px-bottom">
                                        <a class="btn btn-medium btn-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=279&billingcycle=semiannually">Register now</a>
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
                                        <i class="line-icon-Bar-Chart icon-medium text-fast-blue margin-20px-bottom"></i>
                                        <h4 class="font-weight-500 text-extra-dark-gray letter-spacing-minus-2px margin-15px-bottom">$ <?php echo $price_annually; ?></h4>
                                        <ul class="list-style-03">
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
                                        </ul>
                                    </div>
                                    <!-- end pricing body -->
                                    <!-- start pricing footer -->
                                    <div class="pricing-footer margin-55px-bottom">
                                        <a class="btn btn-medium btn-transparent-dark-gray btn-round-edge" href="https://portal.casthost.net/cart.php?a=add&pid=279&billingcycle=annually">Register now</a>
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
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="text-extra-medium margin-15px-bottom alt-font d-block w-100">SEO Activities That We Carry Out</span>
                        <h5 class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">We carry out a wide range of SEO activities that help make your website stand out from competitors</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-File-Search icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Keyword Research</span>
                                <p>We will figure out the right set of keywords for which you can rank your station website on top of the search engine results. Keywords ranking difficulty, search volume are some of the factors that we consider while carrying
                                    out the research.</p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-File-ClipboardFileText icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Content Optimisation</span>
                                <p>Our SEO experts will ensure that your website content is completely optimized by adding relevant keywords. Meta details optimization, heading tag optimization, etc come under this category.
                                </p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-File-Link icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Link Building Services</span>
                                <p>Make use of our link-building services to create 750 high-quality backlinks( 25 backlinks/day) for your website every month. More the backlinks, the better will be the probability of getting ranked high. </p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-URL-Window icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">URL Optimization</span>
                                <p>Our experts make your website URL, search engine friendly by keeping it simple, relevant, and readable. Well-crafted URLs are an important factor that search engines consider while ranking a website</p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Optimization icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Performance Optimization</span>
                                <p>Our team of experts makes sure to improve your performance score by increasing website speed and reducing loading time. Websites with good performance scores will get ranked easily in the search engine results</p>
                            </div>
                            <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Find-User icon-medium text-fast-blue"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Competitor Analysis </span>
                                <p>We continuously monitor your competitor's backlinks, keyword rankings, domain authority, etc. Based on the observation we will devise strategies to outrank them and come on top in the search results.
                                </p>
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
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray mb-0">We make your radio station website visible to listeners looking for your service.
                        </h5>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1 col-md-7">
                        <div class="row row-cols-1 row-cols-sm-2">

                            <!-- start counter item -->
                            <div class="col counter-style-01 last-paragraph-no-margin">
                                <h5 class="counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="2000" data-speed="7000">24/7</h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Availability</span>
                                <p class="w-85 md-w-100">We will be available 24/7 to listen to your concerns and suggestions</p>
                            </div>
                            <!-- end counter item -->
                            <!-- start counter item -->
                            <div class="col counter-style-01 last-paragraph-no-margin xs-margin-30px-bottom">
                                <h5 class=" counter-number text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-1px margin-15px-bottom" data-to="05" data-speed="7000">100 <span>%</span></h5>
                                <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-5px-bottom">Guaranteed Result</span>
                                <p class="w-85 md-w-100">Guaranteed increase in website ranking and organic traffic. </p>
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
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Why Choose Our SEO Services? </span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">By choosing our SEO services, you are guaranteed to get better results</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <div class="col md-margin-30px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Calendar-4 icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Monthly SEO Reports</span>
                                <p>We will share weekly/monthly SEO report which helps you to get a better idea about website performance.</p>
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
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">High ROI</span>
                                <p>We allocate your budget in the most effective manner and ensure to get better returns on the amount you spent.</p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="col xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Life-Safer icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Affordable Services </span>
                                <p>We offer quality SEO services at a reasonable price range which everyone can afford. </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                    <div class="col wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <!-- start feature box item -->
                        <div class="feature-box text-left padding-1-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Search-People icon-medium text-gradient-fast-blue-purple margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Transparency</span>
                                <p>We are 100% transparent about the SEO activities that we are doing and are available 24/7 to listen to your suggestions. </p>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->




        <!-- start section -->
        <section class="parallax one-half-screen md-h-450px sm-h-350px" data-parallax-background-ratio="0.5" style="background: url('./images/webp/seosection.webp')">
        </section>
        <!-- end section -->

        <!--start section-->
        <section class="big-section bg-light-gray wow animate__fadeIn overflow-visible" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="overlap-section">
                    <div class="z-index-6 bg-white box-shadow-small border-radius-5px padding-60px-tb md-padding-40px-all xs-padding-20px-lr">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-lg-4 offset-lg-1 col-md-6 text-center text-md-left sm-margin-20px-bottom">
                                <h6 class="alt-font font-weight-500 text-extra-dark-gray w-85 mb-0 lg-w-100"> Don't be late, start promoting your website now! </h6>
                            </div>
                            <div class="col-12 col-xl-3 offset-xl-3 col-lg-4 offset-lg-2 col-md-6 text-center text-md-right">
                                <a href="https://portal.casthost.net/cart.php?a=add&pid=279&billingcycle=monthly" target="_blank" class="btn btn-medium btn-round-edge btn-gradient-fast-blue-purple">Start Your Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center margin-5-rem-top  margin-5-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Our Partners</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">We have Partners to meet your needs</h5>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 justify-content-center client-logo-style-04">
                    <!-- start client item -->
                    <div class="col text-center sm-no-margin wow animate__fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="client-box padding-25px-all text-center">
                            <a href="#"><img alt="clients logo 01" src="images/shoutcast.png" data-no-retina=""></a>
                            <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                        </div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col text-center sm-no-margin wow animate__fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="client-box padding-25px-all text-center">
                            <a href="#"><img alt="clients logo 01" src="images/icecast.png" data-no-retina=""></a>
                            <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                        </div>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col text-center sm-no-margin wow animate__fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="client-box padding-25px-all text-center">
                            <a href="#"><img alt="clients logo 01" src="images/centova.png" data-no-retina=""></a>
                            <span class="client-overlay bg-white box-shadow-small border-radius-4px"></span>
                        </div>
                    </div>
                    <!-- end client item -->
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