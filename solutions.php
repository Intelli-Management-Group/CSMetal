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
        <style>
            .solution-banner {
                background-image: url('./img/Solution/bannes_solutions.jpg');
                background-size: cover;
                background-position: center;
                transition: background-size 0.2s ease; 
                width: 100%;
            }
            .ourProducts-banner{
                background-image: url('./img/Solution/ricardo-gomez.webp');
                background-size: cover;
                background-position: center;
                width: 100%;
            }
            .ourProducts-container {
                height: 55vh !important; 
                overflow: hidden; 
                position: relative;
            }

            .banner-container {
                height: 45vh !important; 
                overflow: hidden; 
            }


            /*  */
            .borders{
                border: 1px solid #ccc;
                
            }
            .appliance-card {
                padding: 35px; 
                background-color: white; 
                transition: background-color 0.3s ease; 
                text-transform: uppercase;
                display: flex; 
                align-items: center;
                justify-content: center;
                /* height: 100%;  */
                min-height:150px;
                flex-wrap: wrap;
                text-align:center;
            }

            .appliance-card:hover {
                background-color: lightgray;
            }
            .appliancesBg, .automotiveBg, .cncBg, .cncturningBg, .constructionBg, .electricalBg, .electricaDischargelBg,
            .sustainable_steelBg, .service_centersBg, .packagingBg, .miningBg, .industrialBg,
            .gear_hobbinBg, .europeBg, .energyBg
             {
                background-size: cover;  
                background-position: center;  
                width: 100%;
                height: 100%;
            }
            .automotiveBg{
                background-image: url('./img/Solution/automotive.webp');
              
            }

            .appliancesBg {
                background-image: url('./img/Solution/appliances.webp');
                
            }
            .cncBg{
                background-image: url('./img/Solution/cnc.webp');`
            }
            .cncturningBg{
                background-image: url('./img/Solution/cnc_turning.jpg');

            }
            .constructionBg{
                
                background-image: url('./img/Solution/construction.webp');
            }
            .electricalBg{
                background-image: url('./img/Solution/electrical.webp');
            }
            .electricaDischargelBg{
                background-image: url('./img/Solution/ecd.jpg');

            }
            .energyBg{
                background-image: url('./img/Solution/energy.jpg');

            }
            .europeBg{                
                background-image: url('./img/Solution/europe.webp');
            }
            .gear_hobbinBg{                
                background-image: url('./img/Solution/gear_hobbin.jpg');
            }
            .industrialBg{                
                background-image: url('./img/Solution/industrial.webp');
            }
            .miningBg{                
                background-image: url('./img/Solution/mining.webp');
            }
            .packagingBg{
                background-image: url('./img/Solution/packaging.webp');
            }
            .service_centersBg{                
                background-image: url('./img/Solution/service_centers.webp');
            }
            .sustainable_steelBg{
                background-image: url('./img/Solution/sustainable_steel.webp');
            }

            /*  */
            .balackbg{
                background-color:#000000 !important;
                color:white !important;
            }


            

            @media only screen and (max-width: 768px) {
   
                .appliance-card > h3 {
                    font-size: 12px; 
                }

            }
            .form-control:focus  {
                box-shadow:none !important;
            }

            .btnBg {
                position: relative; 
                overflow: hidden; 
                color: white;
            }

            .btnBg::after {
                content: '';
                position: absolute; 
                top: 0;
                left: -100%; 
                width: 100%;
                height: 100%;
                background-color: orangered; 
                transition: left 0.4s ease; 
                z-index: 0; 
               
            }

            .btnBg:hover::after {
                left: 0; 
            }
            .btnBg:hover {
                color: white; 
            }
            button > a {
                position: relative;
                z-index: 99;
            }
            .leftBorder{
                border-left: 2px solid #fff !important;
            }
        </style>

    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>
            <div class="row section-padding">
                <div class="col-sm-8">
                    <h5><span class="text-color">/ </span>Solutions</h5>
                    <div class="display-4">Tailored Steel Solutions</div>
                </div>
            </div>
        </div>

        <!-- banner -->
        <div class="banner-container solution-banner"> 
            <div class="container">
                <div class="row">
                    <a class="col-sm-4 image-button-white" href="">
                        <div class="d-flex justify-content-between w-100">
                            <h5 class="mb-0">FIND OUT MORE</h5>
                            <h5 class="mb-0">↘</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="line line-left"></div>
            <div class="line line-1-3"></div>
            <div class="line line-2-3"></div>
            <div class="line line-right"></div>

            <div class="row section-padding">
                <div class="col-sm-12 col-md-4">
                    <h4>We supply a full range of products</h4>
                </div>
                <div class="col-sm-12 col-md-4">
                    <p>Companies that own or lease distribution facilities and warehouses are dedicated to optimizing operational efficiency and maximizing storage capacity. A maze of equipment, vehicles, and platforms within these complex structures supports customers’ operations and maintenance.</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <p>At Fabrik, our engineering and sales teams collaborate closely with integration teams to deliver meticulously planned, coordinated solutions prioritizing operational efficiency and cost-effectiveness for our customers.</p>
                </div>
            </div>

            <!-- Company Profile -->
            <div class="row section-padding pb-0">
                <!-- Row 1 -->
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-sm-10 col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Appliances</h3>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 pl-0 pr-0">
                           <div class="appliancesBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Automotive</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="automotiveBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>CNC milling</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="cncBg"></div>
                        </div>
                    </div>
                </div>
                 <!-- Row 2 -->
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>CNC turning</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="cncturningBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Construction </h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="constructionBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Electrical</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="electricalBg"></div>
                        </div>
                    </div>
                </div>
                 <!-- Row 3 -->
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Electrical Discharge</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="electricaDischargelBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Energy</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="energyBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Europe</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="europeBg"></div>
                        </div>
                    </div>
                </div>
                 <!-- Row 4 -->
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Gear Hobbin</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="gear_hobbinBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Industrial</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="industrialBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Mining</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="miningBg"></div>
                        </div>
                    </div>
                </div>
                 <!-- Row 5 -->
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Packaging</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="packagingBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Service Centers</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="service_centersBg"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="row borders">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="appliance-card">
                                <h3>Sustainable Steel</h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class="sustainable_steelBg"></div>
                        </div>
                    </div>
                </div>
                <!-- Row 6 -->
                <div class="col-sm-12 col-md-4 pb-5">
                    <div class="row ">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-5">
                    <div class="row ">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 pb-5">
                    <div class="row ">
                        <div class="col-md-8 pl-0 pr-0">
                            <div class="">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="col-md-4 pl-0 pr-0">
                           <div class=""></div>
                        </div>
                    </div>
                </div>               
            </div>
            <div class="row">
                <div class="col-12 text-center p-3">
                    <h2>QUALITY PRODUCTS START WITH QUALITY STEEL</h2>
                </div>
            </div>
            <div class="ourProducts-container ourProducts-banner mb-5"> 
                <div class="container">
                    <div class="row">
                        <a class="col-sm-4 image-button-white balackbg" href="">
                            <div class="d-flex justify-content-between w-100">
                                <h5 class="mb-0">FIND OUT MORE</h5>
                                <h5 class="mb-0">↘</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- <div class="image-container">
                <img src="img/Company/About/img_1.png" alt="about" class="image">
                <div class="col-sm-4 solutions py-5">
                    <h5 class="mb-0"><span class="text-color">/ </span>Experience. Transparency. Results.</h5>
                </div>
            </div> -->

            <!-- Company Strength -->
            <!-- <div class="container"> -->
            <!-- <div class="row section-padding">
                <div class="col-sm-12 col-md-4" style="margin-top: -50px;">
                    <div class="display-3">25K</div>
                    <p>Unique Products Manufactured</p>
                </div>
                <div class="col-sm-12 col-md-4" style="margin-top: 50px;">
                    <div class="display-3">10K</div>
                    <p>Quality Inspections Yearly Average</p>
                </div>
                <div class="col-sm-12 col-md-4" style="margin-top: 150px;">
                    <div class="display-3">400+</div>
                    <p>Active Suppliers</p>
                </div>
            </div> -->
        </div>

        <div style="background-color:black;">
            <div class="container">
                <div class=footer>
                    <div class="row section-padding justify-content-between">
                        <div class="col-sm-12 col-md-6 pl-0 pr-0">
                            <div class="display-4 upparCasetextTransform ">Pioneering a New Era of Steelworking Excellence</div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <p>Weekly industry insights delivered to your inbox.</p>
                            <form action="/subscribe" method="post" class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="input-group" style="border: 1px solid #fff">
                                            <input type="email" class="form-control border-0" placeholder="Add your email Address" aria-label="Subscriber email" required style="background-color: transparent;">
                                            <button class="btn btnBg leftBorder text-white" type="submit">
                                                <a class="text-white">Subscribe</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="row section-padding">
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap location text-left">
                                <h5 class="m-0">41088 Chagrin Boulevard #120 Cleveland, OH 44124</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap email">
                                <h5 class="m-0">office@fabrik.com</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 pl-0 pr-0">
                            <div class="info-wrap phone">
                                <h5 class="m-0">+1 440 848 8222</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div style="padding: 100px;"></div>
            

        <?php include 'footer.php'; ?>
        <script>
            window.addEventListener('scroll', function() {
                const banner = document.querySelector('.solution-banner');
                const scrollPosition = window.scrollY;

                // Calculate zoom level based on scroll position
                const zoomLevel = 1 + (scrollPosition / 1000); // Adjust divisor to control zoom speed

                // Limit the maximum zoom level to prevent excessive zoom
                const maxZoomLevel = 1.1; // Set a maximum zoom level (e.g., 10% zoom)
                banner.style.backgroundSize = `${Math.min(zoomLevel, maxZoomLevel) * 100}%`; // Set background size
            });
        </script>


    </body>
</html>