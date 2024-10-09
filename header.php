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
        <!-- <link rel="apple-touch-icon" sizes="180x180" href="./img/icons/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/icons/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/icons/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/icons/favicon/site.webmanifest"> -->
        <style>
            .header {
                display: flex;
                /* justify-content: space-between; */
                align-items: center;
            }

            .logo {
                padding: 10px 30px;
            }

            .logo img {
                max-width: 150px;
                height: auto;
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

            .nav-links a {
                color: black;
                text-decoration: none;
                font-size: 16px;
                /* text-transform: uppercase; */
                height: 100%;
                width: 100%;
                display: flex;
                align-items: center;
            }

            .nav-links a.active {
                color: #005399;
            }

            .nav-links a:hover {
                color: #005399;
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
        </style>
    </head>
    <body>
        <!-- nav bar -->
        <div class="border-bottom">
            <!-- <div class="container"> -->
            <div class="header" id="nav">
                <a href="./index.php" class="logo">
                    <img src="img/Generic/logo.png" alt="Logo">
                </a>
                <nav style="position: absolute; left: 50%; transform: translateX(-50%);">
                <!-- center align the nav -->
                    <ul class="nav-links" style="height: 100px;">
                        <li><a href="./index.php" class="active">HOME</a></li>
                        <li id="company-link"><a href="./about.php">COMPANY</a></li>
                        <li id="solutions-link"><a href="./solutions.php">SOLUTIONS</a></li>
                        <li id="products-link"><a href="./products.php">PRODUCTS</a></li>
                        <li id="facilities-link"><a href="#">FACILITIES</a></li>
                        <li><a href="./contact.php" class="text-nowrap">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
            <!-- </div> -->
        </div>

        <!-- Company -->
        <div class="menu-wrap border-bottom" id="company-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row section-padding w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>ADVANCING THE ART OF STEEL MANUFACTURING</h4>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="./about.php">About</a></li>
                            <li><a href="./history.php">History</a></li>
                            <li><a href="./awards.php">Awards</a></li>
                            <li><a href="#">Become a Customer</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Solutions -->
        <div class="menu-wrap border-bottom" id="solutions-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="line line-2-3"></div>
                <div class="row section-padding w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>STEELMAKING QUALITY AND INNOVATION</h4>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="./solutionInspection.php">Quality Check / Inspection</a></li>
                            <li><a href="#">Machines</a></li>
                            <li><a href="#">Testing</a></li>
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
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="menu-wrap border-bottom" id="products-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row section-padding w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>SUSTAINABLE STEEL FOR A STRONGER TOMORROW</h4>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="./productsDetail.php">Stamping Parts</a></li>
                            <li><a href="#">Handles</a></li>
                            <li><a href="#">Die Cast</a></li>
                            <li><a href="#">Manifold</a></li>
                            <li><a href="#">Advertising Fixtures & OEM Products</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>

        <!-- Facilities -->
        <div class="menu-wrap border-bottom" id="facilities-nav">
            <div class="container menu-container">
                <div class="line line-1-3"></div>
                <div class="row section-padding w-100">
                    <div class="col-md-4 d-flex align-items-center">
                        <h4>EXCEPTIONAL DRIVING EXPERIENCES THAT ARE KINDER TO THE PLANET</h4>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="#">Assembly Department</a></li>
                            <li><a href="#">Cargo Loading</a></li>
                            <li><a href="#">Dust-free Stamping Area</a></li>
                            <li><a href="#">Engineering Course Tooling Room</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav-links flex-column align-items-start">
                            <li><a href="#">Laboratory</a></li>
                            <li><a href="#">Measuring Chamber</a></li>
                            <li><a href="#">Polishing Area</a></li>
                            <li><a href="#">Stamping Area</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

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
    </body>
</html>