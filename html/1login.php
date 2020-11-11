<?php  
  require_once '../database/accountDAO.php';
  require_once '../database/common.php'; 
 
  if( isset($_SESSION['error']) ) {
    $error = $_SESSION['error'];
    
    // once retrieve, remove it
    unset($_SESSION['error']);
  }
?>

<html lang="en">
<head>
    <title>🐶 Welcome to FureverHome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    
    <script src="../js/main.js"></script>
    <script src="../ownjs/1&2loginsignup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
 
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
          <div class="row d-flex justify-content-center">
              <img src="../images/logo_no_bg.png">

              <!-- Sign in error messages -->
              <?php
                if( isset($error) ) {
                  echo "
                      <font color='red'>
                          <h2>
                              $error
                          </h2>
                      </font>
                  ";
              }
              ?>
              <h1 class="col-12 font-weight-normal mt-3" style="margin-bottom: 15px;">Login</h1> 
              <br>

              <div id="error" class="col-8 mb-2" style="color:red; font-weight: bold;"></div>

              <form action='process_login.php' method='POST' class='p-2'>
            
                <div class="form-group row">
                  <label for="username" class="col-sm-3 col-form-label text-right">Username</label>
                  <div class="col-sm-9">
                    <input type="text" class="mx-2 form-control" id="username" placeholder="Username" name='username' required>
                  </div>
                </div>

                <!-- getElementById('password').value-->
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-3 col-form-label text-right">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="mx-2 form-control" id="password" placeholder="Password" name='password' required>
                  </div>
                </div>

                <span> 
                  <input type="checkbox" id="remember" style="margin-bottom:15px;" onclick="rememberMe()"> Remember me
                </span>

                <a class="col-12 text-center mt-3 mb-3 blue size pf" href="9passwordreset.php">Forgot Password? </a>

                <button class="btn btn-primary col-8 col-offset-2 size" id="login" onclick='ifValid()'>Log In</button><br>

                <a href="../html/2signup.php" class=" col-12 text-center mb-4 size" style="margin-top: 10px;">Create an account</a>
              </form>
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
  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>

</body>
</html>