<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../HTMLhead.php'; ?>
</head>

<body>
    <?php include '../header.php'; ?>

    <div class="container">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>
        <div class="row section-padding">
            <div class="col-sm-8">
                <p><span class="text-color">/ </span>Handles</p>
                <div class="title">Diverse talent enables smarter steels</div>
            </div>
        </div>
        <div class="row">
            <a class="col-md-4 image-button-white scroll2intro" href="#intro" style="top:100%">
                <div class="d-flex justify-content-between w-100">
                    <h5 class="mb-0">LEARN MORE</h5>
                    <h5 class="mb-0">↘</h5>
                </div>
            </a>
        </div>
    </div>

    <!-- banner -->
    <div class="image-container" style="z-index: -1;">
        <img src="img/Product/Handle/banner_product_handles.jpg" alt="Home Banner" class="banner-container">
    </div>

    <div class="container">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <!-- Intro Section -->
        <div class="row section-padding padding-top d-flex justify-content-center" id="intro">
            <div class="col-sm-12 col-md-8">
                <p class="mb-3"><span class="text-color">/ </span>Talented and Motivated Workforce</p>
                <h3 style="text-transform: uppercase;">Fabrik’s mission centers on crafting intelligent steels that benefit both humanity and the planet. Achieving this ambition hinges on attracting and retaining top-tier talent. Our success in this endeavor rests on fostering an inclusive workplace where every team member feels esteemed and empowered.</h3>
            </div>
        </div>

        <!-- Product Section -->
        <div class="container">
            <div class="row section-padding">
                <div class="product-image-container col-sm-12 col-md-6 col-lg-6 p-0">
                    <img src="img/Product/Handle/img_handle_tubular.jpg" alt="hinge" id="img1" class="active">
                    <img src="img/Product/Handle/img_handle_standoff.jpg" alt="bracket" id="img2">
                    <img src="img/Product/Handle/img_handle_color.jpg" alt="bracket" id="img3">
                    <img src="img/Product/Handle/img_handle_hydroforming.jpg" alt="bracket" id="img4">
                    <img src="img/Product/Handle/img_handle_crs.jpg" alt="bracket" id="img5">
                    <img src="img/Product/Handle/img_handle_brush.jpg" alt="bracket" id="img6">
                    <img src="img/Product/Handle/img_handle_mirror.jpg" alt="bracket" id="img7">
                    <img src="img/Product/Handle/img_handle_brush_mirror.jpg" alt="bracket" id="img8">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6 d-flex align-items-center justify-content-center" style="background-color: #333;">
                    <div class="text-white w-100">
                        <div style="padding: 10%">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title">HANDLES</div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="hover-link" data-target="img1">TUBULAR HANDLES</div>
                                    <div class="hover-link" data-target="img2">HANDLES WITH STANDOFF</div>
                                    <div class="hover-link" data-target="img3">COLOR HANDLES</div>
                                    <div class="hover-link" data-target="img4">HYDRO-FORMING HANDLES</div>
                                    <div class="hover-link" data-target="img5">PRINTING CRS HANDLES</div>
                                    <div class="hover-link" data-target="img6">HANDLES WITH BRUSH FINISH</div>
                                    <div class="hover-link" data-target="img7">HANDLES WITH MIRROR FINISH</div>
                                    <div class="hover-link" data-target="img8">HANDLES WITH BRUSH & MIRROR FINISH</div>
                                </div>
                                <!-- <div class="col-sm-6 col-md-6">
                                    <div class="hover-link" data-target="img5">PRINTING CRS HANDLES</div>
                                    <div class="hover-link" data-target="img6">HANDLES WITH BRUSH FINISH</div>
                                    <div class="hover-link" data-target="img7">HANDLES WITH MIRROR FINISH</div>
                                    <div class="hover-link" data-target="img8">HANDLES WITH BRUSH & MIRROR FINISH</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Become a customer -->
            <div class="row section-padding padding-bottom pl-0 pr-0">
                <div class="col-sm-12 col-md-6 pr-0">
                    <div class="image-container">
                        <img src="img/Product/Stamping/img_customer.jpg" alt="image 2" class="banner-container">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 d-flex align-items-center px-5">
                    <div>
                        <p><span class="text-color">/ </span>Become a customer</p>
                        <div class="title mt-4 mb-4">LEADING THE WAY TO THE FUTURE</div>
                        <p>Fabrik blends steel technology leadership with outstanding problem-solving capabilities to support customers and suppliers in shaping the future of automotive transportation.</p>
                        <a href="company/become-a-customer.php" class="underline-link">LET'S TALK →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 
    <script>
        document.querySelector(".image-button-white").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("intro").scrollIntoView({ behavior: "smooth" });
        });
    </script> -->

    <?php include '../footer.php'; ?>

</body>

</html>