<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CS Metal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <style>
        
        .productsDetails-banner {
            background-image: url('./img/Product/Diecast/banner_product_diecast.jpg');
                background-size: cover;
                background-position: center;
                transition: background-size 0.2s ease; 
                width: 100%;
            }
    
            .banner-container {
                height: 45vh !important; 
                overflow: hidden; 
            }
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
                <h5><span class="text-color">/ </span>Diversity & Inclusion</h5>
                <h1 class="display-4">Diverse talent enables smarter steels</h1>
            </div>
        </div>
    </div>

    <!-- banner -->
    <div class="banner-container productsDetails-banner">
        <div class="container">
            <div class="row">
                <a class="col-sm-4 image-button-white" href="">
                    <div class="d-flex justify-content-between w-100">
                        <h5 class="mb-0">LEARN MORE</h5>
                        <h5 class="mb-0">↘</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <!-- Intro Section -->
        <div class="section-padding">
            <div style="padding: 5% 15% 5% 15%;">
                <h5><span class="text-color">/ </span>Talented and Motivated Workforce</h5>
                <h4>Fabrik’s mission centers on crafting intelligent steels that benefit both humanity and the planet. Achieving this ambition hinges on attracting and retaining top-tier talent. Our success in this endeavor rests on fostering an inclusive workplace where every team member feels esteemed and empowered. </h4>
            </div>
        </div>

        <div class="container">
            <div class="row p-3">
                <div class="col-sm-12 col-md-6 section-padding">
                    <img src="./img/Product/Diecast/img_diecast_1.jpg" alt="product 3" width="100%">
                </div>
                <div class="col-sm-12 col-md-6" style="background-color: black;">
                    <div class="text-white" style="padding: 15%;">
                        <h1>STAMPING PRODUCTS</h1>
                        <div class="row section-padding" style="line-height: 3.5;">
                            <div class="col-sm-12 col-md-6">
                                <div>Hinges</div>
                                <div>Brackets</div>
                                <div>Wire Mesh</div>
                                <div>Hood Fan Accessory</div>
                                <div>Stamping Parts</div>
                                <div>Aluminnum Stamping Parts</div>
                                <div>Chassis Atamping</div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div>Stamping Panels</div>
                                <div>Rings</div>
                                <div>Stamping Cooktop</div>
                                <div>Stamping Bowl</div>
                                <div>Stamping Vent Trim</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-5">
                <div class="row section-padding pl-0 pr-0">
                    <div class="col-sm-12 col-md-6">
                        <img src="./img/Product/Diecast/img_diecast_2.jpg" alt="image 2" style="width: 100%;">
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center">
                        <div class="p-5">
                            <h5><span class="text-color">/ </span>Become a customer</h5>
                            <h3 class="mt-5 mb-5">LEADING THE WAY TO THE FUTURE</h3>
                            <p>Fabrik blends steel technology leadership with outstanding problem-solving capabilities to support customers and suppliers in shaping the future of automotive transportation.</p>
                            <a href="" class="underline-link">LET'S TALK →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include 'footer.php'; ?>

    <script>
            window.addEventListener('scroll', function() {
                const banner = document.querySelector('.productsDetails-banner');
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