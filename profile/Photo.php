<!DOCTYPE html>
<?php
 header('access-Control-Allow-Origin: *');
 include '../php/connect.php'; 
 // bs m3 id
if($_GET['id']){
    $id = $_GET['id'];
    $sql = "SELECT * FROM accounts WHERE id ='$id' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $sqlPhoto = "SELECT * FROM allphoto WHERE userid = '$id'";
    $result2 = mysqli_query($conn,$sqlPhoto);
    $row2 = mysqli_fetch_assoc($result2);

}else{
    $t = 'window.location.href="../index.php"';
    echo "<script>".$t."</script>";
}



?>

<html lang="en">
  <head>
  <title><?php echo "Profile - Photo - ".$row['name']  ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="<?php echo "index.php?id=".$row['id']; ?>"><?php echo $row['name']; ?><span>.</span></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
                <li class="colorlib-active"><a href="<?php echo "index.php?id=".$row['id']; ?>">Home</a></li>
          <li><a href="<?php echo "Photo.php?id=".$row['id']; ?>">Photo</a></li>
          <li class="active-pro">
            <a href="../index.php">
              <i class="nc-icon nc-spaceship"></i>
              <p>1Million1Winner</p>
            </a>
          </li>
				</ul>
			</nav>

			<div class="colorlib-footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/mhmad.saade" target="_blank">TUQ3A</a>
				<ul>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section-2">
				<div class="photograhy">
					<div class="row no-gutters">
                    <?php while($row2 = mysqli_fetch_assoc($result2)) { ?>
                        <div class="col-md-3">
							<a href="#" class="photography-entry img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo "../".$row2['photo'] ?>);">
								<div class="overlay"></div>
								
							</a>
                        </div>
                    <?php }?>
                    </div>    
                </div>
			</section>
	    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>