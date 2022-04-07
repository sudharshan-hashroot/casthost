<section class="big-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="col-12 col-xl-5 col-lg-6 col-sm-7 text-center  margin-5-rem-bottom md-margin-3-rem-bottom">
                <span class="alt-font font-weight-500 text-fast-blue text-extra-medium d-block margin-20px-bottom sm-margin-10px-bottom">Get in Touch</span>
                <h5 class="alt-font font-weight-600 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half"> Schedule a Hosting Consultation?</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <form id="project-contact-form" action="form_submit.php" method="post" novalidate="">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col sm-margin-25px-bottom" data-children-count="3">
                            <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name" value="">
                            <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address" value="">
                            
                        </div>
                        <div class="col  sm-margin-25px-bottom" data-children-count="3">
                            <input class="medium-input bg-white margin-25px-bottom required" type="text" name="subject" placeholder="Subject" value="">
                            <input class="medium-input bg-white mb-0" type="tel" name="phone" placeholder="Your mobile" value="">
                            <!-- <select class="medium-input bg-white margin-25px-bottom required"  name="department" placeholder="Select your Department">
                            <option value="" disabled selected>Select your department</option>
                            <option value="pre sales" selected>Pre sales</option>
                            <option value="pre sales">Abuse</option>
                            <option value="pre sales">Support</option>
                            </select> -->
                            <!-- <select class="medium-input bg-white margin-25px-bottom required"  name="priority" placeholder="priority">
                        
                            <option value="" disabled selected>Select your priority</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                            </select> -->
                        </div>

                        <div class="col-lg-12 margin-2-rem-bottom sm-margin-20px-bottom" data-children-count="1">
                            <textarea class="medium-textarea bg-white h-200px required" rows="6" name="message" placeholder="Your message"></textarea>
                        </div>
                        
                        <div class="col-lg-12 text-left margin-2-rem-bottom sm-margin-20px-bottom" data-children-count="1">
                            <input type="checkbox" name="terms_condition" id="terms_condition" value="1" class="terms-condition d-inline-block align-top w-auto mb-0 margin-10px-right margin-5px-top required">
                            <label for="terms_condition" class="text-small d-inline-block align-top w-85 md-w-90 xs-w-85">I accept the terms &amp; conditions and I understand that my data will be hold securely in accordance with the <a href="privacy.html" target="_blank" class="text-decoration-underline text-extra-dark-gray">privacy policy</a>.</label>
                        </div>
                        <div class="col-lg-12 text-center d-flex justify-content-center margin-2-rem-bottom">
                            <div class="g-recaptcha" data-sitekey="6Lc26NEaAAAAAHAyzP1uka0AAQjlVl4ENmUiI1us"></div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <input type="hidden" name="redirect" value="">
                            <button id="project-contact-us-button" name="submit" class="btn btn-medium btn-fancy btn-gradient-fast-blue-purple mb-0 submit btn-round-edge" type="submit">Send Message</button>
                        </div>
                    </div>
                    <div class="form-results d-none"></div>
                </form>
                <div class="alert alert-success" role="alert" style="display: none;">
                    Your request has been successfully submitted to CastHost Team. Our team will get back to you very shortly. Thank you.
                </div>
            </div>
        </div>
    </div>
</section>

