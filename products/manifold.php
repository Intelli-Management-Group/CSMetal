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
                <p><span class="text-color">/ </span>Manifold</p>
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
        <img src="img/Product/Manifold/banner_product_manifold.jpg" alt="Home Banner" class="banner-container">
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
                <div class="product-image-container manifold-image-container col-sm-12 col-md-12 col-lg-8 p-0">
                    <img src="img/Product/Manifold/img_manifold_1.jpg" alt="manifold_1" id="img1" class="active">
                    <img src="img/Product/Manifold/img_manifold_2.jpg" alt="manifold_2" id="img2">
                    <img src="img/Product/Manifold/img_manifold_3.jpg" alt="manifold_3" id="img3">
                    <img src="img/Product/Manifold/img_manifold_4.jpg" alt="manifold_4" id="img4">
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 d-flex align-items-center justify-content-center" style="background-color: #333;">
                    <div class="text-white w-100">
                        <div style="padding: 10%">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title">MANIFOLD</div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="hover-link" data-target="img1">MANIFOLD 1</div>
                                    <div class="hover-link" data-target="img2">MANIFOLD 2</div>
                                    <div class="hover-link" data-target="img3">MANIFOLD 3</div>
                                    <div class="hover-link" data-target="img4">MANIFOLD 4</div>
                                </div>
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