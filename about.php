<!DOCTYPE html>
<?php
header('access-Control-Allow-Origin: *');
include 'php/connect.php';
if(isset($_GET['id']))
$id = $_GET['id'];
else
$id = 0;

$sql = "SELECT * FROM ourteam";

$result = mysqli_query($conn,$sql);

// while($row = mysqli_fetch_assoc($result)) { 
// echo $row;
// }

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>1 Million - 1 Winner - About</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html">1 Million - 1 Winner</a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                            <ul id="nav">
                                    <li class="active"><a href="./index.php">Home</a></li>
                                    <li><a href="./about.php">About</a></li>
                                    <!-- <li><a href="./blog.php">Blog</a></li> -->
                                    <li><a href="./contact.php">Contact</a></li>
                                    <li><a href="./Login.php">Login</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/38.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms">We Live For Passion</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                        <p class="wow fadeInUp" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et do sunt explicabo. Nemo enim ipsam et dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="#">Contact Us</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/17.jpg" alt="">
                        <div class="video-icon">
                            <!-- change the vadio -->
                            <a href="https://www.youtube.com/watch?v=sSakBz_eYzQ" class="video-play-btn"><i class="arrow_triangle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Why Choose Us Area Start -->
    <section class="why-choose-us-area bg-gray section-padding-80-0 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Why Choose Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </div>
                        <h4>High Quality Images</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>
                        <h4>Abundant Experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>

                <!-- Single Why Choose Area -->
                <div class="col-md-6 col-lg-4">
                    <div class="why-choose-us-content text-center mb-80 wow fadeInUp" data-wow-delay="500ms">
                        <div class="chosse-us-icon">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div>
                        <h4>Modern Equipments</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur isicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut elit, sed do eiusmod te</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose  us Area End -->

    <!-- Our Team Area Start -->
    <section class="our-team-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Team Member Area -->
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-6 col-xl-3">
                    <div class="team-content-area text-center mb-30 wow fadeInUp" data-wow-delay="100ms">
                        <div class="member-thumb">
                            <img src="<?php echo $row['photo'] ?>" alt="">
                        </div>
                        <h5><?php echo $row['name'] ?></h5>
                        <span><?php echo $row['specialty'] ?></span>
                        <div class="member-social-info">
                            <a href="<?php echo $row['facebook'] ?>"><i class="ti-facebook"></i></a>
                            <a href="<?php echo $row['twiter'] ?>"><i class="ti-twitter-alt"></i></a>
                            <a href="<?php echo $row['linkdin'] ?>"><i class="ti-linkedin"></i></a>
                            <a href="<?php echo $row['linkdin'] ?>"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
    </section>
    <!-- Our Team Area End -->

    <!-- Follow Area Start -->
    <div class="follow-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Vote for the most beautiful</h2>
                        <p>@1Million_1Winner</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Feed Area -->
        <div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/11.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/12.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/13.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/14.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/15.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="img/bg-img/16.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                    <a href="#">
                        <i class="ti-instagram" aria-hidden="true"></i>
                        <span>Alime_photographer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Follow Area End -->

 <!-- Footer Area Start -->
 <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                    href="https://www.facebook.com/mhmad.saade" target="_blank">TUQ3A</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="#">1 Million - 1 Winner</a>
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>