<html>
<head>
    <?php
      //Uncomment once our website is done 
      // require_once '../database/protect.php';  
    $appointment_page_dict = [];

    if(isset($_POST)){
    var_dump($_POST);
    };
      
    //   $user = $_SESSION['username'];
    $user = 'SupremeLeader555';

    if(!array_key_exists($user, $appointment_page_dict)){
        $appointment_page_dict[$user] = [
            'contact_mode' => $_POST['contact_mode'],
            'day' => $_POST['checkbox-465'][0],
            'time' => $_POST['checkbox-246'][0]
        ];
    }
    else {
        $appointment_page_dict[$user] = [
            'contact_mode' => $_POST['contact_mode'],
            'day' => $_POST['checkbox-465'][0],
            'time' => $_POST['checkbox-246'][0]
        ];
    };

      var_dump($appointment_page_dict);

    echo json_encode($appointment_page_dict); 

    ?> 
    
    <title>📆Appointment Page</title>

    <!-- scripts -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- this stylesheet below make our layout weird tbh -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- Normal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <script src="../js/main.js"></script>
    <script src="../ownjs/6appointmentpage.js"></script>
    <script type="text/javascript">
        var appointment_page_dict = <?php echo json_encode($appointment_page_dict) ?>;
        console.log(appointment_page_dict);
    </script>

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
   
    
    <!---Internal CSS Styling -->
    <!-- The internal css styling also makes this weird -->
    <!-- <style> 
      
        .sidebar{ 
            background-color: #cbe7e5; 
            padding: 5px; 
            margin: 0px;
            position: fixed; 
            left: 0; 
            top: 10; 
            height: 100%;
            line-height: 40px;
            max-width: 20%;
        }

        .appointmentpage{ 
            position: absolute;
            top: 10; 
            left: 20px; 
            max-width: 80%;           
        }
     
    </style> -->
</head>
   
<body onload="maps_api(75212,91723)">

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
                <li><a href= "7profilepage.php" class="nav-link">🙍 Profile</a></li>
                <li><a href= "6appointmentpage.php">📆 Appointment</a></li>
                <li><a href="8adoptionbasket.php">🛒 Adoption Basket</a></li>
                </ul>
            </nav>          
            </div>   

            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
        </div>
    </header>

    <!-- Body -->
    <section class="site-section" id="appointments">
        <div class="container" id="accordion">
            <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-6 text-center heading-section mb-5">
                <div class="paws">
                <span class="icon-paw"></span>
                </div>
                <h2 class="text-black mb-2">Upcoming Appointments</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
    
        <div class="row accordion justify-content-center block__76208">
            <div class="col-lg-7 order-lg-2 mb-5 mb-lg-0" data-aos="fade-up"  data-aos-delay="">
                <div class='appointmentpage'>

                    <h1>Directions</h1>

                    <h2 id='map'> IM THE MAP!</h2>
                    <p>
                        insert map api
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                    </p>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- Button -->
                        <div class="col-sm-5 col-md-3 col-lg-3 col-xl-2 text-left">
                            <!-- JavaScript display_reviews() function populates this section of HTML -->
                            <button style="margin-bottom: 10px;" class="btn btn-primary p-2" type="button" data-toggle="collapse" data-target="#day1">Day 1
                            </button>

                            <button style="margin-bottom: 10px;" class="btn btn-primary p-2" type="button" data-toggle="collapse" data-target="#day2">Day 2
                            </button>

                            <button style="margin-bottom: 10px;" class="btn btn-primary p-2" type="button" data-toggle="collapse" data-target="#day3">Day 3
                            </button>
                        </div>

                        <!-- Day Information -->
                        <div  class="col-sm-7 col-md-9 col-lg-9 col-xl-10">
                            <div class="collapse show" id="day1"> 
                                <!-- <div class="card-body"> 
                                    <div class="card card-body">  -->
                                        <div class="container-fluid">  
                                            <h2 style="font-weight: bold">Day 1 Schedule </h2>
                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Organization:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">Love Dogs</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Meeting Method:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7"><a href='zoom.us'> Zoom </a></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Date:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">23 November</div>
                                            </div>


                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Time:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">3.30pm</div>
                                            </div>
                                            <!-- <p> 
                                                <table border='1' width=100%> 
                                                    <tr>
                                                        <th colspan='2'>Love cats </th>
                                                    </tr> 
                                                    <tr>
                                                        <th>Meeting method</th>
                                                        <td>
                                                            <a href='zoom.us'> Zoom </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time</th>
                                                        <td>23 November 3.30pm</td>
                                                    </tr>
                                                </table>
                                            </p> -->
                                        </div>
                                    <!-- </div>
                                </div> -->
                            </div>
                        
                            <div class="collapse" id="day2"> 
                                <div class="card-body"> 
                                    <!-- <div class="card card-body"> 
                                        <div class="container-fluid">   -->
                                            <h2 style="font-weight: bold">Day 2 Schedule </h2>
                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Organization:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">Sunshine Pets</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Meeting Method:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">1201 Macklind Ave, St. Louis, MO 63110, United States</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Date:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">27 November</div>
                                            </div>


                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Time:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">4.00pm</div>
                                            </div>
                                            <!-- <p> 
                                                <table border='1' width=100%> 
                                                    <tr>
                                                        <th colspan='2'>Sunshine Pets </th>
                                                    </tr> 
                                                    <tr>
                                                        <th>Meeting method</th>
                                                        <td>
                                                            1201 Macklind Ave, St. Louis, MO 63110, United States
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time</th>
                                                        <td>27 November 3.30pm</td>
                                                    </tr>
                                                </table>
                                            </p> -->
                                        <!-- </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="collapse" id="day3"> 
                                <div class="card-body"> 
                                    <!-- <div class="card card-body"> 
                                        <div class="container-fluid">   -->
                                            <h2 style="font-weight: bold">Day 3 Schedule </h2>
                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Organization:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7"> Kitty Doggy Party</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Meeting Method:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7"> <a href='zoom.us'> Zoom </a></div>
                                            </div>

                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Date:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">30 November</div>
                                            </div>


                                            <div class="row">
                                                <div class="col-5">
                                                    <ul class="list-unstyled ul-paw primary mb-0">
                                                        <li>
                                                        Time:
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-7">9.30am</div>
                                            </div>
                                            <!-- <p> 
                                                <table border='1' width=100% > 
                                                    <tr>
                                                        <th colspan='2'>Kitty Doggy Party </th>
                                                    </tr> 
                                                    <tr>
                                                        <th>Meeting method</th>
                                                        <td>
                                                            <a href='zoom.us'> Zoom </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Date & Time</th>
                                                        <td>30 November 9.30am</td>
                                                    </tr>
                                                </table>
                                            </p> -->
                                        <!-- </div>
                                    </div> -->
                                </div>
                            </div>
                        </div> 
                    </div> <!-- End of row div -->
                </div> <!-- End of container div -->

            </div>



                    
        </div>
    </div>
    </section>

    <hr>

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
