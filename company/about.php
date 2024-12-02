<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../inc/HTMLhead.php'; ?>
        <style>
            .solution-wrap {
                padding: 25px 50px !important;
                height: 150px !important;
                display: flex;
                border: 1px solid #4b4b4b;
                align-items: center;
                justify-content: center;
                text-align: center;
                box-sizing: border-box;
            }

            .gom-wrap {
                border-left: none;
            }

            .hardness-wrap {
                border-left: none;
            }

            @media only screen and (max-width: 767px) {
                .gom-wrap {
                    border-left: 1px solid #4b4b4b;
                    border-top: none;
                }

                .hardness-wrap {
                    border-left: 1px solid #4b4b4b;
                    border-top: none;
                }
            }

            .card-arrow h5{
                position: relative;
                z-index: 1;
            }
        </style>
    </head>
    <body>
        <?php include '../inc/header.php'; ?>
        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <div class="row section-padding">
                <div class="col-md-8">
                    <p class="slash-title"><span class="text-color">/ </span>About</p>
                    <div class="title">Crafting Excellence Through Innovation and Precision</div>
                </div>
            </div>
            <!-- <div class="row">
                <a class="col-md-4 image-button scroll2intro" href="#intro" style="top:100%">
                    <div class="d-flex justify-content-between w-100">
                        <div class="mb-0 button">FIND OUT MORE</div>
                        <div class="mb-0 button">↘</div>
                    </div>
                </a>
            </div> -->
        </div>

        <!-- banner -->
        <div class="image-container" style="z-index: -1;">
            <img src="img/Company/About/banner_company_awards.jpg" alt="about-banner" class="banner-container">
        </div>

        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <!-- Company Profile -->
            <div class="row section-padding pb-0" id="intro">
                <div class="col-sm-12 col-md-4">
                    <p class="slogan">Use the most economic process to achieve excellent product and service satisfaction</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <p>At CS Metal, our success in metal manufacturing stems from a bold vision and unwavering ambition. Since our founding in 1981, we have excelled in a field where only the bold thrive. Guided by our founder’s principle that “success comes from a strong will,” we focus on turning ambitious metalwork concepts into reality. The name Chi Sing (CS), meaning “aspiration achieved,” reflects our commitment to this vision.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <p>Over the past four decades, CS Metal has become a beacon of innovation and quality in metal manufacturing, serving a diverse range of industries with customized metal solutions that meet the highest standards of excellence and functionality. Our growth from a small workshop in Hong Kong to a global leader in metal fabrication is a testament to our dedication to precision, craftsmanship, and client satisfaction. </p>
                </div>
            </div>

            <div class="image-container">
                <img src="img/Company/About/img_1.png" alt="about" class="banner-container">
                <div class="col-md-4 solutions py-5">
                    <p class="mb-0"><span class="text-color">/ </span>Experience. Transparency. Results.</p>
                </div>
            </div>

            <!-- Company Strength -->
            <div class="row section-padding company-strength-padding">
                <div class="col-sm-12 col-md-4 scroll2movedown company-strength-margin-1">
                    <p class="text-color mb-1">HANDLE</p>
                    <div class="display-3" style="font-weight: bold;">400,000</div>
                    <p>pcs/month</p>
                </div>
                <div class="col-sm-12 col-md-4 scroll2movedown">
                    <p class="text-color mb-1">STAMPING</p>
                    <div class="display-3" style="font-weight: bold;">1,000,000</div>
                    <p>pcs/month</p>
                </div>
                <div class="col-sm-12 col-md-4 scroll2movedown company-strength-margin-3">
                    <p class="text-color mb-1">1 SHIFT</p>
                    <div class="display-3" style="font-weight: bold;">50%</div>
                    <p>utilization</p>
                </div>
            </div>
        </div>

        <div style="background-color:black;">
            <div class="container">
                <div class="footer">
                    <div class="row section-padding padding-top justify-content-between">
                        <div class="col-sm-12 col-md-6 pl-0 pr-0">
                            <div class="title">EXCEPTIONAL PARTNER IN METAL SOLUTIONS</div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <p>At CS Metal, our customers' success is our priority. We build meaningful partnerships, treating each client as a valued collaborator and investing in their goals. Committed to excellence, we go above and beyond to provide precision metal solutions that achieve exceptional results every time.</p>
                        </div>
                    </div>
                    
                    <div class="row section-padding padding-bottom pt-0">
                        <div class="col-sm-12 col-md-4 col-lg-4 p-0">
                            <a href="solutions/machine.php#machine" class="solution-wrap location card-arrow">
                                <h5 class="m-0">Automated Tube Forming Machine</h5>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 p-0">
                            <a href="solutions/inspection.php#gom" class="solution-wrap gom-wrap card-arrow">
                                <h5 class="m-0">GOM Scan</h5>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 p-0">
                            <a href="solutions/testing.php#hardness" class="solution-wrap hardness-wrap card-arrow">
                                <h5 class="m-0">Metal Hardness Measurement Machine</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <div class="container bottom-border">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <div class="row section-padding padding-top pb-0">
                <div class="col-sm-12 col-md-4">
                    <div class="title pb-3">CORE VALUES</div>
                    <p>We are dedicated to delivering precision and innovation, proudly delivering customized, high-quality metal solutions that consistently exceed expectations.</p>
                </div>
            </div>
            <div class="row section-padding padding-bottom">
                <div class="col-sm-12 col-md-4">
                    <!-- <i class="fa-regular fa-lightbulb fa-icon"></i> -->
                    <img src="img/Company/About/icon_innovation.svg" alt="innovation" class="icon">
                    <h5>Innovation</h5>
                    <p>Embracing cutting-edge technology, we deliver innovative solutions that set industry standards.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <!-- <i class="fa-solid fa-check-circle fa-icon"></i> -->
                    <img src="img/Company/About/icon_quality.svg" alt="quality" class="icon">
                    <h5>Quality Excellence</h5>
                    <p>Through numerous tests, our products meet the highest standards in metal manufacturing. </p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <!-- <i class="fa-regular fa-handshake fa-icon"></i> -->
                    <img src="img/Company/About/icon_customer.svg" alt="customer" class="icon">
                    <h5>Customer Centred Approach</h5>
                    <p>We build lasting partnerships, tailoring our solutions to your unique needs. </p>
                </div>
            </div>
        </div>

        <!-- Our Clients -->
        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-right"></div>
            <div class="row section-padding padding-top d-flex justify-content-center">
                <div class="col-sm-12 col-md-8">
                    <p class="slash-title"><span class="text-color">/ </span>Our Clients</p>
                    <div class="products-intro">Distinguished by enduring partnerships with leading brands, Chi Sing has become synonymous with reliability and quality. Our work with top appliance manufacturers has not only earned us a preferred supplier status but also brought forth innovative collaborations.</div>
                </div>
            </div>
            <div class="row section-padding pt-0 d-flex justify-content-around pb-0">
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_1.png" class="client" alt="client 1">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_2.png" class="client" alt="client 2">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_3.png" class="client" alt="client 3">
                </div>
                <div class="col-6 col-md-1 p-md-2 d-flex align-items-center">
                    <img src="img/Company/About/client_4.png" class="client" alt="client 4">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_5.png" class="client" alt="client 5">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_6.png" class="client" alt="client 6">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_7.png" class="client" alt="client 7">
                </div>
                <div class="col-6 col-md-1 p-md-0 d-flex align-items-center">
                    <img src="img/Company/About/client_8.png" class="client" alt="client 8">
                </div>
            </div>

            <div class="row section-padding padding-bottom d-flex justify-content-around mt-md-4 pt-0">
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_9.png" class="client" alt="client 9">
                </div>
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_10.png" class="client" alt="client 10">
                </div>
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_11.png" class="client" alt="client 11">
                </div>
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_12.png" class="client" alt="client 12">
                </div>
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_13.png" class="client" alt="client 13">
                </div>
                <div class="col-6 col-md-2 px-4 d-flex align-items-center">
                    <img src="img/Company/About/client_14.png" class="client" alt="client 14">
                </div>
            </div>
        </div>

        <!-- Founder -->
        <div class="container top-border">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <div class="row section-padding-lg">
                <div class="col-sm-12 col-md-4">
                    <img src="img/Company/About/img_2.jpg" alt="Founder" class="image">
                </div>
                <div class="col-sm-12 col-md-4">
                    <h3>Legacy of the Founder</h3>
                    <p>A tale of relentless pursuit marks the four-decade journey of our founder, Mr. William Ho. From the early days in a compact workshop to becoming a global manufacturing powerhouse, Chi Sing’s story is rich with milestones.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="image-container">
                        <img src="img/Company/About/img_3.jpg" alt="Founder" class="image">
                        <a class="col-md-8 image-button-bottom-right" href="company/history.php">
                            <div class="d-flex justify-content-between w-100">
                                <div class="mb-0 button">HISTORY</div>
                                <div class="mb-0 button">→</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../inc/footer.php'; ?>

    </body>
</html>