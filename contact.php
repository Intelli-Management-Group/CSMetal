<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <div class="row section-padding">
                <div class="col-sm-8">
                    <p><span class="text-color">/ </span>Contact Us</p>
                    <div class="title">Ready to Meet Your Steel Partner?</div>
                </div>
            </div>
            <div class="row">
                <a class="col-md-4 image-button" href="#" style="top:100%">
                    <div class="d-flex justify-content-between w-100">
                        <div class="mb-0 button">FIND OUT MORE</div>
                        <div class="mb-0 button">↘</div>
                    </div>
                </a>
            </div>
        </div>

        <!-- banner -->
        <div class="image-container" style="z-index: -1;">
            <img src="./img/Contact/contact-banner.webp" alt="Contact Banner" class="banner-container">
        </div>


        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>

            <div class="row section-padding">
                <div class="col-sm-12 col-md-4 ">
                    <div class="pl-3 pr-3">
                        <h3 class="mb-4">Headquarter info</h3>
                        <div class="customDiv">
                            <p>
                                <a class="address" href="#" target="_blank" rel="noopener">41088 Chagrin Boulevard #120 Cleveland, OH 44124</a>
                            </p>
                        </div>
                        <div class="customDiv">
                            <p class="mb-1">
                                <a class="address" href="#" target="_blank" rel="noopener">+1 440 848 8222</a>
                            </p>   
                            <p>
                                <a class="address" href="#" target="_blank" rel="noopener">office@fabrik.com</a>                         
                            </p> 
                        </div>
                        <div class="customDiv">
                            <p>
                                <a class="underline-link" href="#" target="_blank" rel="noopener">Get Directions →</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="pl-3 pr-3">
                        <h3 class="mb-4">Factory info</h3>
                        <div class="customDiv">
                            <p class="mb-1">
                                <a class="address" href="#" target="_blank" rel="noopener">+1 220 848 8666</a>
                            </p>   
                            <p>
                                <a class="address" href="#" target="_blank" rel="noopener">product@fabrik.com</a>                         
                            </p> 
                        </div>
                        <div class="customDiv">                       
                            <p>
                            8 a.m. – 5 p.m. Eastern<br/> Monday – Friday
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            
            <div class="row section-padding">
                <div class="col-sm-12 col-md-4">
                    <div class="title upparCasetextTransform">We want to hear from you</div>                
                </div>
            </div>

            <div class="row section-padding padding-bottom align-items-stretch">
                <div class="col-sm-12 col-md-8 d-flex pl-0"> 
                    <div class="elementor-widget-container flex-fill">
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
                <div class="col-sm-12 col-md-4 d-flex align-items-center"> 
                    <div class="image-container" style="z-index: -1;">
                        <img src="img/Contact/rightImages.webp" alt="Contact" class="banner-container">
                    </div>
                </div>
            </div>
          
           
        </div>
            
        <?php include 'footer.php'; ?>

    </body>
</html>