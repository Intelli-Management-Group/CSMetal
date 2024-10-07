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
                padding: 10px 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
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
            }

            .nav-links li {
                margin-left: 20px;
            }

            .nav-links a {
                color: black;
                text-decoration: none;
                font-size: 16px;
                padding: 5px 10px;
                text-transform: uppercase;
            }

            .nav-links a.active {
                color: #005399;
            }

            .nav-links a:hover {
                color: #005399;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div style="border-bottom: 1px solid #eee;">
            <div class="container">
                <div class="header" id="nav">
                    <a href="./index.php" class="logo">
                        <img src="img/Generic/logo.png" alt="Logo">
                    </a>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="./index.php" class="active">HOME</a></li>
                            <li><a href="./about.php" id="company-link">COMPANY</a></li>
                            <li><a href="./solutions.php">SOLUTIONS</a></li>
                            <li><a href="./products.php">PRODUCTS</a></li>
                            <li><a href="#">FACILITIES</a></li>
                            <li><a href="./contact.php" class="text-nowrap">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Conpany -->
        <div class="container" id="company-nav">
            <div class="row">
                <div class="col-md-4">
                    <h4>ADVANCING THE ART OF STEEL MANUFACTURING</h4>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li><a href="./about.php">About</a></li>
                        <li><a href="./history.php">History</a></li>
                        <li><a href="./awards.php">Awards</a></li>
                        <li><a href="#">Become a Customer</a></li>
                    </ul>
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
                companyNav.classList.add('show'); // Add the show class to display the company-nav
            });

            // Hide #company-nav when the mouse leaves either the link or the nav
            // document.getElementById('nav').addEventListener('mouseout', () => {
            //     companyNav.classList.remove('show'); // Remove the show class
            // });

            companyNav.addEventListener('mouseover', () => {
                companyNav.classList.add('show'); // Keep it visible while hovering over company-nav
            });

            companyNav.addEventListener('mouseout', () => {
                companyNav.classList.remove('show'); // Hide it when the mouse leaves company-nav
            });

        </script>
    </body>
</html>