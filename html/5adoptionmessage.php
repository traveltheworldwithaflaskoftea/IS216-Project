<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐶 Adoption Message 🐱</title>

     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <script src="../js/main.js"></script>
 
    
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
    
    <link rel="stylesheet" href="../css/adoption-message.css">

    <style>
       div.container{
        text-align:center;
      }

      h2.heading {
        margin-top: 30px;
      }
      div.message{
        margin-top: -20px;
        margin-bottom: 10px;
      }
      textarea.form-control{
        margin-top: 40px;
        margin-bottom: 25px;
      }
      h4,p {
        color: rgb(240, 239, 239);
      }
      div.paws {
        margin-top: 20px;
      }
      
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #a2c0be;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .closebtn {
      width: auto;
      padding: 10px 18px;
      background-color:#2b5c59;
    }

    /* Position the close button */

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;

    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #a2c0be;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
      
    }

    /* Close Button */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: darkblue;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }
      .closebtn {
        width: 100%;
      }
    }

    p.confirmation {
      color:black;
    }

    </style>

</head>
<body>

  <!-- Body section -->  
  <section class="" id="contact-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 bg-primary">
            <!-- <form action="#" class="p-5 contact-form"></form> -->

            <div class="container" id="adoption-message">
              
              <h2 class="h4 mb-5 heading">Adoption Message</h2> 

              <div class="row form-group">
                <div class="col-md-12 message">
                  <label for="message">Write a message to enquire about the Pet!</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  <?php 
                  
                  echo $_GET['id'] . "<br>";
                  echo $_GET['name'] . "<br>";
                  echo "<img src='" . $_GET['image'] . "' style='max-width: 400px; max-height: 1020px;'>";

                  ?>
                </div>
              </div>

              <div class="row form-group">
                  <div class="dropdown col-md-6">
                      
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Option1</a>
                          <a class="dropdown-item" href="#">Option2</a>
                          <a class="dropdown-item" href="#">Option3</a>
                      </div>
                  </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 bg-secondary appointment">
            <!-- <div class="contact-us row justify-content-center align-items-center h-100"> -->

              <!-- <div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1"><form action="/landing-page-template-do-not-delete/#wpcf7-f560-p590-o1" method="post" class="wpcf7-form" novalidate="novalidate" _lpchecked="1"> -->

                <div class="row justify-content-center p-2">
              <div class="col-lg-6 text-center heading-section mb-5 align-self-center">
                <div class="paws">
                  <span class="icon-paw"></span>
                </div>
                <h2 class="text-white mb-4">Request Appointment</h2>
                <ul class="list-unstyled text-left address">
                <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="560">
                <input type="hidden" name="_wpcf7_version" value="3.5">
                <input type="hidden" name="_wpcf7_locale" value="">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f560-p590-o1">
                <input type="hidden" name="_wpnonce" value="dbb28877d5">
                </div>
                
                <form action="6appointmentpage.php" method='POST'>
                <?php
      
                  echo"<input type='hidden' name='dog_id' value='" . $_GET['id'] . "'>";
                  echo"<input type='hidden' name='dog_name' value='" . $_GET['name'] . "'>";
                  echo"<input type='hidden' name='dog_image' value='" . $_GET['image'] . "'>";
                  echo"<input type='hidden' name='dog_address' value='" . $_GET['address'] . "'>";

                  
                ?>
                <div class="group">
                <div style="width: 100%; float: left; color: rgb(39, 37, 37);">
                <h4>What is the best way to reach you?</h4>
                <p><span class="wpcf7-form-control-wrap radio-98"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label>
                  <!-- Mode of contact radio-98-->
                  <input type="radio" name="radio-98" value="Phone">&nbsp;<span class="wpcf7-list-item-label">Phone</span></label></span><span class="wpcf7-list-item"><label>
                  <input required type="radio" name="radio-98" value="Email">&nbsp;<span class="wpcf7-list-item-label">Email</span></label></span></span></span></p>
                <h4>Days of the week you are available for appointment:</h4>
                <p><span class="wpcf7-form-control-wrap checkbox-465"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item"><label>
                  <!-- checkbox-465 mon-fri-->
                  <input type="radio" name="checkbox-465" value="Monday">&nbsp;<span class="wpcf7-list-item-label">Monday</span></label></span><span class="wpcf7-list-item"><label>
                  <input type="radio" name="checkbox-465" value="Tuesday">&nbsp;<span class="wpcf7-list-item-label">Tuesday</span></label></span><span class="wpcf7-list-item"><label>
                  <input type="radio" name="checkbox-465" value="Wednesday">&nbsp;<span class="wpcf7-list-item-label">Wednesday</span></label></span><span class="wpcf7-list-item"><label>
                  <input type="radio" name="checkbox-465" value="Thursday">&nbsp;<span class="wpcf7-list-item-label">Thursday</span></label></span><span class="wpcf7-list-item"><label>
                  <input type="radio" name="checkbox-465" value="Friday">&nbsp;<span class="wpcf7-list-item-label">Friday</span></label></span><span class="wpcf7-list-item"><label>
                <!-- <h4>Best time of day for your appointment:</h4>
                <p><span class="wpcf7-form-control-wrap checkbox-246"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item"><label>
                  <input type="checkbox" name="checkbox-246[]" value="Morning">&nbsp;<span class="wpcf7-list-item-label">Morning</span></label></span><span class="wpcf7-list-item"><label>
                  <input type="checkbox" name="checkbox-246[]" value="Afternoon">&nbsp;<span class="wpcf7-list-item-label">Afternoon</span></label></span></span></span></p>
                </div> -->
                </div>
                <button type="submit" style="margin-bottom: 20px;" class="btn btn-primary col-12 col-offset-2 size" id="request_appt">Request Appointment!</button>

              </div>

                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content animate">
                  <span class="close">&times;</span>
                  <p class="confirmation">Please select a contact option and date</p>
                </div>

              </div>
              <script>
              // Get the modal
              var modal = document.getElementById("myModal");

              // Get the button that opens the modal
              var btn = document.getElementById("request_appt");

              // Get the <span> element that closes the modal
              var span = document.getElementsByClassName("close")[0];

              // When the user clicks the button, open the modal 
              btn.onclick = function() {
                modal.style.display = "block";
              }

              // When the user clicks on <span> (x), close the modal
              span.onclick = function() {
                modal.style.display = "none";
              }

              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
              </script>

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
                <li><a href="7profilepage.php" class="smoothscroll">🙍 Profile</a></li>
                <li><a href= "6appointmentpage.php" class="smoothscroll">📆 Appointment</a></li>
                <li><a href="8adoptionbasket.php" class="smoothscroll">🛒 Adoption Basket</a></li>
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

  <!-- Script -->
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