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
            .footer {
                color: white;
            }

            .info-wrap {
                display: flex;
                border: 1px solid #eee;
                padding: 50px;
                align-items: center;
                justify-content: center;
                text-align: center;
                box-sizing: border-box;
                height: 200px;
            }

            .email {
                border-left: none;
            }

            .phone {
                border-left: none;
            }

            nav {
                display: flex;
            }

            .terms {
                display: flex;
                list-style: none;
                align-items: center;
                margin: 0;
                padding: 0;
            }

            .terms li {
                margin-left: 20px;
            }

            .terms a {
                color: white;
                text-decoration: none;
                font-size: 16px;
                padding: 5px 10px;
            }

            .terms a.active {
                color: orangered;
            }

            .terms a:hover {
                color: orangered;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div style="background-color:black;">
            <div class="container">
                <div class=footer>
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-6 pl-0 pr-0">
                            <h1>Pioneering a New Era of Steelworking Excellence</h1>
                        </div>
                    </div>
                    
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap location">
                                <h2>Location</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap email">
                                <h2>Email</h2>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap phone">
                                <h2>Phone Number</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="background-color: #eee; margin:0;">

            <div class="container">
                <div class="footer section-padding pl-0">
                    <nav>
                        <ul class="terms">
                            <li class="ml-0">© <?php echo Date('Y'); ?> CS Metal</li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </body>
</html>