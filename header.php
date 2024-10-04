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
            }

            .nav-links a.active {
                color: orangered;
            }

            .nav-links a:hover {
                color: orangered;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div style="border-bottom: 1px solid #eee;">
            <div class="container">
                <div class="header">
                    <a href="./index.php" class="logo">
                        <img src="img/Generic/logo.png" alt="Logo">
                    </a>
                    <nav>
                        <ul class="nav-links">
                            <li><a href="./index.php" class="active">HOME</a></li>
                            <li><a href="./about.php">COMPANY</a></li>
                            <li><a href="#">SOLUTIONS</a></li>
                            <li><a href="#">PRODUCTS</a></li>
                        </ul>
                    </nav>
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
        </script>
    </body>
</html>