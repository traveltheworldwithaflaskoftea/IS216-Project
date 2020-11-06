<?php
  require_once '../database/accountDAO.php'; 
  require_once('../database/common.php');

  $msg = '';
  // var_dump($_POST['password']); 
  // var_dump($_POST['submit']); 
  
  // if (isset($_POST['submit']) && $_POST['name'] != '' // is checking that they are not empty
  // && $_POST['age'] != '' && $_POST['gender'] != ''){  // necessary?
  //     $name = $_POST['name']; 
  //     $age = $_POST['age']; 
  //     $gender= $_POST['gender']; 
  //     $dao->add($name, $age, $gender);
  //     $cats= $dao->getCats(); 
  //     $msg = 'A new cat has been added'; 
  // } else {
  //     $cats = $dao->getCats();
  // }
  
  
?>


<html lang="en">
<head>
  <title>🐶 Sign Up 🐱</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
  
  <script src="../js/main.js"></script>
  <script src="../ownjs/1login.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
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
      text-align: center;
    }
    h2{
      text-align: center;
      margin-bottom: 30px;
    }
  </style>

</head>
<body>
  <div class="container">
    <div class="row  d-flex justify-content-center align-middle mt-4 ">
      <div class="col-6 shadow white mt-5 mb-5">
        <div class="row d-flex justify-content-center" style="margin-bottom: 15px;">
          <img src="../images/logo_no_bg.png">  
          <h1 class="col-12 font-weight-normal mt-3">Sign Up</h1> 
          <span class="mb-0">Create An Account With Us!</span>
          <br>
        </div>
        <form method='POST' action='2signup.php'>
          <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label text-right">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name='username' id="username" placeholder="Username">
            </div>
          </div>

          <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label text-right">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name='name'  id="name" placeholder="Name">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-3 col-form-label text-right">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name='password' id="inputPassword" placeholder="Password">
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-right">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name='email' placeholder="Email">
            </div>
          </div>

          <div class="form-group row">
            <label for="phone_number" class="col-sm-3 col-form-label text-right">Phone number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="phone_number" placeholder="Phone number">
            </div>
          </div>

          <div class="form-group row">
            <label for="postal_code" class="col-sm-3 col-form-label text-right">Postal code</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="postal_code" placeholder="Postal code">
            </div>
          </div>

        </form>

  
              <p>By creating an account, you agree to our <a href="https://www.termsandconditionsgenerator.com/live.php?token=4T0tnknEDWPdrvAaDG4MDUdR5cyhn35h" style="color:dodgerblue">Terms & Conditions</a>.</p>
              
              <button type="submit" style="margin-bottom: 20px;" class="btn btn-primary col-8 col-offset-2 size" id="connect">Sign Up!</button><br>

        </div>
      </div>
    </div>
  </div>

  

  <!-- Footer -->
  <footer class="login-footer fixed-bottom">
    <span>Copyright &copy; FureverHome</span>
  </footer>

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