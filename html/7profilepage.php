<?php
  require_once '../database/common.php';
  require_once '../database/account.php';
  //Uncomment once our website is done 
  // require_once '../database/protect.php';   

  // $user_id = $_SESSION['user_id']; We use this once the sessions are set up 
  $username = $_SESSION['username'];
  $dao = new AccountDAO();
  $account_details = $dao->get_Account_detail($username);
  
  $name=$account_details->getName();
  $email=$account_details->getEmail();
  $phone_number=$account_details->getPhoneNumber();
  $postalcode=$account_details->getPostalCode();
?>

<html lang="en">
<head>
    <title>🐶 Profile 🐱</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <script src="../js/main.js"></script>
 
    <!-- Style sheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css"> 
    <link rel="stylesheet" href="../css/style.css">

    <style> 
        div.container{
            text-align:center;
        }
    </style>
    
</head>
<body>
  <!-- Top navigation bar -->
  <!-- Navigation bar -->
  <div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">

      <div class="row align-items-center">
          <div class="col-6 col-xl-2">
          <h1 class="mb-0 site-logo">
              <a href="3mainpage.php" class="h2 mb-0 navbar-brand">
              <img src="../images/logo_no_bg.png" height="55" alt="Furever_home_logo">
              <span class="text-primary">FureverHome</span>
              </a>
          </h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class='nav-item active'><a href="3mainpage.php" class="nav-link">🏚️ Home</a></li>
              <li class='nav-item'><a href= "7profilepage.php" class="nav-link">🙍 Profile</a></li>
              <li class='nav-item'><a href= "6appointmentpage.php">📆 Appointment</a></li>
              <li class='nav-item'><a href="8adoptionbasket.php">🛒 Adoption Basket</a></li>
              </ul>
          </nav>          
          </div>   

          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

      </div>
      </div>
  </header>

  <!-- Body -->
  <section class="site-section" id="adoption_basket">
    <div class="container" id="accordion">
        <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
            <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Profile</h2>
        </div>
    </div>

    <div lass="container justify-content-center ">
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col-md-5 col-0 "></div>
        <div class="col-md-4 justify-content-center text-left heading-section mb-5">
          <div>
            <h4> <?php echo $name ?> </h4>
              <p>
              <ul class="list-unstyled ul-paw primary mb-0">
                <li>Username: <?php echo $username ?></li>
                <li>Email: <?php echo $email ?></li>
                <li>Phone Number: <?php echo $phone_number ?></li>
                <li>Postal Code: <?php echo $postalcode ?></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-0"></div>
    </div>

    <div class="row justify-content-center"> 
              <button type="button" class=" col-xl-2 col-lg-3  col-sm-3 col-5  mx-2 mb-2 btn btn-primary">
                <a href="9passwordreset.php" class="text-white"> Password reset </a>
              </button>
              <button type="button" class="col-xl-2 col-lg-3  col-sm-3 col-5 mx-2 mb-2 btn btn-primary"> <a href='logout.php' class="text-white">Log Out</a></button>
    </div>
  </section>


  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-5">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>🐶FureverHome🐱 is a one-stop Pet Adoption portal that helps you find your perfect pet! Our portal allows you to search and set appointments with the nearest pet adoption places, add interested pets into your wishlist and many more!</p>
            </div>
            <div class="col-md-3 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="3mainpage.php" class="smoothscroll">Home</a></li>
                <li><a href="7profilepage.php" class="smoothscroll">Profile</a></li>
                <li><a href= "6appointmentpage.php" class="smoothscroll">Appointment</a></li>
                <li><a href="8adoptionbasket.php" class="smoothscroll">Adoption Basket</a></li>
              </ul>
            </div>
            <!-- Social Media Buttons-->
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Follow Us</h2>
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
          <form action="#" method="post" class="footer-subscribe">
            <div class="input-group mb-3">
              <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p class="copyright"><small>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This portal is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by FureverHome
            </small></p> 
          </div>
        </div> 
      </div>
    </div>
  </footer>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  <!-- Scripts -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>

</body>
</html>