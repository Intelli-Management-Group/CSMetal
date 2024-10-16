<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'HTMLhead.php'; ?>
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

            @media only screen and (max-width: 767px) {
                .email {
                    border-left: 1px solid #eee;
                    border-top: none;
                }

                .phone {
                    border-left: 1px solid #eee;
                    border-top: none;
                }
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
                color: #005399;
            }

            .terms a:hover {
                color: #005399;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div style="background-color:black;">
            <div class="container">
                <div class="footer">
                    <div class="row section-padding padding-top">
                        <div class="col-sm-12 col-md-6 pl-0 pr-0">
                            <div class="title">Pioneering a New Era of Steelworking Excellence</div>
                        </div>
                    </div>
                    
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap location">
                                <h3>41088 Chagrin Boulevard #120 Cleveland, OH 44124</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap email">
                                <h3>office@fabrik.com</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap phone">
                                <h3>+1 440 848 8222</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="m-0" style="background-color: #eee;">

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