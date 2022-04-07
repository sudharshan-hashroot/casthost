<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>CastHost-Submit Ticket</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="CastHost">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="">
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
        <section class="parallax bg-gradient-fast-blue-purple" data-parallax-background-ratio="0.5" style="background-image:url('./images/webp/contact-us-classic-02.webp');">
            <div class="opacity-extra-medium bg-gradient-fast-blue-purple"></div>
            <div class="container">
                <div class="row align-items-stretch justify-content-center small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-white opacity-6 margin-20px-bottom">Ask Your Queries</h1>
                        <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Submit Ticket</h2>
                    </div>
                    <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
      
        <section id="down-section" class="big-section  wow animate__fadeIn padding-2-rem-bottom" style="visibility: visible; animation-name: fadeIn; padding: 3rem 0;">
            <div class="container">
                <div class="row">
                    <div class="col-12 tab-style-02">

                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="research" class="tab-pane fade in active show">
                          
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center  margin-3-rem-bottom md-margin-3-rem-bottom">
                        <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Submit Ticket</span>
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half"> Post your Questions here</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form id="project-contact-form" action="email-templates/contact-form.php" method="post" novalidate="">
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col sm-margin-25px-bottom" data-children-count="3">
                                    <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                    <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                    <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile">
                                     </div>
                                     <div class="col  sm-margin-25px-bottom" data-children-count="3">
                                    <input class="medium-input bg-white margin-25px-bottom required" type="text" name="subject" placeholder="Subject">
                                    <select class="medium-input bg-white margin-25px-bottom required"  name="department" placeholder="Select your Department">
                                    <option value="" disabled selected>Select your department</option>
                                    <option value="pre sales" selected>Pre sales</option>
                                    <option value="pre sales">Abuse</option>
                                    <option value="pre sales">Support</option>
                                    </select>
                                    <select class="medium-input bg-white margin-25px-bottom required"  name="priority" placeholder="priority">
                                
                                    <option value="" disabled selected>Select your priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                    </select>
                                     </div>
                                <div class="col-lg-12 margin-4-rem-bottom sm-margin-20px-bottom" data-children-count="1">
                                
                                    <textarea class="medium-textarea bg-white h-200px" rows="6" name="comment" placeholder="Your message"></textarea>
                                </div>
                                <div class="col text-left sm-margin-20px-bottom" data-children-count="1">
                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required">
                                    <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms &amp; conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                                </div>
                                <div class="col text-center text-md-right">
                                    <input type="hidden" name="redirect" value="">
                                    <button id="project-contact-us-button" class="btn btn-medium btn-fancy btn-gradient-fast-blue-purple mb-0 submit btn-round-edge" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="form-results d-none"></div>
                        </form>
                    </div>
                </div>
        

                               

                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="strategy" class="tab-pane fade">
                               

                              
                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="management" class="tab-pane fade">

                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="concept" class="tab-pane fade">

                            </div>
                            <!-- end tab item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->







    

     

    </div>
 <!-- start footer -->
 <?php include('footer.php');?>
    <!-- end footer -->
</body>

</html>