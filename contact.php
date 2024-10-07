<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Us - CS Metal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .contactUs-banner {
                background-image: url('./img/Contact/contact-banner.webp');
                background-size: cover;
                background-position: center;
                transition: background-size 0.2s ease; 
                width: 100%;
            }
    
            .banner-container {
                height: 45vh !important; 
                overflow: hidden; 
            }

            /* Contact Us Css */
            .customDiv{
                margin: 0 0 30px;
            }
            p{
                color:#000000 !important;
                font-size:22px;
            }

            .customDiv > p > a{
                color:#000000 !important;
                font-size:22px;
            }
            .address{
                color:#000000 !important;
            }
            .address:hover{
                color:#005399 !important;
                text-decoration:none;
            }
            .underline{
                padding-top:5px;
                text-decoration:underline;
            }
            .upparCasetextTransformed {
                text-transform: uppercase; 
                -webkit-font-smoothing: antialiased;
                position: relative;
            }

            .upparCasetextTransformed::after {
                content: ''; /* Create an empty pseudo-element */
                display: block; /* Make it block-level */
                height: 2px; /* Set the thickness of the underline */
                background: black; /* Set underline color */
                position: absolute; /* Position it absolutely */
                left: 0; /* Align it to the left */
                right: 0; /* Align it to the right */
                bottom: -5px; /* Adjust this value to control the space */
                transform: scaleX(0); /* Start with no underline */
                transition: transform 0.3s ease; /* Smooth transition */
            }

            .upparCasetextTransformed:hover::after {
                transform: scaleX(1); 
            }

                /* Form */
                .elementor-widget-container {
                    background-color: #f9f9f9; /* Light background color */
                    padding: 20px; /* Padding around the form */
                    border-radius: 8px; /* Optional: rounded corners */
                }

                .elementor-form-fields-wrapper {
                    display: flex; /* Use flexbox for layout */
                    flex-wrap: wrap; /* Allow items to wrap */
                }

                .elementor-field-group {
                    flex: 0 0 50%; /* Each field group takes 50% width (6 out of 12 columns) */
                    padding: 10px; /* Optional: padding around each field */
                }

                .elementor-field-group.elementor-col-100 {
                    flex: 0 0 100%; /* Textarea takes full width (12 out of 12 columns) */
                }

                .elementor-field-label {
                    display: block; /* Labels are block elements */
                    margin-bottom: 5px; /* Space between label and input */
                }

                .elementor-field {
                    width: 100%; /* Make inputs and textarea take full width */
                    padding: 10px; /* Padding inside inputs */
                    border: 1px solid #ccc; /* Border for inputs */
                    border-radius: 4px; /* Rounded corners for inputs */
                }

                .elementor-button {
                    margin-top: 10px; /* Space above the button */
                    background-color: #007bff; /* Button background color */
                    color: white; /* Button text color */
                    border: none; /* No border for button */
                    padding: 10px 20px; /* Padding for button */
                    border-radius: 4px; /* Rounded corners for button */
                    cursor: pointer; /* Pointer cursor on hover */
                }

                .elementor-button:hover {
                    background-color: #0056b3; /* Darker shade on hover */
                }

                /* Forms */

            /*  */
        </style>

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
                    <h5><span class="text-color">/ </span>Contact Us</h5>
                    <div class="display-4">Ready to Meet Your Steel Partner?</div>
                </div>
            </div>
        </div>

        <!-- banner -->
        <div class="banner-container contactUs-banner"> 
            <div class="container">
                <div class="row">
                    <a class="col-sm-4 image-button-white" href="">
                        <div class="d-flex justify-content-between w-100">
                            <h5 class="mb-0">FIND OUT MORE</h5>
                            <h5 class="mb-0">↘</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>

            <div class="row section-padding">
                <div class="col-sm-12 col-md-4 ">
                    <div class="pl-3 pr-3">
                        <h4 class="mb-4">GENERAL INQUIRIES</h4>
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
                                <a class="address upparCasetextTransformed" href="#" target="_blank" rel="noopener">View Locations</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="pl-3 pr-3">
                        <h4 class="mb-4">PRODUCT SALES INQUIRIES</h4>
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
                <div class="col-sm-12 col-md-4">
                    <div class="pl-3 pr-3">
                        <h4 class="mb-4">SUPPLIER INQUIRIES</h4>
                        <div class="customDiv">
                            <p class="mb-1">
                                <a class="address" href="#" target="_blank" rel="noopener">+1 440 848 8222</a>
                            </p>   
                            <p>
                                <a class="address" href="#" target="_blank" rel="noopener">supplier@fabrik.com</a>                         
                            </p> 
                        </div>
                        <div class="customDiv">                       
                            <p>
                            8 a.m. – 5 p.m. Eastern<br/> Monday – Friday
                            </p>
                        </div>
                        <div class="customDiv">
                            <p>
                                <a class="address upparCasetextTransformed" href="#" target="_blank" rel="noopener">Send Inquiries</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Company Profile -->
            
            <div class="row section-padding">
                <div class="col-sm-12 col-md-4">
                    <div class="display-4 upparCasetextTransform">We want to hear from you</div>                
                </div>
            </div>

            <div class="row">
                <div class="row align-items-stretch">
                    <div class="col-sm-12 col-md-8 d-flex"> 
                        <div class="elementor-widget-container flex-fill">
                            <form class="elementor-form" method="post" name="Contact From">
                                <input type="hidden" name="post_id" value="133">
                                <input type="hidden" name="form_id" value="cf6c9c3">
                                <input type="hidden" name="referer_title" value="Contact Us">
                                <input type="hidden" name="queried_id" value="133">
                                <div class="elementor-form-fields-wrapper elementor-labels-above">
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_6abbb17 elementor-col-50 elementor-field-required">
                                        <label for="form-field-field_6abbb17" class="elementor-field-label">First name </label>
                                        <input size="1" type="text" name="form_fields[field_6abbb17]" id="form-field-field_6abbb17" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-contact_page_form_last_name elementor-col-50 elementor-field-required">
                                        <label for="form-field-contact_page_form_last_name" class="elementor-field-label">Last name </label>
                                        <input size="1" type="text" name="form_fields[contact_page_form_last_name]" id="form-field-contact_page_form_last_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-contact_page_form_email elementor-col-50">
                                        <label for="form-field-contact_page_form_email" class="elementor-field-label">Email address </label>
                                        <input size="1" type="email" name="form_fields[contact_page_form_email]" id="form-field-contact_page_form_email" class="elementor-field elementor-size-md elementor-field-textual">
                                    </div>
                                    <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-contact_page_form_tel elementor-col-50 elementor-field-required">
                                        <label for="form-field-contact_page_form_tel" class="elementor-field-label">Phone number </label>
                                        <input size="1" type="tel" name="form_fields[contact_page_form_tel]" id="form-field-contact_page_form_tel" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-contact_page_form_compamy_name elementor-col-50 elementor-field-required">
                                        <label for="form-field-contact_page_form_compamy_name" class="elementor-field-label">Company name </label>
                                        <input size="1" type="text" name="form_fields[contact_page_form_compamy_name]" id="form-field-contact_page_form_compamy_name" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-contact_page_form_compamy_address elementor-col-50 elementor-field-required">
                                        <label for="form-field-contact_page_form_compamy_address" class="elementor-field-label">Company address </label>
                                        <input size="1" type="text" name="form_fields[contact_page_form_compamy_address]" id="form-field-contact_page_form_compamy_address" class="elementor-field elementor-size-md elementor-field-textual" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_684e31d elementor-col-100">
                                        <label for="form-field-field_684e31d" class="elementor-field-label">Comments/Questions </label>
                                        <textarea class="elementor-field-textual elementor-field elementor-size-md" name="form_fields[field_684e31d]" id="form-field-field_684e31d" rows="3"></textarea>
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
                        <div>
                            <img src="img/Contact/rightImages.webp" alt="about" class="image img-fluid">    
                        </div>
                    </div>
                </div>

            </div>
          
           
        </div>

        <div style="background-color:black;">
            <div class="container">
                <div class=footer>
                    <div class="row section-padding justify-content-between">
                        <div class="col-sm-12 col-md-6 pl-0 pr-0">
                            <div class="display-4 upparCasetextTransform ">Pioneering a New Era of Steelworking Excellence</div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <p>Weekly industry insights delivered to your inbox.</p>
                            <form action="/subscribe" method="post" class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="input-group" style="border: 1px solid #fff">
                                            <input type="email" class="form-control border-0" placeholder="Add your email Address" aria-label="Subscriber email" required style="background-color: transparent;">
                                            <button class="btn btnBg leftBorder text-white" type="submit">
                                                <a class="text-white">Subscribe</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap location text-left">
                                <h5 class="m-0">41088 Chagrin Boulevard #120 Cleveland, OH 44124</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap email">
                                <h5 class="m-0">office@fabrik.com</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap phone">
                                <h5 class="m-0">+1 440 848 8222</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div style="padding: 100px;"></div>
            

        <?php include 'footer.php'; ?>
        <script>
            window.addEventListener('scroll', function() {
                const banner = document.querySelector('.contactUs-banner');
                const scrollPosition = window.scrollY;

                // Calculate zoom level based on scroll position
                const zoomLevel = 1 + (scrollPosition / 1000); // Adjust divisor to control zoom speed

                // Limit the maximum zoom level to prevent excessive zoom
                const maxZoomLevel = 1.1; // Set a maximum zoom level (e.g., 10% zoom)
                banner.style.backgroundSize = `${Math.min(zoomLevel, maxZoomLevel) * 100}%`; // Set background size
            });
        </script>


    </body>
</html>