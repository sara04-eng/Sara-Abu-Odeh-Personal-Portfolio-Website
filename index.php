<?php

require_once "config/db.php";

$header_menu = $pdo->query("
    SELECT *
    FROM header_menu
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();

$home = $pdo->query("
    SELECT *
    FROM home
    LIMIT 1
")->fetch();

$about = $pdo->query("
    SELECT *
    FROM about
    LIMIT 1
")->fetch();
$experience = $pdo->query("
    SELECT *
    FROM experience
    ORDER BY id ASC
    LIMIT 1
")->fetch();

$technologies = $pdo->query("
    SELECT *
    FROM technologies
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();
$skills = $pdo->query("
    SELECT *
    FROM skills
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();
$services = $pdo->query("
    SELECT *
    FROM services
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();
$projects = $pdo->query("
    SELECT *
    FROM projects
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();
$contacts = $pdo->query("
    SELECT *
    FROM contact
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();
$social_links = $pdo->query("
    SELECT *
    FROM social_links
    WHERE is_active = 1
    ORDER BY sort_order ASC
")->fetchAll();

$footer = $pdo->query("
    SELECT *
    FROM footer
    LIMIT 1
")->fetch();

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Sara Nabil Abdullah Abu Odeh | Full Stack Web Developer</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">

	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">

        <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand logo_h" href="#home">
                    <img src="img/Clever Mind POB ICT .png"
                         alt="Clever Mind POB ICT">
                </a>


                <!-- Mobile Menu Button -->
                <button class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>


                <!-- Navigation -->
                <div class="collapse navbar-collapse offset"
                     id="navbarSupportedContent">

                    <ul class="nav navbar-nav menu_nav justify-content-end">

                        <?php foreach ($header_menu as $index => $menu): ?>

                            <li class="nav-item <?php echo $index === 0 ? 'active' : ''; ?>">

                                <a class="nav-link"
                                   href="<?php echo htmlspecialchars($menu['menu_link']); ?>">

                                    <?php echo htmlspecialchars($menu['menu_title']); ?>

                                </a>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            </div>

        </nav>

    </div>
</header>
<!--================ End Header Area =================-->


	<!--================ Start Home Banner Area =================-->
<section class="home_banner_area" id="home">

    <div class="banner_inner">

        <div class="container">

            <div class="row align-items-center">

                <!-- Left Side -->
                <div class="col-lg-7">

                    <div class="banner_content">

                        <!-- Greeting -->
                        <h3 class="text-uppercase">
                            <?php echo htmlspecialchars($home['greeting']); ?>
                        </h3>


                        <!-- Full Name -->
                        <h1 class="text-uppercase">
                            I am
                            <?php echo htmlspecialchars($home['full_name']); ?>
                        </h1>


                        <!-- Job Title -->
                        <h5 class="text-uppercase">
                            <?php echo htmlspecialchars($home['job_title']); ?>
                        </h5>


                        <div class="d-flex align-items-center">

                            <!-- Hire Me -->
                            <a class="primary_btn"
                               href="mailto:<?php echo htmlspecialchars($home['hire_me_email']); ?>">

                                <span>
                                    <?php echo htmlspecialchars($home['hire_me_text']); ?>
                                </span>

                            </a>


                            <!-- Get CV -->
                            <a class="primary_btn tr-bg"
                               href="#cvModal"
                               data-toggle="modal">

                                <span>
                                    <?php echo htmlspecialchars($home['cv_button_text']); ?>
                                </span>

                            </a>

                        </div>

                    </div>

                </div>


                <!-- Right Side - Personal Image Frame -->
                <div class="col-lg-5">

                    <div class="home_right_img personal_image_frame">

                        <div class="profile_frame">

                            <img
                                src="<?php echo htmlspecialchars($home['profile_image']); ?>"
                                alt="<?php echo htmlspecialchars($home['full_name']); ?>">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!--================ End Home Banner Area =================-->
<!--================ Start About Area =================-->
<section class="about_area section_gap" id="about">

    <div class="container">

        <div class="row justify-content-start align-items-center">

            <!-- About Image -->
            <div class="col-lg-5">

                <div class="about_img">

                    <img
                        src="<?php echo htmlspecialchars($about['image']); ?>"
                        alt="About <?php echo htmlspecialchars($home['full_name']); ?>">

                </div>

            </div>


            <!-- About Content -->
            <div class="offset-lg-1 col-lg-5">

                <div class="main_title text-left">


                    <!-- Title -->
                    <h2>

                        <?php
                        $title_parts = explode(' ', $about['title']);
                        ?>

                        <?php echo htmlspecialchars($about['title']); ?>

                    </h2>


                    <!-- Description 1 -->
                    <p>
                        <?php echo htmlspecialchars($about['description_1']); ?>
                    </p>


                    <!-- Description 2 -->
                    <p>
                        <?php echo htmlspecialchars($about['description_2']); ?>
                    </p>


                    <!-- Get CV -->
                    <a class="primary_btn"
                       href="#cvModal"
                       data-toggle="modal">

                        <span>
                            <?php echo htmlspecialchars($about['cv_button_text']); ?>
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<!--================ End About Area =================-->
<<!--================ Start Experience / Technology Area =================-->
<section class="brand_area section_gap_bottom" id="experience">

    <div class="container">

        <div class="row align-items-center">

            <!-- LEFT: Company + Technologies -->
            <div class="col-lg-7">

                <div class="experience_left text-center">

                    <!-- Company Information -->
                    <div class="experience_company">

                        <span class="experience_label">
                            TRAINED AT
                        </span>

                        <img
                            src="<?php echo htmlspecialchars($experience['company_logo']); ?>"
                            alt="<?php echo htmlspecialchars($experience['company_name']); ?>"
                            class="experience_company_logo">

                        <h3>
                            <?php echo htmlspecialchars($experience['company_name']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($experience['position']); ?>
                        </p>

                    </div>


                    <!-- Technologies -->
                    <div class="technology_section">

                        <h4>
                            Technologies I Work With
                        </h4>

                        <div class="technology_chips">

                            <?php foreach ($technologies as $technology): ?>

                                <span class="technology_chip">
                                    <?php echo htmlspecialchars($technology['technology_name']); ?>
                                </span>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT: Experience Information -->
            <div class="offset-lg-1 col-lg-4 col-md-6">

                <div class="client-info">

                    <!-- Graduation Information -->
                    <div class="d-flex mb-50 align-items-center">

                        <span class="lage">
                            <?php echo htmlspecialchars($experience['graduation_year']); ?>
                        </span>

                        <span class="smll">
                            <?php echo htmlspecialchars($experience['graduation_title']); ?>
                        </span>

                    </div>


                    <!-- Contact Information -->
                    <div class="call-now d-flex">

                        <div>
                            <span class="fa fa-phone"></span>
                        </div>

                        <div class="ml-15">

                            <p>
                                CONTACT ME
                            </p>

                            <h3>
                                <?php echo htmlspecialchars($experience['phone']); ?>
                            </h3>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!--================ End Experience / Technology Area =================-->

<!--================ Start Skills Area =================-->
<section class="features_area" id="skills">

    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <div class="main_title">

                    <h2>
                        technical skills
                    </h2>

                    <p>
                        My technical expertise across Front-End, Back-End, Databases,
                        APIs, UI/UX Design and Development Tools.
                    </p>

                </div>

            </div>

        </div>


        <!-- Skills -->
        <div class="row feature_inner">

            <?php foreach ($skills as $skill): ?>

                <div class="col-lg-3 col-md-6">

                    <div class="feature_item">

                        <img
                            src="<?php echo htmlspecialchars($skill['skill_image']); ?>"
                            alt="<?php echo htmlspecialchars($skill['skill_title']); ?>">

                        <h4>
                            <?php echo htmlspecialchars($skill['skill_title']); ?>
                        </h4>

                        <p>
                            <?php echo htmlspecialchars($skill['skill_description']); ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<!--================ End Skills Area =================-->
<!--================ Start Services Area =================-->
<section class="features_area section_gap" id="services">

    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <div class="main_title">

                    <h2>
                        services i offer
                    </h2>

                    <p>
                        Professional web development and design services focused
                        on responsive, dynamic and user-friendly digital solutions.
                    </p>

                </div>

            </div>

        </div>


        <!-- Services -->
        <div class="row feature_inner">

            <?php foreach ($services as $service): ?>

                <div class="col-lg-3 col-md-6">

                    <div class="feature_item">

                        <img
                            src="<?php echo htmlspecialchars($service['service_image']); ?>"
                            alt="<?php echo htmlspecialchars($service['service_title']); ?>">

                        <h4>
                            <?php echo htmlspecialchars($service['service_title']); ?>
                        </h4>

                        <p>
                            <?php echo htmlspecialchars($service['service_description']); ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<!--================ End Services Area =================-->

	<!--================ Start Portfolio Area =================-->
<section class="portfolio_area" id="portfolio">

    <div class="container">

        <!-- Portfolio Title -->
        <div class="row">

            <div class="col-lg-12">

                <div class="main_title text-left">

                    <h2>
                        my work <br>
                        Featured Projects
                    </h2>

                </div>

            </div>

        </div>


        <!-- Portfolio Filters -->
        <div class="filters portfolio-filter">

            <ul>

                <li class="active" data-filter="*">
                    all
                </li>

                <li data-filter=".web">
                    web development
                </li>

                <li data-filter=".fullstack">
                    full-stack
                </li>

                <li data-filter=".academic">
                    academic
                </li>

            </ul>

        </div>


        <!-- Portfolio Projects -->
        <div class="filters-content">

            <div class="row portfolio-grid justify-content-center">

                <?php foreach ($projects as $project): ?>

                    <?php
                    /*
                     * Convert database categories
                     * into Isotope CSS classes.
                     *
                     * Example:
                     * web,fullstack,academic
                     * becomes:
                     * web fullstack academic
                     */
                    $categories = str_replace(
                        ',',
                        ' ',
                        $project['category']
                    );
                    ?>

                    <div class="col-lg-4 col-md-6 all <?php echo htmlspecialchars($categories); ?>">

                        <div class="portfolio_box">

                            <!-- Project Image -->
                            <div class="single_portfolio">

                                <img
                                    class="img-fluid w-100"
                                    src="<?php echo htmlspecialchars($project['project_image']); ?>"
                                    alt="<?php echo htmlspecialchars($project['project_name']); ?>">

                                <div class="overlay"></div>


                                <!-- Image Preview -->
                                <a
                                    href="<?php echo htmlspecialchars($project['project_image']); ?>"
                                    class="img-gal">

                                    <div class="icon">

                                        <span class="lnr lnr-cross"></span>

                                    </div>

                                </a>

                            </div>


                            <!-- Project Information -->
                            <div class="short_info">

                                <h4>
                                    <?php echo htmlspecialchars($project['project_name']); ?>
                                </h4>

                                <p>
                                    <?php echo htmlspecialchars($project['project_description']); ?>
                                </p>

                            </div>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>
<!--================ End Portfolio Area =================-->

<!--================ Start Contact Area =================-->
<section class="contact_area section_gap" id="contact">

    <div class="container">

        <!-- Section Title -->
        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <div class="main_title">

                    <h2>
                        let's work together
                    </h2>

                    <p>
                        Feel free to contact me through any of the following options.
                    </p>

                </div>

            </div>

        </div>


        <!-- Contact Information -->
        <div class="row justify-content-center text-center">

            <?php foreach ($contacts as $contact): ?>

                <div class="col-lg-4 col-md-6">

                    <a
                        href="<?php echo htmlspecialchars($contact['contact_link']); ?>"
                        <?php if (
                            strpos($contact['contact_link'], 'http://') === 0 ||
                            strpos($contact['contact_link'], 'https://') === 0
                        ): ?>
                            target="_blank"
                            rel="noopener noreferrer"
                        <?php endif; ?>
                    >

                        <div class="contact_info">

                            <!-- Icon -->
                            <span
                                class="<?php echo htmlspecialchars($contact['contact_icon']); ?>">
                            </span>

                            <!-- Title -->
                            <h4>
                                <?php echo htmlspecialchars($contact['contact_title']); ?>
                            </h4>

                            <!-- Value -->
                            <p>
                                <?php echo htmlspecialchars($contact['contact_value']); ?>
                            </p>

                        </div>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>
<!--================ End Contact Area =================-->



<!-- CV Modal -->
<div class="modal fade" id="cvModal" tabindex="-1" role="dialog" aria-labelledby="cvModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="cvModalLabel">My CV</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="padding: 0;">
                <iframe
                    src="cv/Sara_Nabil_Abu_Odeh_Resume_ATS.pdf"
                    width="100%"
                    height="700px"
                    style="border: none;">
                </iframe>
            </div>

            <div class="modal-footer">
                <a
                    href="cv/Sara_Nabil_Abu_Odeh_Resume_ATS.pdf"
                    download="Sara_Nabil_Abu_Odeh_Resume_ATS.pdf"
                    class="primary_btn">
                    <span>Download CV</span>
                </a>
            </div>

        </div>
    </div>
</div>


	<!--================Footer Area =================-->
<footer class="footer_area">

    <div class="container">

        <div class="row">

            <!-- Logo + Description -->
            <div class="col-lg-4 col-md-6">

                <div class="footer_logo">

                    <a href="#home">

                        <img
                            src="<?php echo htmlspecialchars($footer['logo']); ?>"
                            alt="Clever Mind POB ICT">

                    </a>

                    <p>
                        <?php echo htmlspecialchars($footer['description']); ?>
                    </p>

                </div>

            </div>


            <!-- Pages -->
            <div class="col-lg-4 col-md-6">

                <div class="footer_links">

                    <h4>Pages</h4>

                    <?php foreach ($header_menu as $menu): ?>

                        <a
                            href="<?php echo htmlspecialchars($menu['menu_link']); ?>">

                            <?php echo htmlspecialchars($menu['menu_title']); ?>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- Follow Me -->
            <div class="col-lg-4 col-md-12">

                <div class="footer_social">

                    <h4>Follow Me</h4>

                    <?php foreach ($social_links as $social): ?>

                        <a
                            href="<?php echo htmlspecialchars($social['platform_url']); ?>"

                            <?php
                            if (
                                strpos($social['platform_url'], 'http://') === 0 ||
                                strpos($social['platform_url'], 'https://') === 0
                            ):
                            ?>

                                target="_blank"
                                rel="noopener noreferrer"

                            <?php endif; ?>
                        >

                            <i
                                class="<?php echo htmlspecialchars($social['platform_icon']); ?>">
                            </i>

                        </a>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>


        <!-- Copyright -->
        <div class="footer_bottom">

            <p>
                <?php echo htmlspecialchars($footer['copyright_text']); ?>
            </p>

        </div>

    </div>

</footer>
<!--================End Footer Area =================-->


	<!-- Optional JavaScript -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>

</body>
</html>