<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/HTMLhead.php'; ?>
    <title>CS Metal | Custom High-Pressure Manifolds for superior performance</title>
    <meta name="description" content="CS Metal engineers custom manifolds for high-pressure systems, delivering durability & efficiency. Tailored to your specifications – partner with experts.">
    <!-- <style>
        .carousel-control-next,
        .carousel-control-prev ,
        .carousel-indicators {
            filter: invert(100%);
        }
    </style> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        /* Container styling */
        .slick-container {
            width: 100%;
            /* max-width: 600px; */
            margin: auto;
            position: relative;
        }

        .slick-slide img {
            width: 100%;
            /* height: 400px; */
            object-fit: cover;
            position: relative;
        }

        /* Position navigation arrows inside the images */
        .slick-prev,
        .slick-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            /* font-size: 24px; */
            z-index: 2;
        }

        .slick-prev {
            left: 10px;
        }

        .slick-next {
            right: 10px;
        }

        .slick-prev:before,
        .slick-next:before {
            color: #0c73b2;
            /* Set your desired color */
            font-size: 24px;
            /* Adjust the size if needed */
        }

        /* Position the dots (pagination) inside the images */
        /* .slick-dots {
            position: absolute;
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
        } */

        /* Customize dots */
        .slick-dots li button:before {
            font-size: 12px;
            color: #ccc;
            opacity: 0.8;
        }

        .slick-dots li.slick-active button:before {
            color: #0c73b2;
        }
    </style>
</head>

<body>
    <?php include '../inc/header.php'; ?>

    <div class="container">
        <div class="row section-padding">
            <div class="col-12 py-0">
                <h1 class="slash-title"><span class="text-color"> / </span><a href="products.php" class="text-color">Products</a><span class="text-color"> / </span>Manifold</h1>
                <div class="title">Custom Manifolds for Superior Performance!</div>
            </div>
        </div>
    </div>

    <!-- banner -->
    <div class="banner-container" style="z-index: -1;">
        <img src="img/Product/Manifold/banner_product_manifold.jpg" alt="Home Banner" class="banner" style="object-position: 60% center;">
    </div>

    <div class="container">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <!-- Intro Section -->
        <div class="row section-padding-lg d-flex justify-content-center" id="intro">
            <div class="col-sm-12 col-md-8 py-0">
                <!-- <p class="mb-3"><span class="text-color">/ </span>Talented and Motivated Workforce</p> -->
                <div class="products-intro">At CS Metal, our custom manifold solutions are designed to handle high-pressure systems and complex tasks; offering superior performance and durability. Our manifolds are tailored to the client’s exact specifications, delivering efficiency and reliability in industrial applications. </div>
            </div>
        </div>

        <!-- Product Section -->

        <div class="slick-container">
            <div>
                <img src="img/Product/Manifold/img_manifold_1.jpg" alt="Image 1">
            </div>
            <div>
                <img src="img/Product/Manifold/img_manifold_2.jpg" alt="Image 2">
            </div>
            <div>
                <img src="img/Product/Manifold/img_manifold_3.jpg" alt="Image 3">
            </div>
            <div>
                <img src="img/Product/Manifold/img_manifold_4.jpg" alt="Image 4">
            </div>
        </div>

        <!-- Become a customer -->
        <div class="row section-padding padding-top padding-bottom pl-0 pr-0">
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center pt-0">
                <img src="img/Product/Stamping/img_customer.png" alt="customer" class="img-fluid">
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 d-flex align-items-center px-sm-5 pb-0">
                <div class="pt-md-4 py-lg-0">
                    <p class="slash-title"><span class="text-color">/ </span>Become a customer</p>
                    <div class="title mt-4 mb-4">Shaping the Future of Metal Manufacturing</div>
                    <p>At CS Metal, we’ve become synonymous with reliability and quality. Shaping the future of metal manufacturing, partner with us to experience exceptional quality and precision in every project.</p>
                    <a href="company/become-a-customer.php" class="underline-link">LET'S TALK &nbsp;&nbsp; <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php include '../inc/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Initialize Slick Carousel -->
    <script>
        $(document).ready(function() {
            $('.slick-container').slick({
                dots: true, // Enable dot indicators
                infinite: true, // Loop through slides infinitely
                speed: 500, // Speed of slide transition
                slidesToShow: 1, // Show one slide at a time
                slidesToScroll: 1, // Scroll one slide at a time
                arrows: false, // Enable left and right arrows
            });
        });
    </script>

</body>

</html>