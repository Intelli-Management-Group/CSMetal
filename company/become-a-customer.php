<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../HTMLhead.php'; ?>
    </head>
    <body>
        <?php include '../header.php'; ?>

        <div class="container border-bottom">
            <div class="line line-left"></div>
            <div class="line line-right"></div>
            <div class="row section-padding pb-3">
                <div class="col-sm-5">
                    <p><span class="text-color">/ </span>Become a Customer</p>
                    <div class="title">Let’s talk</div>
                    <p>Thank you for your interest in Fabrik. We’re excited to understand your needs and offer a solution that exceeds expectations.</p>
                    <h3 class="pt-5">OUR FOCUS IS THE CUSTOMER SUCCESS</h3>
                </div>
            </div>

            <div class="row section-padding pt-0">
                <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                    <p>Industry-specific expertise and capabilities</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                    <p>Steelmaking quality and innovation</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                    <p>Delivered with collaboration and commitment</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                    <p>Whatever your opportunity, we have a solution</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-right"></div>
        
            <!-- <div class="row section-padding">
                <div class="col-sm-12 col-md-4">
                    <div class="display-4 upparCasetextTransform">We want to hear from you</div>                
                </div>
            </div> -->

            <div class="row section-padding padding-bottom align-items-stretch">
                <div class="col-sm-12 col-md-6 d-flex pl-0"> 
                    <div class="elementor-widget-container flex-fill" style="background-color: transparent;">
                        <form class="elementor-form" action="submit-form.php" method="POST" name="Contact From">
                            <input type="hidden" name="post_id" value="133">
                            <input type="hidden" name="form_id" value="cf6c9c3">
                            <input type="hidden" name="referer_title" value="Contact Us">
                            <input type="hidden" name="queried_id" value="133">
                            <div class="elementor-form-fields-wrapper elementor-labels-above">
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-first_name elementor-col-50 elementor-field-required">
                                    <label for="first_name" class="elementor-field-label">First Name </label>
                                    <input size="1" type="text" name="form_fields[first_name]" id="first_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-last_name elementor-col-50 elementor-field-required">
                                    <label for="last_name" class="elementor-field-label">Last Name </label>
                                    <input size="1" type="text" name="form_fields[last_name]" id="last_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-50">
                                    <label for="email" class="elementor-field-label">Email Address </label>
                                    <input size="1" type="email" name="form_fields[email]" id="email" class="elementor-field elementor-size-md elementor-field-textual">
                                </div>
                                <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-tel elementor-col-50 elementor-field-required">
                                    <label for="tel" class="elementor-field-label">Phone Number </label>
                                    <input size="1" type="tel" name="form_fields[tel]" id="tel" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-compamy_name elementor-col-50 elementor-field-required">
                                    <label for="compamy_name" class="elementor-field-label">Company Name </label>
                                    <input size="1" type="text" name="form_fields[compamy_name]" id="compamy_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-compamy_address elementor-col-50 elementor-field-required">
                                    <label for="compamy_address" class="elementor-field-label">Company Address </label>
                                    <input size="1" type="text" name="form_fields[compamy_address]" id="compamy_address" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                </div>
                                <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-messages elementor-col-100">
                                    <label for="messages" class="elementor-field-label">Messages </label>
                                    <textarea class="elementor-field-textual elementor-field elementor-size-md" name="form_fields[messages]" id="messages" rows="3"></textarea>
                                </div>
                                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                    <button class="elementor-button elementor-size-sm" type="submit">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i>
                                            </span>
                                            <span class="elementor-button-text">Submit</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center"> 
                    <img src="img/Company/customer/GettyImages-1408581526.webp" alt="Contact" class="image">
                </div>
            </div>
          
           
        </div>
            
        <?php include '../footer.php'; ?>

    </body>
</html>