<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'inc/HTMLhead.php'; ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo {
                padding: 10px 30px;
            }

            .logo img {
                width: auto;
                max-height: 80px;
            }

            nav {
                display: flex;
            }

            .nav-links {
                display: flex;
                list-style: none;
                align-items: center;
                margin: 0;
                padding: 0;
                /* height: 100px; */
            }

            .nav-links li {
                padding: 6px 20px;
                height: 100%;
            }

            /* .nav-links li:hover {
                border-top: 4px solid #0c73b2;
                padding-top: 2px;
            } */

            .nav-links a {
                color: black;
                text-decoration: none;
                font-size: 16px;
                /* text-transform: uppercase; */
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                /* font-weight: bold !important;
                letter-spacing: 1px; */
            }

            .nav-links a.active {
                color: #0c73b2;
            }

            .nav-links a:hover {
                color: #0c73b2;
                text-decoration: none;
            }

            .first-nav {
                color: black;
                text-decoration: none;
                font-size: 16px;
                /* text-transform: uppercase; */
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
                font-weight: 300 !important;
                letter-spacing: 1px;
            }

            .first-nav.active {
                color: #0c73b2;
            }

            .first-nav:hover {
                color: #0c73b2;
                text-decoration: none;
            }

            #company-nav {
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            #company-nav.show {
                display: block;
                opacity: 1;
            }

            #solutions-nav {
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            #solutions-nav.show {
                display: block;
                opacity: 1;
            }

            #products-nav {
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            #products-nav.show {
                display: block;
                opacity: 1;
            }

            #facilities-nav {
                display: none;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            #facilities-nav.show {
                display: block;
                opacity: 1;
            }

            .menu-wrap {
                position: absolute;
                background-color: white;
                z-index: 10;
                width: 100%;
                height: 265px;
            }

            .menu-container {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .desktop-nav {
                display: none;
            }

            .mobile-nav {
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                background-color: black;
            }

            .navbar {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .drop-shadow {
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            }

            @media screen and (max-width: 991px) {
                .nav-links li {
                    padding: 6px 12px;
                }
            }

            @media screen and (min-width: 768px) {
                .desktop-nav {
                    display: block;
                }
                .mobile-nav {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
        <!-- desktop nav bar -->
        <div class="bottom-border desktop-nav drop-shadow">
            <div class="header container" id="nav">
                <a href="./index.php" class="logo">
                    <img src="img/Generic/logo_emblem.png" alt="Logo">
                </a>
                <nav>
                <!-- center align the nav -->
                    <ul class="nav-links" style="height: 100px;">
                        <li><a href="./index.php" class="first-nav active">HOME</a></li>
                        <li id="company-link"><a href="company/about.php" class="first-nav">COMPANY</a></li>
                        <li id="solutions-link"><a href="solutions.php" class="first-nav">SOLUTIONS</a></li>
                        <li id="products-link"><a href="products.php" class="first-nav">PRODUCTS</a></li>
                        <!-- <li id="facilities-link"><a href="#" class="first-nav">FACILITIES</a></li> -->
                        <li><a href="./contact.php" class="text-nowrap first-nav">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- mobile nav -->
        <div class="mobile-nav bottom-border">
            <nav class="navbar navbar-expand-xl navbar-light bg-white">
                <a href="./index.php" class="logo">
                    <img src="img/Generic/logo_emblem.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="company/about.php">About Us</a>
                                <a class="dropdown-item" href="company/history.php">History</a>
                                <a class="dropdown-item" href="company/awards.php">Awards</a>
                                <a class="dropdown-item" href="company/become-a-customer.php">Become a Customer</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Solutions
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="solutions.php">All Solutions</a>
                                <a class="dropdown-item" href="solutions/inspection.php">Inspection</a>
                                <a class="dropdown-item" href="solutions/machine.php">Machines</a>
                                <a class="dropdown-item" href="solutions/testing.php">Testing</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="products.php">All Products</a>
                                <a class="dropdown-item" href="products/stamping-parts.php">Stamping Parts</a>
                                <a class="dropdown-item" href="products/handles.php">Handles</a>
                                <a class="dropdown-item" href="products/die-cast.php">Die Cast</a>
                                <a class="dropdown-item" href="products/manifold.php">Manifold</a>
                                <a class="dropdown-item" href="products/advertising.php">Advertising Fixtures & OEM Products</a>
                            </div>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Facilities
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Assembly Department</a>
                                <a class="dropdown-item" href="#">Cargo Loading</a>
                                <a class="dropdown-item" href="#">Dust-free Stamping Area</a>
                                <a class="dropdown-item" href="#">Engineering Course Tooling Room</a>
                                <a class="dropdown-item" href="#">Laboratory</a>
                                <a class="dropdown-item" href="#">Measuring Chamber</a>
                                <a class="dropdown-item" href="#">Polishing Area</a>
                                <a class="dropdown-item" href="#">Stamping Area</a>
                            </div>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Company -->
        <div class="menu-wrap bottom-border drop-shadow" id="company-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>CELEBRATING OUR LEGACY, CRAFTING THE FUTURE</h4>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="company/about.php">About</a></li>
                            <li><a href="company/history.php">History</a></li>
                            <li><a href="company/awards.php">Awards</a></li>
                            <li><a href="company/become-a-customer.php">Become a Customer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="img/Company/img_company.jpg" alt="history" style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Solutions -->
        <div class="menu-wrap bottom-border drop-shadow" id="solutions-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>EXCEPTIONAL QUALITY AND INNOVATION IN EVERY SOLUTION</h4>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="solutions/inspection.php">Inspection</a></li>
                            <li><a href="solutions/machine.php">Machines</a></li>
                            <li><a href="solutions/testing.php">Testing</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="#">GOM Scan</a></li>
                            <li><a href="#">Inspector</a></li>
                            <li><a href="#">Spectralight QC Machine</a></li>
                            <li><a href="#">CS Metal Quality Management System (QMS) Overview</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="img/Solution/img_solution.jpg" alt="cnc_turning" style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="menu-wrap bottom-border drop-shadow" id="products-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>COMPREHENSIVE PRODUCTS FOR EVERY INDUSTRY NEED</h4>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="products/stamping-parts.php">Stamping Parts</a></li>
                            <li><a href="products/handles.php">Handles</a></li>
                            <li><a href="products/die-cast.php">Die Cast</a></li>
                            <li><a href="products/manifold.php">Manifold</a></li>
                            <li><a href="products/advertising.php">Advertising Fixtures & OEM Products</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="img/Product/Main/img_product.jpg" alt="product" style="height: 200px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <!-- <div class="menu-wrap bottom-border" id="facilities-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>EXCEPTIONAL DRIVING EXPERIENCES THAT ARE KINDER TO THE PLANET</h4>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="#">Assembly Department</a></li>
                            <li><a href="#">Cargo Loading</a></li>
                            <li><a href="#">Dust-free Stamping Area</a></li>
                            <li><a href="#">Engineering Course Tooling Room</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="#">Laboratory</a></li>
                            <li><a href="#">Measuring Chamber</a></li>
                            <li><a href="#">Polishing Area</a></li>
                            <li><a href="#">Stamping Area</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <script>
            //highlight the current page's navigation link
            const currentLocation = window.location.href;
            const menuItem = document.querySelectorAll('.nav-links a');
            const menuLength = menuItem.length;

            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].classList.add('active');
                } else {
                    menuItem[i].classList.remove('active');
                }
            }

            // Get the COMPANY link and the company-nav element
            const companyLink = document.getElementById('company-link');
            const companyNav = document.getElementById('company-nav');

            // Show #company-nav on hover
            companyLink.addEventListener('mouseover', () => {
                companyNav.classList.add('show');
                solutionsNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            //Hide #company-nav when the mouse leaves either the link or the nav
            document.getElementById('nav').addEventListener('mouseout', () => {
                companyNav.classList.remove('show');
            });

            companyNav.addEventListener('mouseover', () => {
                companyNav.classList.add('show');
            });

            companyNav.addEventListener('mouseout', () => {
                companyNav.classList.remove('show');
                solutionsNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            const solutionsLink = document.getElementById('solutions-link');
            const solutionsNav = document.getElementById('solutions-nav');

            solutionsLink.addEventListener('mouseover', () => {
                solutionsNav.classList.add('show');
                companyNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            document.getElementById('nav').addEventListener('mouseout', () => {
                solutionsNav.classList.remove('show');
            });

            solutionsNav.addEventListener('mouseover', () => {
                solutionsNav.classList.add('show');
            });

            solutionsNav.addEventListener('mouseout', () => {
                solutionsNav.classList.remove('show');
                companyNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            const productsLink = document.getElementById('products-link');
            const productsNav = document.getElementById('products-nav');

            productsLink.addEventListener('mouseover', () => {
                productsNav.classList.add('show');
                companyNav.classList.remove('show');
                solutionsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            document.getElementById('nav').addEventListener('mouseout', () => {
                productsNav.classList.remove('show');
            });

            productsNav.addEventListener('mouseover', () => {
                productsNav.classList.add('show');
            });

            productsNav.addEventListener('mouseout', () => {
                companyNav.classList.remove('show');
                solutionsNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

            const facilitiesLink = document.getElementById('facilities-link');
            const facilitiesNav = document.getElementById('facilities-nav');

            facilitiesLink.addEventListener('mouseover', () => {
                facilitiesNav.classList.add('show');
                companyNav.classList.remove('show');
                solutionsNav.classList.remove('show');
                productsNav.classList.remove('show');
            });

            document.getElementById('nav').addEventListener('mouseout', () => {
                facilitiesNav.classList.remove('show');
            });

            facilitiesNav.addEventListener('mouseover', () => {
                facilitiesNav.classList.add('show');
            });

            facilitiesNav.addEventListener('mouseout', () => {
                companyNav.classList.remove('show');
                solutionsNav.classList.remove('show');
                productsNav.classList.remove('show');
                facilitiesNav.classList.remove('show');
            });

        </script>

        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>