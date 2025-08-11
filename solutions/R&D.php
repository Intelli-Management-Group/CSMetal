<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/HTMLhead.php'; ?>
    <title>CS Metal R&D | Innovative Metal Fabrication Solutions</title>
    <meta name="description" content="Turning Your Vision Into Reality. Our APQP and NPI frameworks mitigate risks, ensure compliance, and deliver end-to-end innovation for scalable solutions.">
    <style>
        hr {
            margin: 1rem 0 !important;
            background-color: #444 !important;
        }

        ul {
            padding-left: 18px;
        }
    </style>
</head>

<body>
    <?php include '../inc/header.php'; ?>
    <!-- intro -->
    <div class="container">
        <div class="row section-padding">
            <div class="col-md-8 py-0">
                <h1 class="slash-title"><span class="text-color"> / </span><a href="solutions.php" class="text-color">Solutions</a><span class="text-color"> / </span>R&D</h1>
                <div class="title">Where Ideas Take Shape With Precision.</div>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container">
            <div class="row section-padding-lg">
                <div class="col-xl-5 col-lg-6">
                    <p class="slash-title"><span class="text-color">/ </span>Our R&D Capabilities</p>
                    <div class="title mb-5">Turning Your Vision into Reality</div>
                    <div class="w-100">
                        <hr>
                        <div class="toggle-container">
                            <h3>Design & Engineering Excellence</h3>
                            <i class="fa-solid fa-angle-right toggle-arrow"></i>
                        </div>
                        <p class="toggle-content">Our team specializes in custom solutions for manual and progressive dies, tackling simple or complex challenges with innovation.</p>
                        <hr>

                        <div class="toggle-container">
                            <h3>State-of-the-Art Tools</h3>
                            <i class="fa-solid fa-angle-right toggle-arrow"></i>
                        </div>
                        <p class="toggle-content">Advanced software (AutoCAD, Pro-E, SolidWorks) enables precise 3D models and blueprints for flawless fabrication.</p>
                        <hr>

                        <div class="toggle-container">
                            <h3>Precision Tooling</h3>
                            <i class="fa-solid fa-angle-right toggle-arrow"></i>
                        </div>
                        <p class="toggle-content">Imported wire-cut machines (750x400mm workspace) deliver tools and dies with unmatched accuracy and durability.</p>
                        <hr>

                        <div class="toggle-container">
                            <h3>Advanced Manufacturing Equipment</h3>
                            <i class="fa-solid fa-angle-right toggle-arrow"></i>
                        </div>
                        <div class="toggle-content">
                            <ul>
                                <li><p class="mb-0">CNC machines</p></li>
                                <li><p class="mb-0">Lathe, milling, and drilling machines</p></li>
                                <li><p class="mb-0">Custom machining tools</p></li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-flex align-items-center justify-content-center">
                    <img src="img/Solution/R&D/img_1.png" alt="R&D" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-right"></div>
        <div class="text-center">
            <div class="title section-padding">Structured Development Frameworks</div>
        </div>
    </div>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-right"></div>
        <div class="row section-padding">
            <div class="col-md-4 d-flex align-items-center">
                <div>
                    <div class="title-no-transform pb-3">APQP (Quality Planning)</div>
                    <p class="mb-0">APQP provides a proven roadmap to mitigate risks and ensure compliance throughout product and project development.</p>
                </div>
            </div>

            <div class="col-md-8">
                <img src="img/Solution/R&D/CS_Flowchart_apqp.png" alt="apqp" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>
        <div class="row section-padding py-0">
            <div class="col-md-8 px-0">
                <img src="img/Solution/R&D/cs_flowchart_npi.png" alt="new product introduction" class="img-fluid">
            </div>

            <div class="col-md-4 d-flex align-items-center">
                <div>
                    <div class="title-no-transform pb-3">New Product Introduction (NPI)</div>
                    <p class="mb-0">Our NPI process accelerates innovation without compromising precision.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container bottom-border">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>
        <div class="row section-padding pb-0">
            <div class="col-sm-12 col-md-4 py-0">
                <div class="title pb-3">Partner With Confidence</div>
            </div>
        </div>
        <div class="row section-padding">
            <div class="col-sm-12 col-md-4">
                <div class="our-edge-wrap">
                    <img src="img/Solution/R&D/icon_end-to-end.svg" alt="End-to-End Innovation" class="icon">
                    <h5>End-to-End Innovation</h5>
                    <p>From prototyping to mass production, we handle it all.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="our-edge-wrap">
                    <img src="img/Solution/R&D/icon_frameworks.svg" alt="APQP & NPI Frameworks" class="icon">
                    <h5>APQP & NPI Frameworks</h5>
                    <p>Mitigate risks and ensure compliance.</p>
                </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="our-edge-wrap">
                    <img src="img/Solution/R&D/icon_scalable.svg" alt="Scalable Solutions" class="icon">
                    <h5>Scalable Solutions</h5>
                    <p>Custom machining for complex designs.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../inc/footer.php'; ?>

    <script>
        document.querySelectorAll(".toggle-container").forEach((container, index) => {
            const content = container.nextElementSibling;

            if (index === 0) {
                container.classList.add("active");
                content.classList.add("open");
            }

            container.addEventListener("click", function() {
                document.querySelectorAll(".toggle-container").forEach(item => {
                    if (item !== this) {
                        item.classList.remove("active");
                        item.nextElementSibling.classList.remove("open");
                    }
                });

                const isActive = this.classList.contains("active");

                if (isActive) {
                    content.classList.remove("open");
                    this.classList.remove("active");
                } else {
                    content.classList.add("open");
                    this.classList.add("active");
                }
            });
        });
    </script>
</body>

</html>