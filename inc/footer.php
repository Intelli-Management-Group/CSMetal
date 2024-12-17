<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'inc/HTMLhead.php'; ?>
        <style>
            .footer {
                color: white;
                line-height: 1.8;
            }

            .footer p {
                color: white;
            }

            /* .info-wrap {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: left;
                box-sizing: border-box;
                padding: 0 15px;
            } */

            .info-wrap a {
                color: white;
                text-decoration: none;
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
                flex-wrap: wrap;
            }

            /* .terms li {
                margin-left: 20px;
            }

            @media  only screen and (max-width: 470px) {
                .terms li {
                    margin-left: 20px;
                }
            } */

            .terms a {
                color: white;
                text-decoration: none;
                font-size: 0.8em !important;
                font-weight: 300 !important;
                /* padding: 5px 10px; */
            }

            .terms a.active {
                color: #0c73b2;
            }

            .terms li:first-child {
                width: 100%;
            }
            .terms li:nth-child(3) {
                padding-left: 10px;
            }

            /* .terms a:hover {
                color: #0c73b2;
                text-decoration: none;
            } */

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
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                            <div class="info-wrap location">
                                <h3 class="mb-0">Redefining The Standards in Metal Manufacturing</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-4 p-0">
                            <div class="info-wrap email">
                                <p class="mb-0">2A/F, Phase 1 Kingsford Industrial Bldg., <br>26-32 Kwai Hei St., Kwai Chung Hong Kong</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-2 pl-lg-0 pl-md-3 p-0">
                            <div class="info-wrap phone">
                                <a href="tel:+85226143700">+852-2614-3700</a><br>
                                <a href="mailto:factory@chising.com.hk">factory@chising.com.hk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="m-0" style="background-color: #4b4b4b;">

            <div class="container">
                <div class="footer section-padding">
                    <div class="row">
                        <div class="col-12 p-md-0">
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
            </div>
        </div>

        <button id="scrollToTopBtn" title="Go to top">
            <i class="fas fa-arrow-up"></i>
        </button>

        <script>
            // Get the button
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            // Show button when user scrolls down 100px from top
            // window.onscroll = function() {
            //     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            //         scrollToTopBtn.style.display = "block";
            //     } else {
            //         scrollToTopBtn.style.display = "none";
            //     }
            // };

            window.onscroll = function() {
                const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
                const windowHeight = document.documentElement.clientHeight;
                const documentHeight = document.documentElement.scrollHeight;

                // Show button when scrolled down 100px from top
                if (scrollPosition > 100) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }

                // Hide button near the bottom
                if (window.innerWidth < 576) {
                    if (scrollPosition + windowHeight >= documentHeight - 10) {
                        scrollToTopBtn.style.display = "none";
                    }
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