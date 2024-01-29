<!doctype html>
<html class="no-js" lang="zxx">
<?php
include "config.php";
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>College Club</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.jpg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div class="header-top_area" style="background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>College Club</span></p>
                                </div>
                                <div class="text_wrap">
                                    <p><span>Manege by<a href="http://pmgohil.000webhostapp.com/">Pm Gohil</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <img src="img/logo.png" height="100px" alt="">
                                        <p>
                                            <font size="3vh" color="#6E7B8B">College Club</font>
                                        </p>
                                        </img>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#home">home</a></li>
                                                <li><a href="#syllabus">Syllabus</a></li>
                                                <li><a href="#material">Material</a></li>
                                                <li><a href="#contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" id="home">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>Boost up your skills <br>
                                    with a new way of <br>
                                    learning.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ single_carouse -->
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="popular_program_area section__padding" id="syllabus">
        <!-- download_syllabus_area_start  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center" align="center">
                        <h3>Download Syllabus</h3><br>
                    </div>
                </div>
            </div>

            <div class="tab-content d-flex justify-content-center" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <!-- Subject 1 -->
                        <div>
                            <div class="single__program" style="margin:3vh;">
                                <div class="program_thumb">
                                    <img src="img/program/syllabusImage.jpg" alt="">
                                </div>
                                <div class="program__content">
                                    <?php
                                    $selSyllabus = "select * from `syllabus`";
                                    $resSyllabus = mysqli_query($con, $selSyllabus);
                                    if ($resSyllabus == TRUE) {
                                        if($resSyllabus != ""){
                                        while ($rowSyllabus = mysqli_fetch_assoc($resSyllabus)) {
                                              $sid = $rowSyllabus['sid'];
                                    ?>
                                            <h4><?php echo $rowSyllabus['sname']; ?></h4>
                                            <a href="<?php echo $rowSyllabus['spdf']; ?>" class="boxed-btn5" download>Download</a>
                                    <?php
                                        } 
                                    }
                                        else{echo"Does not contain a data in database..";}
                                    
                                    } else {
                                        echo "Not Work";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- download_syllabus_area_end -->

    <!-- download_material_area_start  -->
    <div class="popular_program_area section__padding " id="material">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Download Material</h3><br>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <!-- Subject 1 -->
                        <div class="col-lg-5 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/s1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <?php
                                    $selSub1 = "SELECT * FROM `sub1pdfdownload`";
                                    $resSub1 = mysqli_query($con, $selSub1);
                                    if ($resSub1 == TRUE) {
                                        while ($rowSub1 = mysqli_fetch_assoc($resSub1)) {
                                            if($rowSub1 != ""){
                                            $s1id = $rowSub1['s1id'];
                                    ?>
                                            <h4><?php echo $rowSub1['s1name']; ?></h4>
                                            <a href="<?php echo $rowSub1['s1pdf']; ?>" class="boxed-btn5" download>Download</a>
                                    <?php
                                        }
                                        else { echo"Does not contain a data..";}
                                    }} else {
                                        echo "Not Work";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                   <!-- Subject 2 -->
                        <div class="col-lg-5 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/s2.png" alt="">
                                </div>
                                <div class="program__content">
                                    <?php
                                    $selSub2 = "SELECT * FROM `sub2pdfdownload`";
                                    $resSub2 = mysqli_query($con, $selSub2);
                                    if ($resSub2 == TRUE) {
                                        while ($rowSub2 = mysqli_fetch_assoc($resSub2)) {
                                            $s1id = $rowSub2['s2id'];
                                    ?>
                                            <h4><?php echo $rowSub2['s2name']; ?></h4>
                                            <a href="<?php echo $rowSub2['s2pdf']; ?>" class="boxed-btn5" download>Download</a>
                                    <?php
                                        }
                                    } else {
                                        echo "Not Work";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Subject 3 -->
                        <div class="col-lg-5 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/s3.png" alt="">
                                </div>
                                <div class="program__content">
                                    <?php
                                    $selSub3 = "select * from `sub3pdfdownload`";
                                    $resSub3 = mysqli_query($con, $selSub3);
                                    if ($resSub3 == TRUE) {
                                        while ($rowSub3 = mysqli_fetch_assoc($resSub3)) {
                                            $s3id = $rowSub3['s3id'];
                                    ?>
                                            <h4><?php echo $rowSub3['s3name']; ?></h4>
                                            <a href="<?php echo $rowSub3['s3pdf']; ?>" class="boxed-btn5" download>Download</a>
                                    <?php
                                        }
                                    } else {
                                        echo "Not Work";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <!-- Subject 4 -->
                        <div class="col-lg-5 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/s4.png" alt="">
                                </div>
                                <div class="program__content">
                                    <?php
                                    $selSub4 = "select * from `sub4pdfdownload`";
                                    $resSub4 = mysqli_query($con, $selSub4);
                                    if ($resSub4 == TRUE) {
                                        
                                        while ($rowSub4 = mysqli_fetch_assoc($resSub4)) {
                                            $s4id = $rowSub4['s4id'];
                                    ?>
                                            <h4><?php echo $rowSub4['s4name']; ?></h4>
                                            <a href="<?php echo $rowSub4['s4pdf']; ?>" class="boxed-btn5" download>Download</a>
                                    <?php
                                        }
                                    } else {
                                        echo "Not Work";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- popular_program_area_end -->



    <!-- footer start -->
    <footer class="footer" id="contact" style="background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);">
        <div class="footer_top">
            <div class="container">
                <div class="newsLetter_wrap">
                    <div class="row justify-content-between">

                        <div class="col-md-12 col-lg-5">
                            <div class="footer_widget">
                                <h3 class="footer_title" align="center">
                                    Stay Updated
                                </h3>
                                <div class="socail_links" align="center">
                                    <Style>
                                        #socail_link {
                                            display: inline-block;
                                            background: -webkit-linear-gradient(131deg, #D1D9E1 0%, #009DFF 99%);
                                            color: black;
                                            padding: 3vh;
                                            margin: 1vh;
                                            border-radius: 1vh 3vh;
                                        }
                                    </style>
                                    <p class="socail_icons" style="">
                                        <a class="fa fa-envelope" id="socail_link" href="mailto:pmgohil45@gmail.com"></a>
                                        <a class="fa fa-facebook" id="socail_link" href="https://www.facebook.com/pm.gohil.4545"></a>
                                        <a class="fa fa-twitter" id="socail_link" href="https://twitter.com/pm_gohil45"></a>
                                        <a class="fa fa-linkedin" id="socail_link" href="https://www.linkedin.com/in/pm-gohil-44a74a1b1/"></a>
                                        <a class="fa fa-github" id="socail_link" href="https://github.com/pmgohil45"></a>
                                        <a class="fa fa-instagram" id="socail_link" href="https://www.instagram.com/pm_gohil45/"></a>
                                        <a class="fa fa-whatsapp" id="socail_link" href="https://wa.me/+919512240793"></a>
                                        <a class="fa fa-skype" id="socail_link" href="https://web.skype.com/"></a>
                                        <a class="fa fa-reddit" id="socail_link" href="https://www.reddit.com/user/pmgohil_45"></a>
                                        <a class="fa fa-phone" id="socail_link" href="tel:+919512240793"></a>
                                        <a class="fa fa-pinterest" id="socail_link" href="https://in.pinterest.com/pmgohil45/_saved/"></a>
                                        <a class="fa fa-telegram" id="socail_link" href="t.me/@pm_gohil45"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="#contact">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>