<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/HTMLhead.php'; ?>
    <title> Partner with CS Metal for Precisely Engineered Metal Solution</title>
    <meta name="description" content="Partner with CS Metal for precision-engineered metal solutions. Trusted by Dior, Hermès, and global brands. Let’s craft your success – contact us today">
</head>

<body>
    <?php
    // Check if the success message is set
    if (isset($_SESSION['success_message'])) {
        echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
        // Unset the success message so it doesn't show again
        unset($_SESSION['success_message']);
    }
    ?>
    <?php include '../inc/header.php'; ?>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <div class="row section-padding pb-3">
            <div class="col-lg-5 py-0">
                <h1 class="slash-title"><span class="text-color">/ </span>Become a Customer</h1>
                <div class="title pb-3">Let’s talk</div>
                <p>Thank you for considering CS Metal. We look forward to learning more about your requirements and providing a solution that goes above and beyond your expectations.</p>
                <h3 class="padding-top-5">OUR TOP PRIORITY IS THE SUCCESS OF OUR CUSTOMERS</h3>
            </div>
        </div>

        <div class="row section-padding pt-0">
            <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                <p class="mb-0">Expertise and capabilities tailored to your industry</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                <p class="mb-0">Quality and innovation in manufacturing</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 checkmark">
                <p class="mb-0">Provided through teamwork and dedication</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 checkmark pb-0">
                <p class="mb-0">No matter your challenge, we have the solution</p>
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
            <div class="col-sm-12 col-lg-6 d-flex p-0">
                <div class="elementor-widget-container flex-fill" style="background-color: transparent;">
                    <form class="elementor-form" action="submit-form.php" method="POST" name="Contact From" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="post_id" value="133">
                            <input type="hidden" name="form_id" value="cf6c9c3">
                            <input type="hidden" name="referer_title" value="Contact Us">
                            <input type="hidden" name="queried_id" value="133"> -->
                        <div class="elementor-form-fields-wrapper elementor-labels-above">
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-first_name elementor-col-50 elementor-field-required pt-0">
                                <label for="first_name" class="elementor-field-label">First Name </label>
                                <input size="1" type="text" name="form_fields[first_name]" id="first_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                            </div>
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-last_name elementor-col-50 elementor-field-required pt-0">
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
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-company_name elementor-col-50 elementor-field-required">
                                <label for="company_name" class="elementor-field-label">Company Name </label>
                                <input size="1" type="text" name="form_fields[company_name]" id="company_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                            </div>
                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-company_address elementor-col-50 elementor-field-required">
                                <label for="company_address" class="elementor-field-label">Company Address </label>
                                <input size="1" type="text" name="form_fields[company_address]" id="company_address" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                            </div>

                            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-messages elementor-col-100">
                                <label for="file">Upload Your 3D File (Optional)</label>
                                <input size="1" type="file" id="file" name="file" class="elementor-field elementor-size-md elementor-field-textual">
                            </div>

                            <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-messages elementor-col-100">
                                <label for="messages" class="elementor-field-label">Messages </label>
                                <textarea class="elementor-field-textual elementor-field elementor-size-md" name="form_fields[messages]" id="messages" rows="3"></textarea>
                            </div>
                            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons py-0">
                                <button class="elementor-button elementor-size-sm" type="submit">
                                    <span class="elementor-button-content-wrapper">
                                        <!-- <span class="elementor-button-icon">
                                                <i aria-hidden="true" class="vamtamtheme- vamtam-theme-arrow-right"></i>
                                            </span> -->
                                        <span class="elementor-button-text">Submit</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 d-flex align-items-center py-0">
                <img src="img/Company/customer/GettyImages-1408581526.webp" alt="Contact" class="image">
            </div>
        </div>
    </div>

    <?php include '../inc/footer.php'; ?>

</body>

</html>