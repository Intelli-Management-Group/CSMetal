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
                border: 1px solid #4b4b4b;
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
                    border-left: 1px solid #4b4b4b;
                    border-top: none;
                }

                .phone {
                    border-left: 1px solid #4b4b4b;
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
                color: #0c73b2;
            }

            .terms a:hover {
                color: #0c73b2;
                text-decoration: none;
            }

            #scrollToTopBtn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none; /* Hidden by default */
                background-color: #0c73b2;
                color: white;
                padding: 10px 18px;
                border: none;
                border-radius: 5px;
                font-size: 18px;
                cursor: pointer;
                z-index: 1000;
            }

            #scrollToTopBtn:hover {
                color: #0c73b2;
                background-color: white;
                border: 1px solid #0c73b2;
            }
        </style>
    </head>
    <body>
        <div style="background-color:black;">
            <div class="container">
                <div class="footer">
                    <div class="row section-padding padding-top">
                        <div class="col-sm-12 col-md-12 pl-0 pr-0">
                            <div class="title">Pioneering a New Era of Steelworking Excellence</div>
                        </div>
                    </div>
                    
                    <div class="row section-padding pt-0">
                        <div class="col-sm-12 col-md-4 p-0">
                            <div class="info-wrap location">
                                <h3>2A/F, Phase 1 Kingsford Industrial Bldg., 26-32 Kwai Hei St., Kwai Chung Hong Kong</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 p-0">
                            <div class="info-wrap email">
                                <h3>office@fabrik.com</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 p-0">
                            <div class="info-wrap phone">
                                <h3>+852-2614-3700</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="m-0" style="background-color: #4b4b4b;">

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

        <button id="scrollToTopBtn" title="Go to top">
            <i class="fas fa-arrow-up"></i>
        </button>

        <script>
            // Get the button
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // Show button when user scrolls down 100px from top
            window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            };

            // Scroll to the top of the document when the button is clicked
            scrollToTopBtn.onclick = function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            };

        </script>

    </body>
</html>