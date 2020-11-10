<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      //Uncomment once our website is done 
      // require_once '../database/protect.php';   
  ?> 
  
  <title>🛒Adoption Basket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    
<<<<<<< Updated upstream:html/8adoptionbasket.php
  <!-- More scripts -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../ownjs/8.2adoptionbasket.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
=======
    <!-- More scripts -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
>>>>>>> Stashed changes:html/8adoptionbasket.html

  <!-- Axios -->
  <script src="https://unpkg.com/axios/dist/axios.js"></script>

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
<body onload="run_sql()">
<!-- <body> -->
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
                <img src="../html/images/logo_no_bg.png" height="55" alt="Furever_home_logo">
                <span class="text-primary">FureverHome</span>
                </a>
            </h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="3mainpage.php" class="nav-link">Home</a></li>
                <li><a href= "7profilepage.php" class="nav-link">🙍Profile</a></li>
                <li><a href= "6appointmentpage.php">📆Appointment</a></li>
                <li><a href="8adoptionbasket.php">🛒Adoption Basket</a></li>
                </ul>
            </nav>          
            </div>   

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    </header>

    <!-- Body -->
    <section style="margin-top: 120px;">
      <div class="card-deck" id='dog_card_deck'>
        <div id='app'>{{testing}}</div>
        <div class="card">
          <img class="card-img-top" src="images/golden1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">{{testing}}</small></p>
            <input type="checkbox" id="${result.id}" value="${result.id}" v-model="checkeddogs">
            <label for="${result.id}">I choose you!!</label>
            <p class="card-text"><small class="text-muted">Checked Dogs: {{checkeddogs}}</small></p>
            <form action='../database/delete_from_cart.php' method='POST'>
                <input type='hidden' id='${result.id}' name='dog_id' value='${result.id}'>
                <input type='submit' value='Remove from cart'>
            </form>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/golden2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/golden3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of body -->
    
        
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
 

</body>

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
<script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>

<!-- Vue -->
<script src="../ownjs/8.1adoptionbasket.js"></script>
<script>
  
</script>

</html>