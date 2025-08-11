<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .footer {
                color: white;
                line-height: 1.8;
            }

            .footer p {
                color: white;
            }

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

            .terms a {
                color: white;
                text-decoration: none;
                font-size: 0.8em !important;
                font-weight: 300 !important;
            }

            .terms li:nth-child(1) a {
                font-size: 1rem !important;
                font-weight: 400 !important;
            }

            .terms li:nth-child(2) {
                padding-left: 25px;
            }

            .terms li:nth-child(3) {
                padding-left: 25px;
            }

            @media  only screen and (max-width: 575px) {
                .terms li:first-child {
                    width: 100%;
                }
                .terms li:nth-child(2) {
                    padding-left: 0;
                }
            }

            #scrollToTopBtn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
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
                    <div class="row section-padding" style="padding-top: 50px; padding-bottom: 50px;">
                        <div class="col-sm-12 col-md-6 col-lg-6 p-0">
                            <div class="info-wrap location pt-0">
                                <h3 class="mb-0">Redefining The Standards in <br class="d-xl-none d-block">Metal Manufacturing</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 p-0">
                            <div class="info-wrap email">
                                Office: <a href="tel:+85226143700">+852-2614-3700</a><br>
                                Factory: <a href="tel:+8676983391265">+86-769-83391265</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2 pl-lg-0 pl-md-3 p-0">
                            <div class="info-wrap phone pb-0">
                                <p class="mb-0">Follow Us:</p>
                                <a href="https://www.linkedin.com/company/cs-metal-int/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin" style="font-size: 32px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="m-0" style="background-color: #4b4b4b;">

            <div class="container">
                <div class="footer section-padding">
                    <div class="row">
                        <div class="col-12 p-sm-0 py-0">
                            <nav>
                                <ul class="terms">
                                    <li class="ml-0">© <?php echo Date('Y'); ?> <a href="index.php">CS Metal</a></li>
                                    <li><a href="terms.php">Terms of Use</a></li>
                                    <li><a href="privacy.php">Privacy Policy</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button id="scrollToTopBtn" title="Go to top">
            <i class="fa-solid fa-arrow-up"></i>
        </button>

        <script>
            // Get the button
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

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