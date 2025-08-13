<?php
$current_path = $_SERVER['PHP_SELF'];
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- desktop nav bar -->
<div class="bottom-border desktop-nav drop-shadow">
    <div class="header container" id="nav">
        <a href="index.php" class="logo">
            <img src="img/Generic/logo_emblem.png" alt="Logo">
        </a>
        <nav>
            <ul class="nav-links" style="height: 80px;">
                <li><a href="index.php" class="first-nav <?= strpos($current_path, 'index.php') !== false ? 'active' : '' ?>">HOME</a></li>
                <li id="company-link"><a href="company/about.php" class="first-nav <?= strpos($current_path, '/company') !== false ? 'active' : '' ?>">COMPANY</a></li>
                <li id="solutions-link"><a href="solutions.php" class="first-nav <?= strpos($current_path, '/solutions') !== false ? 'active' : '' ?>">SOLUTIONS</a></li>
                <li id="products-link"><a href="products.php" class="first-nav <?= strpos($current_path, '/products') !== false ? 'active' : '' ?>">PRODUCTS</a></li>
                <li><a href="contact.php" class="text-nowrap first-nav <?= strpos($current_path, 'contact.php') !== false ? 'active' : '' ?>">CONTACT US</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- mobile nav -->
<div class="mobile-nav bottom-border">
    <nav class="navbar navbar-expand-xl navbar-light bg-white">
        <div class="container">
            <a href="index.php" class="logo">
                <img src="img/Generic/logo_emblem.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="company/about.php">About Us</a>
                            <a class="dropdown-item" href="company/our-edge.php">Our Edge</a>
                            <a class="dropdown-item" href="company/history.php">History</a>
                            <a class="dropdown-item" href="company/awards.php">Awards</a>
                            <!-- <a class="dropdown-item" href="company/become-a-customer.php">Become a Customer</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="solutions.php">All Solutions</a>
                            <a class="dropdown-item" href="solutions/inspection.php">Inspection</a>
                            <a class="dropdown-item" href="solutions/machine.php">Machines</a>
                            <a class="dropdown-item" href="solutions/testing.php">Testing</a>
                            <a class="dropdown-item" href="solutions/R&D.php">R&D</a>
                            <a class="dropdown-item" href="solutions/mold&tool.php">Mold & Tool</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="products.php">All Products</a>
                            <a class="dropdown-item" href="products/stamping-parts.php">Stamping Parts</a>
                            <a class="dropdown-item" href="products/handles.php">Handles</a>
                            <a class="dropdown-item" href="products/die-cast.php">Die Cast</a>
                            <a class="dropdown-item" href="products/manifold.php">Manifold</a>
                            <a class="dropdown-item" href="products/oem.php">Advertising Fixtures & OEM Products</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Company -->
<div class="menu-wrap bottom-border drop-shadow" id="company-nav">
    <div class="container menu-container">
        <div class="line line-1-3"></div>
        <div class="row w-100">
            <div class="col-md-4 d-flex align-items-center">
                <h4>CELEBRATING OUR LEGACY, CRAFTING THE FUTURE</h4>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <ul class="nav-links flex-column align-items-start">
                    <li><a href="company/about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
                    <li><a href="company/our-edge.php" class="<?= $current_page == 'our-edge.php' ? 'active' : '' ?>">Our Edge</a></li>
                    <li><a href="company/history.php" class="<?= $current_page == 'history.php' ? 'active' : '' ?>">History</a></li>
                    <li><a href="company/awards.php" class="<?= $current_page == 'awards.php' ? 'active' : '' ?>">Awards</a></li>
                    <!-- <li><a href="company/become-a-customer.php" class="<?= $current_page == 'become-a-customer.php' ? 'active' : '' ?>">Become a Customer</a></li> -->
                </ul>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <img src="img/Company/img_company.jpg" alt="history" style="height: 200px;">
            </div>
        </div>
    </div>
</div>

<!-- Solutions -->
<div class="menu-wrap bottom-border drop-shadow" id="solutions-nav">
    <div class="container menu-container">
        <div class="line line-1-3"></div>
        <div class="row w-100">
            <div class="col-md-4 d-flex align-items-center">
                <h4>EXCEPTIONAL QUALITY AND INNOVATION IN EVERY SOLUTION</h4>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <ul class="nav-links flex-column align-items-start">
                    <li><a href="solutions/inspection.php" class="<?= $current_page == 'inspection.php' ? 'active' : '' ?>">Inspection</a></li>
                    <li><a href="solutions/machine.php" class="<?= $current_page == 'machine.php' ? 'active' : '' ?>">Machines</a></li>
                    <li><a href="solutions/testing.php" class="<?= $current_page == 'testing.php' ? 'active' : '' ?>">Testing</a></li>
                    <li><a href="solutions/R&D.php" class="<?= $current_page == 'R&D.php' ? 'active' : '' ?>">R&D</a></li>
                    <li><a href="solutions/mold&tool.php" class="<?= $current_page == 'mold&tool.php' ? 'active' : '' ?>">Mold & Tool</a></li>
                </ul>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <img src="img/Solution/img_solution.jpg" alt="cnc_turning" style="height: 200px;">
            </div>
        </div>
    </div>
</div>

<!-- Products -->
<div class="menu-wrap bottom-border drop-shadow" id="products-nav">
    <div class="container menu-container">
        <div class="line line-1-3"></div>
        <div class="row w-100">
            <div class="col-md-4 d-flex align-items-center">
                <h4>COMPREHENSIVE PRODUCTS FOR EVERY INDUSTRY NEED</h4>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <ul class="nav-links flex-column align-items-start">
                    <li><a href="products/stamping-parts.php" class="<?= $current_page == 'stamping-parts.php' ? 'active' : '' ?>">Stamping Parts</a></li>
                    <li><a href="products/handles.php" class="<?= $current_page == 'handles.php' ? 'active' : '' ?>">Handles</a></li>
                    <li><a href="products/die-cast.php" class="<?= $current_page == 'die-cast.php' ? 'active' : '' ?>">Die Cast</a></li>
                    <li><a href="products/manifold.php" class="<?= $current_page == 'manifold.php' ? 'active' : '' ?>">Manifold</a></li>
                    <li><a href="products/oem.php" class="<?= $current_page == 'oem.php' ? 'active' : '' ?>">Advertising Fixtures & OEM Products</a></li>
                </ul>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <img src="img/Product/Main/img_product.jpg" alt="product" style="height: 200px;">
            </div>
        </div>
    </div>
</div>

<script>
    // Navigation dropdown management
    const navConfig = [{
            linkId: 'company-link',
            navId: 'company-nav'
        },
        {
            linkId: 'solutions-link',
            navId: 'solutions-nav'
        },
        {
            linkId: 'products-link',
            navId: 'products-nav'
        }
    ];

    const navElements = {};
    const navContainer = document.getElementById('nav');

    navConfig.forEach(config => {
        const link = document.getElementById(config.linkId);
        const nav = document.getElementById(config.navId);

        if (link && nav) {
            navElements[config.navId] = nav;
            link.addEventListener('mouseover', () => showNav(config.navId));
            nav.addEventListener('mouseover', () => showNav(config.navId));
            nav.addEventListener('mouseout', hideAllNavs);
        }
    });

    navContainer.addEventListener('mouseout', hideAllNavs);

    function showNav(navId) {
        Object.keys(navElements).forEach(id => {
            navElements[id].classList.remove('show');
        });
        navElements[navId].classList.add('show');
    }

    function hideAllNavs() {
        Object.values(navElements).forEach(nav => {
            nav.classList.remove('show');
        });
    }
</script>