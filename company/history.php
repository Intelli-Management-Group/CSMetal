<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/HTMLhead.php'; ?>
    <title>History - CS Metal</title>
    <style>
        div hr {
            border: none !important;
            height: 1px !important;
            background-color: #ccc;
            margin: 5px auto !important;
        }

        p {
            margin-bottom: 0 !important;
            /* text-wrap: balance; */
            /* text-align: left; */
        }

        .horizontal-scroll-container {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            scroll-behavior: smooth;
            padding: 10px;
            border: 1px solid #eee;
            border-top: none;
            height: 600px;
        }

        .scroll-item {
            min-width: 400px;
            height: 462px;
            margin-right: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* justify-content:space-between; */
        }

        .history-text {
            text-align: center;
            padding-top: 70px;
            position: relative;
        }

        .history-line {
            width: 100%;
            height: 1px;
            background-color: #eee;
            margin: 30px 0;
            z-index: 10;
            position: absolute;
            top: 330px;
        }

        @media only screen and (max-width: 767px) {
            .history-line {
                top: 280px;
            }
        }

        .dot {
            color: #0c73b2;
            position: absolute;
            top: 22px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 11;
        }

        .history-logo {
            width: 30px;
            position: absolute;
            top: 19px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 11;
        }

        .scroll-image {
            padding: 0 40px;
            z-index: -1;
        }

        .scroll-image-logo {
            padding: 0 70px;
            margin-bottom: 42px;
            z-index: -1;
        }
    </style>
</head>

<body>
    <?php include '../inc/header.php'; ?>

    <div class="container">
        <div class="row section-padding">
            <div class="col-12 py-0">
                <h1 class="slash-title"><span class="text-color"> / </span><a href="company/about.php" class="text-color">Company</a><span class="text-color"> / </span>History</h1>
                <div class="title">From Humble Beginnings to Global Leadership</div>
            </div>
        </div>
    </div>

    <!-- banner -->
    <div class="banner-container" style="z-index: -1;">
        <img src="./img/Company/History/banner_company_history.jpg" alt="history-banner" class="banner">
    </div>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>

        <!-- Intro Section -->
        <div class="row section-padding" id="intro">
            <div class="col-sm-12 col-md-4 pt-0">
                <p class="slogan">Shaping the future of metal manufacturing with precision and innovation</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <p>With a rich history dating back to its establishment in 1981 in Hong Kong, Chi Sing has been a beacon of innovation and quality in metal manufacturing.</p>
            </div>
            <div class="col-sm-12 col-md-4 pb-0">
                <p>The company’s expansion continued with the opening of its China factory in 1992, marking a significant milestone in its journey towards international growth.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="history-line"></div>
        <div class="horizontal-scroll-container padding-top">

            <div class="scroll-item">
                <img src="./img/Company/History/img_1981.jpg" alt="1981" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">1981</h3>
                    <p>CHI SING opened in Hong Kong</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_1982.jpg" alt="1982" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">1982</h3>
                    <p>COMMODORE C36 stamping parts</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_1992.jpg" alt="1992" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">1992</h3>
                    <p>China factory opened</p>
                    <hr style="width: 150px;">
                    <h3 class="text-color">1992-2002</h3>
                    <p>Begin development of bathroom handles, towel racks, etc</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2003.jpg" alt="2003" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2003</h3>
                    <p>Business with GENERAL ELECTRIC</p>
                    <hr>
                    <p>Electric scooter for SHARPER IMAGE</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2004.jpg" alt="2004" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2004</h3>
                    <p>
                        Business with
                        MABE CELAYA, </br>
                        CHRISTIAN DIOR &
                        JC PENNEY
                    </p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2005.jpg" alt="2005" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2005</h3>
                    <p>Business with TOTO Japan and MIDEA</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2006.jpg" alt="2006" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2006</h3>
                    <p>Business with SAECO Italy to build coffee machines</p>
                    <hr>
                    <p>China factory rename to Williamson MFY.CO.LTD.</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2007.jpg" alt="2007" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2007</h3>
                    <p>Factory expansion from 8000 to 14000 sq. meters</p>
                    <hr style="width: 165px;">
                    <p>Business with LG Korea</p>
                    <hr style="width: 165px;">
                    <p>Won LG Supplier Award</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2009.jpg" alt="2009" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2009</h3>
                    <p>Business with ELECTROLUX home products, USA</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2010.jpg" alt="2010" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2010</h3>
                    <p>Business with ELECTROLUX home products, Mexico</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2011.jpg" alt="2011" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2011</h3>
                    <p>Business with WHIRPOOL</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2012.jpg" alt="2012" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2012</h3>
                    <p>Won GE Supplier Award</p>
                    <hr>
                    <p>Won MABE Supplier Award</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2013.jpg" alt="2013" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2013</h3>
                    <p>Distinguished Supplier Award from MABE</p>
                    <hr>
                    <p>10th Anniversary award from GENERAL ELECTRIC</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2014.jpg" alt="2014" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2014</h3>
                    <p>Business with SCHINDLER ELEVATOR</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2015.jpg" alt="2015" class="image scroll-image-logo">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2015</h3>
                    <p>Business with WEBER GRILL</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2016.jpg" alt="2016" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2016</h3>
                    <p>Learn manufacturing seminar at Toyota factory</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2017.jpg" alt="2017" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2017</h3>
                    <p>2nd time distinguished Supplier Award from General Electric</p>
                </div>
            </div>
            <div class="scroll-item">
                <img src="./img/Company/History/img_2018.jpg" alt="2018" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2018</h3>
                    <p>New process: integrated automatic roll forming and <br> tube cutting system, automatic stamping system</p>
                </div>
            </div>
            <div class="scroll-item mr-0">
                <img src="./img/Company/History/img_2019.jpg" alt="2019" class="image scroll-image">
                <div class="history-text">
                    <img src="./img/Generic/logo_emblem.png" alt="logo" class="history-logo">
                    <h3 class="text-color">2019-2022</h3>
                    <p>Covid-19 did not stop us from producing. <br>No single missing shipments</p>
                </div>
            </div>
        </div>
    </div>


    <?php include '../inc/footer.php'; ?>

    <script>
        const scrollContainer = document.querySelector('.horizontal-scroll-container');

        // Handle mouse wheel scroll
        scrollContainer.addEventListener('wheel', (event) => {
            event.preventDefault();
            scrollContainer.scrollLeft += event.deltaY * 2;
        });

        // Variables to store touch start position
        let startX;
        let scrollLeftStart;

        // Handle touch start event
        scrollContainer.addEventListener('touchstart', (event) => {
            // Get the initial touch position and scroll position
            startX = event.touches[0].pageX;
            scrollLeftStart = scrollContainer.scrollLeft;
        });

        // Handle touch move event
        scrollContainer.addEventListener('touchmove', (event) => {
            // Prevent default behavior for smoother scrolling
            event.preventDefault();
            const x = event.touches[0].pageX;
            const walk = startX - x; // Calculate distance moved in touch
            scrollContainer.scrollLeft = scrollLeftStart + walk * 2;
        });
    </script>


</body>

</html>