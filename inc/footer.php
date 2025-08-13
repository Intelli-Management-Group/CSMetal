<footer style="background-color:black;" id="main-footer">
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
</footer>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>