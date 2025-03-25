<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../inc/HTMLhead.php'; ?>
    <title>CS Metal Mold & Tool</title>
    <meta name="description" content="CS Metal ensures precision in metal fabrication with advanced inspection tech like GOM Scan & Spectralight QC. Production with color accuracy, and compliance.">
    <style>
        ul {
            padding-left: 18px;
        }

        strong {
            font-weight: 500 !important;
        }

        .horizontal-scroll-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .horizontal-scroll {
            display: flex;
            height: 200px;
            width: max-content;
        }

        .section {
            height: 200px;
            padding: 0 25px;
            display: flex;
            flex-direction: column;
            align-items: start;
            justify-content: center;
            opacity: 0;
            transform: scale(0.8);
        }

        .mold-process-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .mold-process {
            width: calc(100% + 50px);
        }

        .progress-bar-container {
            position: sticky;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: none;
            z-index: 1000;
            direction: rtl;
        }

        .progress-bar {
            height: 100%;
            width: 0;
            background-color: #0c73b2;
            /* transition: width 0.1s ease-out; */
            direction: rtl;
        }
    </style>
</head>

<body>
    <?php include '../inc/header.php'; ?>
    <!-- intro -->
    <div class="container">
        <div class="row section-padding">
            <div class="col-md-8 py-0">
                <h1 class="slash-title"><span class="text-color">/ </span>Mold & Tool</h1>
                <div class="title">Shaping the Future of Mold & Tool Design</div>
            </div>
        </div>
    </div>

    <div class="bg-black text-white">
        <div class="container" id="core-values">
            <!-- <div class="line grey-border line-left"></div>
            <div class="line grey-border line-1-3"></div>
            <div class="line grey-border line-2-3"></div>
            <div class="line grey-border line-right"></div> -->
            <div class="row section-padding padding-top pb-0">
                <div class="col-sm-12 col-md-4 py-0">
                    <div class="title pb-3">Our Expertise</div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4 py-0">
                    <p class="mb-0">For over 30 years, we’ve designed and manufactured custom tools, dies, and molds that drive efficiency and reliability in metal fabrication.</p>
                </div>
            </div>
            <div class="row section-padding padding-bottom">
                <div class="col-sm-12 col-md-4 d-flex flex-column">
                    <img src="img/Solution/mold&tool/icon_custom_solution.svg" alt="Custom Solutions" class="icon">
                    <h5>Custom Solutions</h5>
                    <p class="mb-0">Collaborate with our engineers to create tools and dies tailored to your exact project requirements.</p>
                </div>
                <div class="col-sm-12 col-md-4 d-flex flex-column">
                    <img src="img/Solution/mold&tool/icon_design&Manufacturing.svg" alt="Integrated Design & Manufacturing" class="icon">
                    <h5>Integrated Design & Manufacturing</h5>
                    <p class="mb-0">From concept to production, we streamline workflows under one roof, reducing lead times and ensuring quality control.</p>
                </div>
                <div class="col-sm-12 col-md-4 d-flex flex-column">
                    <img src="img/Solution/mold&tool/icon_Innovation&Precision.svg" alt="Innovation & Precision" class="icon">
                    <h5>Innovation & Precision</h5>
                    <p class="mb-0">Leveraging decades of expertise, advanced software (AutoCAD, SolidWorks), and imported machinery (wire-cut machines with 750x400mm workspace), we deliver cutting-edge tooling solutions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container bottom-border" id="core-values">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>
        <div class="row section-padding-lg">
            <div class="col-md-4">
                <h5>Quality Assurance</h5>
                <ul>
                    <li>
                        <p><strong>Precision Measurement:</strong> CMM (Coordinate Measuring Machine) and 3D scanners verify tool accuracy.</p>
                    </li>
                    <li>
                        <p class="mb-0"><strong>Certification:</strong> Rigorous testing ensures compliance with industry standards.</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Post-Delivery Support</h5>
                <ul>
                    <li>
                        <p><strong>Maintenance Plans:</strong> Proactive upkeep to extend tool life.</p>
                    </li>
                    <li>
                        <p class="mb-0"><strong>Warranty:</strong> Confidence in durability and performance.</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Why Choose CS Metal for Molds & Tools?</h5>
                <ul>
                    <li>
                        <p>End-to-end control of design, production, and maintenance.</p>
                    </li>
                    <li>
                        <p>Advanced measurement tools (CMM, 3D scanners) for flawless accuracy.</p>
                    </li>
                    <li>
                        <p class="mb-0">Warranty-backed tools with lifetime support.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container" id="core-values">
        <div class="line line-left"></div>
        <div class="line line-1-3"></div>
        <div class="line line-2-3"></div>
        <div class="line line-right"></div>
        <div class="mold-process-wrapper d-flex justify-content-center">
            <div class="row section-padding padding-top pb-0 mold-process">
                <div class="col-sm-12 col-md-4 py-0">
                    <div class="title pb-3">Mold Development Process</div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4 py-0">
                    <p class="mb-0">Our structured mold development process ensures clarity and alignment at every stage, from initial design to post-production support.</p>
                </div>
            </div>
        </div>

        <div class="horizontal-scroll-wrapper">
            <div class="horizontal-scroll">
                <div class="section d-none d-md-flex"></div>
                <div class="section"></div>
                <div class="section">
                    <div class="title">1.</div>
                    <p>Received Samples/Drawing</p>
                </div>

                <div class="section">
                    <div class="title">2.</div>
                    <p>Communicate Design Targets</p>
                </div>

                <div class="section">
                    <div class="title">3.</div>
                    <p>Tooling DFM (Design for Manufacturing)</p>
                </div>

                <div class="section">
                    <div class="title">4.</div>
                    <p>Development</p>
                </div>

                <div class="section">
                    <div class="title">5.</div>
                    <p>Mold Production</p>
                </div>

                <div class="section">
                    <div class="title">6.</div>
                    <p>Mold & Product Certification</p>
                </div>

                <div class="section">
                    <div class="title">7.</div>
                    <p>Maintenance Plan</p>
                </div>
            </div>
            <div class="progress-bar-container">
                <div class="progress-bar"></div>
            </div>
        </div>
        <div style="height: 100px;"></div>
    </div>

    <?php include '../inc/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script>
        function initScroll() {
            ScrollTrigger.getAll().forEach(trigger => trigger.kill());
            gsap.killTweensOf(".horizontal-scroll");

            const container = document.querySelector('.horizontal-scroll-wrapper');
            const sections = document.querySelectorAll(".section");
            const containerWidth = container.clientWidth;
            let sectionWidth;
            if (window.innerWidth < 768) {
                sectionWidth = containerWidth / 2;
            } else {
                sectionWidth = containerWidth / 3;
            }
            const horizontalScrollLength = (sections.length * sectionWidth) - containerWidth;

            const horizontalScrollTween = gsap.to(".horizontal-scroll", {
                x: -horizontalScrollLength,
                ease: "none",
                scrollTrigger: {
                    trigger: ".horizontal-scroll-wrapper",
                    start: "center center",
                    end: () => `+=${horizontalScrollLength}`,
                    scrub: true,
                    pin: true,
                    anticipatePin: 1,
                    onUpdate: self => {
                        // Update the progress bar width
                        const progress = self.progress * 100; // Get progress as a percentage
                        document.querySelector('.progress-bar').style.width = `${progress}%`;
                    }
                }
            });

            sections.forEach(section => {
                gsap.set(section, {
                    opacity: 0,
                    scale: 0.8
                });
            });

            sections.forEach(section => {
                gsap.to(section, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: section,
                        containerAnimation: horizontalScrollTween,
                        start: "left 80%",
                        end: "right center",
                        toggleActions: "play none none reverse"
                    }
                });
            });

            ScrollTrigger.create({
                trigger: ".mold-process-wrapper",
                start: "top top",
                end: () => `+=${horizontalScrollLength}`,
                pin: true,
                pinSpacing: false
            });
        }

        function setSectionWidth() {
            const container = document.querySelector('.horizontal-scroll-wrapper');
            const sections = document.querySelectorAll(".section");
            const containerWidth = container.clientWidth;
            let sectionWidth;
            if (window.innerWidth < 768) {
                sectionWidth = containerWidth / 2;
            } else {
                sectionWidth = containerWidth / 3;
            }

            sections.forEach(section => {
                section.style.width = `${sectionWidth}px`;
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            setSectionWidth();
            initScroll();
        });

        window.addEventListener('resize', function() {
            setSectionWidth();
            initScroll();
        });
    </script>
</body>

</html>