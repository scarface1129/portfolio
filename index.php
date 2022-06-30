<?php  
include('functions.php');

if (isset($_GET['error']))  {
session_start();
    $error = $_GET['error'];
}
if (isset($_GET['message']))  {
session_start();
    $message = $_GET['message'];
}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rainbowit.net/html/inbio/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 03:39:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="template-color-1 spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="70">

    <!-- Start Header -->
    <header class="rn-header haeder-default black-logo-version header--fixed header--sticky">
        <div class="header-wrapper rn-popup-mobile-menu m--0 row align-items-center">
            <!-- Start Header Left -->
            <?php if(isset($_GET['error'])){?>
            <div class='handle error-handle '>
                <div class='inner-handle'>
                    <p style="color:white;"><?php echo $error ?></p>
                </div>
            </div>
            <?php ;}?>
            <?php if(isset($_GET['message'])){?>
            <div class='handle error-handle '>
                <div class='inner-handle2'>
                    <p style="color:white;"><?php echo $message ?></p>
                </div>
            </div>
            <?php ;}?>
            <div class="col-lg-2 col-6">
                <div class="header-left">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- End Header Left -->
            <!-- Start Header Center -->
            <div class="col-lg-10 col-6">
                <div class="header-center">
                    <nav id="sideNav" class="mainmenu-nav navbar-example2 d-none d-xl-block onepagenav">
                    
                        <!-- Start Mainmanu Nav -->
                        <ul class="primary-menu nav nav-pills">
                            <li class="nav-item current"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                            <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#blog">blog</a></li> -->
                            <li class="nav-item"><a class="nav-link" href="#contacts">Contact</a></li>
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                    <!-- Start Header Right  -->
                    <div class="header-right">
                        <div class="hamberger-menu d-block d-xl-none">
                            <i id="menuBtn" class="feather-menu humberger-menu"></i>
                        </div>
                        <div class="close-menu d-block">
                            <span class="closeTrigger">
                            <i data-feather="x"></i>
                        </span>
                        </div>
                    </div>
                    <!-- End Header Right  -->

                </div>
            </div>
            <!-- End Header Center -->
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Mobile Menu  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="menu-top">
                <div class="menu-header">
                    <a class="logo" href="index-2.html">
                        <img src="assets/images/logo/logos-circle.png" alt="Personal Portfolio">
                    </a>
                    <div class="close-button">
                        <button class="close-menu-activation close"><i data-feather="x"></i></button>
                    </div>
                </div>
                <p class="discription">plain text</p>
            </div>
            <div class="content">
                <ul class="primary-menu nav nav-pills onepagenav">
                    <li class="nav-item current"><a class="nav-link smoth-animation active" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#clients">Clients</a></li>
                    <!-- <li class="nav-item"><a class="nav-link smoth-animation" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#blog">blog</a></li> -->
                    <li class="nav-item"><a class="nav-link smoth-animation" href="#contacts">Contact</a></li>
                </ul>
                <!-- social sharea area -->
                <div class="social-share-style-1 mt--40">
                    <span class="title">find with me</span>
                    <ul class="social-share d-flex liststyle">
                        <li class="facebook"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg></a>
                        </li>
                        <li class="instagram"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg></a>
                        </li>
                        <li class="linkedin"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!-- end -->
            </div>
        </div>
    </div>
    <!-- End Popup Mobile Menu  -->




    <main class="main-page-wrapper">

        <!-- Start Slider Area -->
        <div id="home" class="rn-slider-area">
            <div class="slide slider-style-1">
                <div class="container">
                    <div class="row row--30 align-items-center">

                        <div class="order-1 order-lg-1 col-lg-5 ">
                            <div class="thumbnail">
                                <div class="inner">
                                    <img src="assets/images/slider/banner-09.png" alt="Personal Portfolio Images">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="order-2 order-lg-2 col-lg-7 mt_md--50 mt_sm--50 mt_lg--30">
                            <div class="content">
                                <div class="inner">
                                    <span class="subtitle">Welcome to my world</span>
                                    <h1 class="title">Hi, I’m <span><?= $profile[0]['name'] ?></span><br>
                                        <span class="header-caption" id="page-top">
                                            <!-- type headline start-->
                                            <span class="cd-headline clip is-full-width">
                                                <span>a </span>
                                        <!-- ROTATING TEXT -->
                                        <span class="cd-words-wrapper">
                                                    <b class="is-visible"><?= $items[0] ?></b>
                                                    <b class="is-hidden"><?= $items[1] ?></b>
                                                    <b class="is-hidden"><?= $items[2] ?></b>
                                                </span>
                                        </span>
                                        <!-- type headline end -->
                                        </span>
                                    </h1>

                                    <div>
                                        <p class="description">
                                            <?= $profile[0]['about'] ?>
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12">
                                <div class="social-share-inner-left">
                                    <span class="title">find with me</span>
                                    <ul class="social-share d-flex liststyle">
                                        <li class="facebook"><a href="http://<?=$facebook?>"><i data-feather="facebook"></i></a>
                                        </li>
                                        <li class="instagram"><a href="http://<?=$instagram?>"><i data-feather="instagram"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="http://<?=$linkln?>"><i data-feather="linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 mt_mobile--30">
                                <div class="skill-share-inner">
                                    <span class="title">best skill on</span>
                                    <ul class="skill-share d-flex liststyle">
                                        <li><img src="assets/images/icons/icons-01.png" alt="Icons Images"></li>
                                        <li><img src="assets/images/icons/icons-02.png" alt="Icons Images"></li>
                                        <li><img src="assets/images/icons/icons-03.png" alt="Icons Images"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start Service Area -->
        <div class="rn-service-area rn-section-gap section-separator" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-left" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--25 mt_md--10 mt_sm--10">

                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="menu"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Business Stratagy</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="tv"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">App Development</a></h4>
                                    <p class="description">I throw myself down among the tall grass by the stream as I
                                        lie close to the earth.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="twitch"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Mobile App</a></h4>
                                    <p class="description">There are many variations of passages of Lorem Ipsum
                                        available, but the majority.
                                    </p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="wifi"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">CEO Marketing</a></h4>
                                    <p class="description">always free from repetition,
                                        injected humour, or non-characteristic words etc.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <!-- Start Single Service -->
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-sm-12 col-12 mt--50 mt_md--30 mt_sm--30">
                        <div class="rn-service">
                            <div class="inner">
                                <div class="icon">
                                    <i data-feather="slack"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="#">Personal Portfolio April</a></h4>
                                    <p class="description"> It uses a dictionary of over 200 Latin words, combined with
                                        a handful of model sentence.</p>
                                    <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                                </div>
                            </div>
                            <a class="over-link" href="#"></a>
                        </div>
                    </div>
                    <!-- End SIngle Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Portfolio Area -->
        <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row row--25 mt--10 mt_md--10 mt_sm--10">
                    <!-- Start Single Portfolio -->
                    <?php if ($projects): ?>
                    <?php foreach($projects as $project ) :?>
                        
                        <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true" class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                            <div class="rn-portfolio" data-bs-toggle="modal" data-bs-target="#<?= $project['title']?>">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="javascript:void(0)">
                                            <img src="assets/images/portfolio/portfolio-01.jpg" alt="Personal Portfolio Images">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="category-info">
                                            <div class="category-list">
                                                <a href="javascript:void(0)">Development</a>
                                            </div>
                                            <div class="meta">
                                                <span><a href="javascript:void(0)"><i class="feather-heart"></i></a>
                                            600</span>
                                            </div>
                                        </div>
                                        <h4 class="title"><a href="javascript:void(0)"><?= $project['title'] ?? ''?> <i
                                            class="feather-arrow-up-right"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <?php endforeach ?>
                    <?php endif ?>
                    <?php if ($projects): ?>
                    <?php foreach($projects as $project ) :?>
                    <div class="modal fade" id="<?= $project['title']?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i data-feather="x"></i></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row align-items-center">

                                        <div class="col-lg-6">
                                            <div class="portfolio-popup-thumbnail">
                                                <div class="image">
                                                    <img class="w-100" src="assets/images/portfolio/portfolio-04.jpg" alt="slide">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="text-content">
                                                <h3>
                                                    <span>Featured - Design</span> <?= $project['project_spec'] ?? '' ?>
                                                </h3>
                                                <p class="mb--30"><?= $project['text'] ?? ''?></p>
                                                <div class="button-group mt--20">
                                                    <a href="#" class="rn-btn thumbs-icon">
                                                        <span>LIKE THIS</span>
                                                        <i data-feather="thumbs-up"></i>
                                                    </a>
                                                    <a href="<?= $project['application_link'] ?? ''?>" class="rn-btn">
                                                        <span>VIEW PROJECT</span>
                                                        <i data-feather="chevron-right"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            <!-- End of .text-content -->
                                        </div>
                                    </div>
                                    <!-- End of .row Body-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <?php endif ?>
                    
                    <!-- End Single Portfolio -->
                </div>
                
                
            </div>
        </div>
        <!-- End portfolio Area -->
        <!-- Start Resume Area -->
        <div class="rn-resume-area rn-section-gap section-separator" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle"><?= $profile[0]['years-of-experience'] ?? ''?>+ Years of Experience</span>
                            <h2 class="title">My Resume</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--45">
                    <div class="col-lg-12">
                        <ul class="rn-nav-list nav nav-tabs" id="myTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="education-tab" data-bs-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="true">education / Job Experience </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="professional-tab" data-bs-toggle="tab" href="#professional" role="tab" aria-controls="professional" aria-selected="false">professional
                                    Skills</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="interview-tab" data-bs-toggle="tab" href="#interview" role="tab" aria-controls="interview" aria-selected="false">interview</a>
                            </li>
                        </ul>

                        <!-- Start Tab Content Wrapper  -->
                        <div class="rn-nav-content tab-content" id="myTabContents">
                            <!-- Start Single Tab  -->
                            <div class="tab-pane show active fade single-tab-area" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="col-lg-6 col-md-12 col-12">
                                            <div class="content">
                                                <!-- <span class="subtitle">2007 - 2010</span> -->
                                                <h4 class="maintitle">Education Quality</h4>
                                                <div class="experience-list">
                                                    <?php if($educations): ?>
                                                    <?php foreach($educations as $education): ?>
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?= $education['certificate'] ?? '' ?></h4>
                                                                    <span><?= $education['school'] ?? '' ?></span>
                                                                </div>
                                                                <div class="date-of-time">
                                                                    <span><?= $education['grade'] ?? '' ?></span>
                                                                </div>
                                                            </div>
                                                            <p class="description"><?= $education['description']  ?? ''?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                    <?php endforeach ?>
                                                    <?php endif ?>
                                                   

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                        <div class="col-lg-6 col-md-12 col-12 mt_md--60 mt_sm--60">
                                            <div class="content">
                                                <!-- <span class="subtitle">2007 - 2010</span> -->
                                                <h4 class="maintitle">Job Experience</h4>
                                                <div class="experience-list">
                                                    <?php if($experience): ?>
                                                    <?php foreach($experience as $exp): ?>
                                                    <!-- Start Single List  -->
                                                    <div class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?= $exp['post'] ?? '' ?></h4>
                                                                    <span><?= $exp['company_name'] ?? '' ?> (<?= $exp['year'] ?? '' ?>)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.70/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description"><?= $exp['experience_gained'] ?? ''?></p>
                                                        </div>
                                                    </div>
                                                    <!-- End Single List  -->
                                                    <?php endforeach ?>
                                                    <?php endif ?>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade " id="professional" role="tabpanel" aria-labelledby="professional-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row row--40">

                                        <!-- Start Single Progressbar  -->
                                        <div class="container col-lg-8 col-md-8 col-12">
                                            <div class="progress-wrapper">
                                                <div class="content">
                                                    <span class="subtitle">Features</span>
                                                    <h4 class="maintitle">Development Skill</h4>
                                                    <!-- Start Single Progress Charts -->
                                                    <?php if($skills): ?>
                                                    <?php foreach($skills as $skill): ?>
                                                    <div class="progress-charts">
                                                        <h6 class="heading heading-h6"><?= $skill['name'] ?? '' ?></h6>
                                                        <div class="progress">
                                                            <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: <?= $skill['rank_in_%'] ?? '' ?>%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span
                                                            class="percent-label"><?= $skill['rank_in_%'] ?? '' ?>%</span></div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach ?>
                                                    <?php endif?>
                                                    <!-- End Single Progress Charts -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Progressbar  -->

                                        <!-- Start Single Progressbar  -->
                                       
                                        <!-- End Single Progressbar  -->

                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->

                            

                            <!-- Start Single Tab  -->
                            <div class="tab-pane fade" id="interview" role="tabpanel" aria-labelledby="interview-tab">
                                <div class="personal-experience-inner mt--40">
                                    <div class="row">
                                        <!-- Start Skill List Area  -->
                                        <div class="container col-lg-8 col-md-12 col-12">
                                            <div class="content">
                                                <!-- <span class="subtitle">2007 - 2010</span> -->
                                                <h4 class="maintitle">Company Interviews</h4>
                                                <div class="experience-list">

                                                    <!-- Start Single List  -->
                                                    <?php if($interviews): ?>
                                                    <?php foreach($interviews as $interview): ?>
                                                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" class="resume-single-list">
                                                        <div class="inner">
                                                            <div class="heading">
                                                                <div class="title">
                                                                    <h4><?= $interview['company_name'] ?? ''?></h4>
                                                                    <span>(<?= $interview['year'] ?? ''?>)</span>
                                                                </div>
                                                                <!-- <div class="date-of-time">
                                                                    <span>4.30/5</span>
                                                                </div> -->
                                                            </div>
                                                            <p class="description"><?= $interview['about'] ?? ''?></p>
                                                        </div>
                                                    </div>
                                                    <?php endforeach ?>
                                                    <?php endif ?>

                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                   
                                                    <!-- End Single List  -->

                                                    <!-- Start Single List  -->
                                                
                                                    <!-- End Single List  -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Skill List Area  -->

                                        <!-- Start Skill List Area 2nd  -->
                                   
                                        <!-- End Skill List Area  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Tab  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Resume Area -->
        <!-- Start Testimonia Area  -->
        <div class="rn-testimonial-area rn-section-gap section-separator" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">What Clients Say</span>
                            <h2 class="title">Testimonial</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-activation testimonial-pb mb--30">
                            <!-- Start Single testiminail -->
                            <?php if($testimonies): ?>
                            <?php foreach($testimonies as $testimony):?>
                            <div class="testimonial mt--50 mt_md--40 mt_sm--40">
                                <div class="inner">
                                    <div class="card-info">
                                        <?php if($testimony['image']):?>
                                            <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/<?= $testimony['image'] ?? '' ?>" alt="Testimonial-image">
                                        </div>
                                        
                                        <?php endif ?>
                                        <div class="card-thumbnail">
                                            <img src="assets/images/testimonial/final-home--1st.png" alt="Testimonial-image">
                                        </div>
                                        <div class="card-content">
                                            <span class="subtitle mt--10"><?= $testimony['name_of_project'] ?? '' ?></span>
                                            <h3 class="title"><?= $testimony['name_of_testifier'] ?? '' ?></h3>
                                            <span class="designation"><?= $testimony['office/post_of testifier'] ?? '' ?></span>
                                        </div>
                                    </div>
                                    <div class="card-description">
                                        <div class="title-area">
                                            <div class="title-info">
                                                <h3 class="title"><?= $testimony['project_spec'] ?? '' ?></h3>
                                                <span class="date">via Upwork - <?= $testimony['date_of_start'] ?? '' ?>, <?= $testimony['date_of_launch'] ?? '' ?></span>
                                            </div>
                                            <div class="rating">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                                <img src="assets/images/icons/rating.png" alt="rating-image">
                                            </div>
                                        </div>
                                        <div class="seperator"></div>
                                        <p class="discription">
                                            <?= $testimony['about'] ?? '' ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                            <?php endif ?>
                            <!--End Single testiminail -->
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonia Area  -->
        <!-- Start Client Area -->
        <div class="rn-client-area rn-section-gap section-separator" id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span class="subtitle">Popular Clients</span>
                            <h2 class="title">Awesome Clients</h2>
                        </div>
                    </div>
                </div>

                <div class="row row--25 mt--50 mt_md--40 mt_sm--40">
                    <div class="col-lg-4">
                        <div class="d-flex flex-wrap align-content-start h-100">
                            <div class="position-sticky clients-wrapper sticky-top rbt-sticky-top-adjust">
                                <ul class="nav tab-navigation-button flex-column nav-pills me-3" id="v-pills-tab" role="tablist">
                                    <?php if($ability): ?>
                                    <?php foreach($ability as $skill): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="tab" href="#<?= $skill?>" role="tab" aria-selected="true"><?= $skill?></a>
                                    </li>

                                    <?php endforeach ?>
                                    <?php endif ?>
                                   


                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-area" style="width:100%; height: 100%;">
                            <div class="d-flex align-items-start" style="width:100%; height: 100%;">
                                <div class="tab-content" id="v-pills-tabContent" style="width:100%; height: 100%;">
                                    <?php if($ability): ?>
                                    <?php foreach($ability as $skill): ?>
                                    <?php if($skill == 'Flutter'):?>
                                    <div class="tab-pane fade active show" style="width:100%; height: 100%;"style="width:100%; height: 100%;" id="<?=$skill?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <?php else: ?>
                                    <div class="tab-pane fade" style="width:100%; height: 100%;" id="<?=$skill?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <?php endif ?>
                                        <div class="client-card">

                                            <!-- Start Single Brand  -->
                                            <?php if($projects):?>
                                            <?php foreach($projects as $project):?>
                                            <?php if($project['language_used'] == $skill):?>
                                            <div class="main-content">
                                                <div class="inner text-center">
                                                    <div class="thumbnail">
                                                        <a href="<?= $project['application_link'] ?>"><img src="assets/images/client/png/client1.png" alt="Client-image"></a>
                                                    </div>
                                                    <div class="seperator"></div>
                                                    <div class="client-name"><span><span><?=$skill?></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif?>
                                            <?php endforeach?>
                                            <?php endif ?>

                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End client section -->
        <!-- Pricing Area -->
       
        <!-- pricing area -->
        <!-- Start News Area -->
        
        <!-- ENd Mews Area -->
        <!-- Start Contact section -->
        <div class="rn-contact-area rn-section-gap section-separator" id="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle">Contact</span>
                            <h2 class="title">Contact With Me</h2>
                        </div>
                    </div>
                </div>

                <div class="row mt--50 mt_md--40 mt_sm--40 mt-contact-sm">
                    <div class="col-lg-5">
                        <div class="contact-about-area">
                            <div class="thumbnail">
                                <img src="assets/images/contact/contact1.png" alt="contact-img">
                            </div>
                            <div class="title-area">
                                <h4 class="title"><?= $profile[0]['name'] ??'' ?></h4>
                                <span>Senior Developer</span>
                            </div>
                            <div class="description">
                                <p>I am available for freelance work. Connect with me via and call in to my account.
                                </p>
                                <span class="phone">Phone: <a href="tel:01941043264"><?= $profile[0]['phone_number']??'' ?></a></span>
                                <span class="mail">Email: <a href="mailto:<?= $profile[0]['email'] ?>"><?= $profile[0]['email']??'' ?></a></span>
                            </div>
                            <div class="social-area">
                                <div class="name">FIND WITH ME</div>
                                <div class="social-icone">
                                    <a href="http://<?=$facebook?>"><i data-feather="facebook"></i></a>
                                    <a href="http://<?=$linkln?>"><i data-feather="linkedin"></i></a>
                                    <a href="http://<?=$instagram?>"><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos-delay="600" class="col-lg-7 contact-input">
                        <div class="contact-form-wrapper">
                            <div class="introduce">

                                <form class="row" id="" method="POST" action="">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Your Name</label>
                                            <div style="color: red;"><?= $errors['name'] ?></div>
                                            <input class="form-control form-control-lg" value='<?=$_SESSION['contact_name'] ?? ''?>' name="name" id="name" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <div style="color: red;"><?= $errors['phone'] ?></div>
                                            <input class="form-control" name="phone" value="<?=$_SESSION['contact_phone'] ?? ''?>" id="phone" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div style="color: red;"><?= $errors['email'] ?></div>
                                            <input class="form-control form-control-sm" value='<?=$_SESSION['contact_email'] ?? ''?>' id="email" name="email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">subject</label>
                                            <div style="color: red;"><?= $errors['subject'] ?></div>
                                            <input class="form-control form-control-sm" value='<?=$_SESSION['contact_subject'] ?? ''?>'  id="subject" name="subject" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="message">Your Message</label>
                                            <div style="color: red;"><?= $errors['message'] ?></div>
                                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" id="submit" class="rn-btn">
                                            <span>SEND MESSAGE</span>
                                            <i data-feather="arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contuct section -->
        <!-- Modal Portfolio Body area Start -->
       
        <!-- End Modal Portfolio area -->
        <!-- Modal Blog Body area Start -->
        <div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-news" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i data-feather="x"></i></span>
                        </button>
                    </div>

                    <!-- End of .modal-header -->

                    <div class="modal-body">
                        <img src="assets/images/blog/blog-big-01.jpg" alt="news modal" class="img-fluid modal-feat-img">
                        <div class="news-details">
                            <span class="date">2 May, 2021</span>
                            <h2 class="title">Digital Marketo to Their New Office.</h2>
                            <p>Nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
                                facer
                                possim assum.
                                Typi non
                                habent claritatem insitam; est usus legentis in iis qui facit eorum
                                claritatem.
                                Investigationes
                                demonstraverunt
                                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus
                                dynamicus, qui
                                sequitur
                                mutationem consuetudium lectorum.</p>
                            <h4>Nobis eleifend option conguenes.</h4>
                            <p>Mauris tempor, orci id pellentesque convallis, massa mi congue eros, sed
                                posuere
                                massa nunc quis
                                dui.
                                Integer ornare varius mi, in vehicula orci scelerisque sed. Fusce a massa
                                nisi.
                                Curabitur sit
                                amet
                                suscipit nisl. Sed eget nisl laoreet, suscipit enim nec, viverra eros. Nunc
                                imperdiet risus
                                leo,
                                in rutrum erat dignissim id.</p>
                            <p>Ut rhoncus vestibulum facilisis. Duis et lorem vitae ligula cursus venenatis.
                                Class aptent
                                taciti sociosqu
                                ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vitae
                                nisi
                                tortor. Morbi
                                leo
                                nulla, posuere vel lectus a, egestas posuere lacus. Fusce eleifend hendrerit
                                bibendum. Morbi
                                nec
                                efficitur ex.</p>
                            <h4>Mauris tempor, orci id pellentesque.</h4>
                            <p>Nulla non ligula vel nisi blandit egestas vel eget leo. Praesent fringilla
                                dapibus dignissim.
                                Pellentesque
                                quis quam enim. Vestibulum ultrices, leo id suscipit efficitur, odio lorem
                                rhoncus dolor, a
                                facilisis
                                neque mi ut ex. Quisque tempor urna a nisi pretium, a pretium massa
                                tristique.
                                Nullam in
                                aliquam
                                diam. Maecenas at nibh gravida, ornare eros non, commodo ligula. Sed
                                efficitur
                                sollicitudin
                                auctor.
                                Quisque nec imperdiet purus, in ornare odio. Quisque odio felis, vestibulum
                                et.</p>
                        </div>

                        <!-- Comment Section Area Start -->
                        <div class="comment-inner">
                            <h3 class="title mb--40 mt--50">Leave a Reply</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group"><input type="text" placeholder="Name">
                                        </div>
                                        <div class="rnform-group"><input type="email" placeholder="Email">
                                        </div>
                                        <div class="rnform-group"><input type="text" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <div class="rnform-group">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a class="rn-btn" href="#"><span>SUBMIT NOW</span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Section End -->
                    </div>
                    <!-- End of .modal-body -->
                </div>
            </div>
        </div>
        <!-- End Modal Blog area -->
        <!-- Back to  top Start -->
        <div class="backto-top">
            <div>
                <i data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- Back to top end -->
        <!-- Start Right Demo  -->
       

    </main>
    <!-- Start Footer Area -->
    <div class="rn-footer-area rn-section-gap section-separator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-area text-center">

                        <div class="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo/logo-vertical.png" alt="logo">
                            </a>
                        </div>

                        <p class="description mt--30">© 2022. All rights reserved by <a target="_blank" href="">Agbo Stephen Chinaza.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script>
        $(function () {
    setTimeout(function () {
        $(".handle").fadeOut(1500);
    }, 2500)
})

    </script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/aos.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from rainbowit.net/html/inbio/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 May 2022 03:41:05 GMT -->
</html>