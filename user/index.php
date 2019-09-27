<!DOCTYPE html>
<?php
 header('access-Control-Allow-Origin: *');
 include '../php/connect.php'; 
 // bs m3 id
if($_GET['id'] && $_GET['email'] && $_GET['password']){
    $id = $_GET['id'];  $email = $_GET['email'];  $password = $_GET['password'];
    $sql = "SELECT * FROM accounts WHERE id = '$id' AND email LIKE '$email' AND password LIKE '$password' ORDER BY votes DESC";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
if($row==false){
  $t = 'window.location.href="../login.php"';
  echo "<script>".$t."</script>";
}
$go = '?id='.$row['id']."&email=".$row['email']."&password=".$row['password'].'"';

}else{
    $t = 'window.location.href="../index.php"';
    echo "<script>".$t."</script>";
}

?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  <?php echo "Profile - ".$row['name']  ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="../profile/index.php?id=<?php echo $row['id']  ?>" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo "../".$row['photo']  ?>">
          </div>
        </a>
        <a href="../profile/index.php?id=<?php echo $row['id']  ?>" class="simple-text logo-normal">
        <?php echo $row['name']  ?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="active ">
            <a href="<?php $go;?>">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="imges.php<?php $go;?>">
              <i class="nc-icon nc-diamond"></i>
              <p>UPLOAD IMGES</p>
            </a>
          </li>
         
          <li class="active-pro">
            <a href="../index.php">
              <i class="nc-icon nc-spaceship"></i>
              <p>1Million1Winner</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">User Profile</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="<?php echo "../".$row['photo']  ?>" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?php echo "../".$row['photo']  ?>" alt="...">
                    <h5 class="title"><?php echo $row['name']  ?></h5>
                  </a>
                  <p class="description">
                    @1Million1Winner
                  </p>
                </div>
                <p class="description text-center">
                <?php echo $row['title']  ?>
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
              <div class="row">
                    <div class="update ml-auto mr-auto">
                      <!-- update profile -->
                      <button type="submit" onclick="window.location.href = '../profile/index.php?id=<?php echo $row['id'];?>';" class="btn btn-primary btn-round">Your Profile</button>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-md-12 col-12">                        <label>

                      Your Link to People Vote For You</label>
                      </div>
                    
                    </div>
                  </li>
                  <input type="text" class="form-control" placeholder="" value="www.1million1winner.com/profile/index.php?id=<?php echo $row['id']  ?>">

                  <li>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" disabled="" placeholder="Username" value="<?php echo $row['name']  ?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" disabled="" name="Email" value="<?php echo $row['email']  ?>" placeholder="Email">
                      </div>
                    </div>
                  </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" disabled="" placeholder="Country"  value="<?php echo $row['country']  ?>">
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea" name="textarea"><?php echo $row['title']  ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <!-- update profile -->
                      <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- cards -->
<div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Your Ranking</p>
                      <p class="card-title">1
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         
          
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Followers</p>
                      <p class="card-title"><?php echo $row['votes']  ?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- //cards -->





      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative TUQ3A
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
