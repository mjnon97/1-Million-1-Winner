<!DOCTYPE html>
<?php
header('access-Control-Allow-Origin: *');
include 'php/connect.php';

// FTP-EU.SITE4NOW.NET
// mjnon97-001

$sql = "SELECT * FROM accounts";

$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql);
$result3 = mysqli_query($conn,$sql);

if(isset($_GET['vote']) && isset($_GET['vote2'])){
    $id = $_GET['vote'];
    $votes = $_GET['vote2'];
    $votes = $votes+1;
        $sqlU = "UPDATE accounts SET votes = '$votes'  WHERE accounts.id = '$id' ;";
        $resultu = mysqli_query($conn,$sqlU);
        $t = 'window.location.href="index.php"';
       echo "<script>".$t."</script>";
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//  echo $ip;



    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>1 Million - 1 Winner</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
<style>
.btn-container {
    display: inline-block;
    padding: 16px 0px;
    margin: 0px 16px;
    overflow: hidden;
}
*, *:before, *:after {
    padding: 0px;
    margin: 0px;
    transition: 0.3s;
}
.standard-btn {
     color: #34495e;
    border: solid 1px #34495e;
    font-size: 1rem;
    position: relative;
    z-index: 1;
    padding: 15px 30px;
    cursor: pointer;
    font-size: 1.2rem;
    text-transform: uppercase;
    background: transparent;
}
.standard-btn:before {
    display: block;
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0px;
    height: 100%;
    z-index: -1;
    content: "";
    background: #34495e;
}

.standard-btn:hover {
      color: #fff;
      border: solid 1px #34495e;
}
.standard-btn:hover:before {
      width: 100%;
}
.b1{
    width:100%;
    height:50px;
}
</style>
<!-- // if local storge -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    //  if(localStorage.users){
    //                hide = JSON.parse(localStorage.users);
    //                 for(let item of hide){
    //                     var hidess = item.id;
    //                     $('#vote'+hidess).text('thanx for vote me');
    //                     console.log("hide",hidess);
    //             }}
    //             else{
    //                 console.log("false");
    //             }
                
    //             function hed(){
    //                   hide = JSON.parse(localStorage.users);
    //                 for(let item of hide){
    //                     var hidess = item.id;
    //                     $('#vote'+hidess).text('thanx for vote me');
    //                     console.log("hide",hidess);
    //                     }
    //             }
</script>
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
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i
                                class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.php" method="post">
                            <input type="search" name="top-search-bar" class="form-control"
                                placeholder="Search and hit enter...">
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
                        <a class="nav-brand" href="./index.php">1 Million - 1 Winner</a>

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
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i
                                        class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $row['photo'] ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12 col-lg-8 col-xl-6">
                            <div class="welcome-text">
                                <h2 data-animation="bounceInDown" data-delay="900ms">Hello <br>I'm <?php echo $row['name'] ?></h2>
                                <h6 data-animation="bounceInDown" data-delay="500ms">I live in <?php echo $row['country'] ?></h6>
                                <p data-animation="bounceInDown" data-delay="500ms"><?php echo $row['title'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
    </section>
    <!-- Welcome Area End -->

    <!-- Gallery Area Start -->
    <div class="alime-portfolio-area section-padding-80 clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Projects Menu -->
                    <div class="alime-projects-menu">
                        <div class="portfolio-menu text-center">
                            <button class="btn active" data-filter="*">All</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row alime-portfolio">


                    <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
                        <!-- Single Gallery Item -->
                        <div class="col-12 col-sm-6 col-lg-3 single_gallery_item Men mb-30 wow fadeInUp" data-wow-delay="700ms">
                        <div id="vote<?php echo $row2['id'] ?>">
                            <form method="GET" action="index.php">
                                <input class="nice" name="vote2" value="<?php echo $row2['votes'] ?>"/>
                                <button class="btn b1 standard-btn" name="vote" value="<?php echo $row2['id'] ?>" type="submit" onclick="Vote(<?php echo $row2['id'] ?>,<?php echo $row2['votes'] ?>)">Vote Now!</button>
                            </form>
                        </div>
                        <div class="single-portfolio-content">
                                <img src="<?php echo $row2['photo'] ?>"  alt="">
                                <div class="hover-content">
                                    <a href="<?php echo $row2['photo'] ?>" class="portfolio-img">+</a>
                                </div>
                            </div>
                            <button class="btn b1 standard-btn" onclick="window.location.href='profile/index.php?id= <?Php echo $row2['id']?>'">GO TO PROFILE</button>
                        </div>
                        
                    <?php } ?>
            </div>
           
            <!-- view more -->
            <!-- <div class="row">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="700ms">
                    <a href="#" class="btn alime-btn btn-2 mt-15">View More</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Follow Area Start -->
    <section class="follow-area clearfix">
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
        <?php while($row3 = mysqli_fetch_assoc($result3)) { ?>
                    <!-- Single Instagram Item -->
                    <div class="single-instagram-item">
                        <img src="<?php echo $row3['photo'] ?>" alt="">
                        <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                            <a href="#">
                                <i class="ti-instagram" aria-hidden="true"></i>
                                <span><?php echo $row3['name'] ?></span>
                            </a>
                        </div>
                    </div>
            <?php } ?>
                    
        </div>
    </section>
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
        <script>
             $( ".nice" ).hide();
            //  $('#vote'+1).text('thanx for vote me');
             var arr=[];
            function Vote(id,votes){                
                var obj={};
                obj.hide="#vote"+id;
                obj.id=id;
                obj.votes=votes+1;
                if(localStorage.users){
                    arr = JSON.parse(localStorage.users);
                    arr.push(obj);
                    for(let item of arr){
                        var hidess = item.id;
                        console.log("hide",hidess);
                 }
                    localStorage.users = JSON.stringify(arr);
                }
                else{
                    arr.push(obj);
                    localStorage.users = JSON.stringify(arr);}
            }
        </script>

</body>

</html>