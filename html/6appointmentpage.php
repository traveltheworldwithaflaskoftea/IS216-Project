<?php
  session_start();
?>

<html>
<head>
    <title>📆Appointment Page</title>

    <!-- scripts -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    
    <!---Internal CSS Styling -->
    <style> 
      
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
     
    </style>
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
                <a href="3mainpage.html" class="h2 mb-0 navbar-brand">
                <img src="../html/images/logo_no_bg.png" height="55" alt="Furever_home_logo">
                <span class="text-primary">FureverHome</span>
                </a>
            </h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="3mainpage.html" class="nav-link">Home</a></li>
                <li><a href= "7profilepage.html" class="nav-link">🙍Profile</a></li>
                <li><a href= "6appointmentpage.html">📆Appointment</a></li>
                <li><a href="8adoptionbasket.html">🛒Adoption Basket</a></li>
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
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="fade-up"  data-aos-delay="">
                <div class='sidebar'>
                    
                    <input name='day[]' type='checkbox' value=1>
                    <a href="#day1"> Day 1</a> 
                    <br/>
                                
                    <input name='day[]' type='checkbox' value=2>
                    <a href="#day2"> Day 2</a> 
                    <br/>
                                
                    <input name='day[]' type='checkbox' value=3>
                    <a href="#day3"> Day 3</a> 
                    <br/>
                                
                </div> -->
                
                <!--- End of container div -->

                <div class='appointmentpage'>

                    <h1> Appointment Page </h1>

                    <h2 id='map'> IM THE MAP!</h2>
                    <p>
                        insert map api
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        v Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                        
                    </p>



                    <h2 id='day1'> Day 1 Schedule </h2>
                    
                    <p> 
                        <table border='1'> 
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
                    </p>

                    <h2 id='day2'> Day 2 Schedule </h2>
                    
                    <p> 
                        <table border='1'> 
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
                    </p>

                    <h2 id='day3'> Day 3 Schedule </h2>
                    
                    <p> 
                        <table border='1'> 
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
                    </p>
                    <!-- <div class="container">
                        
                        <div class="row">
                        <div class="col-sm">
                            One of three columns
                        </div>
                        <div class="col-sm">
                            One of three columns
                        </div>
                        <div class="col-sm">
                            One of three columns
                        </div>
                        </div>
                    </div> -->

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Day 1 Schedule
                            </button>
                            </h2>
                        </div>
                    
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                            
                                <h2 id='day1'> Day 1 Schedule </h2>
                                
                                <p> 
                                    <table border='1'> 
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
                                </p>
                            </div>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 2 Schedule
                            </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <h2 id='day2'> Day 2 Schedule </h2>
                    
                                <p> 
                                    <table border='1'> 
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
                                </p>
                        
                            </div>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 3 Schedule
                            </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <h2 id='day3'> Day 3 Schedule </h2>
                    
                                <p> 
                                    <table border='1'> 
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
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <p> 
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, earum molestias temporibus, accusantium, velit provident modi repellat nisi commodi omnis rem aut nihil deserunt sunt quibusdam odio. Dolorum, numquam consequatur?

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptatum quaerat, nemo accusamus cupiditate nisi perspiciatis, at excepturi veritatis et repellendus necessitatibus! Reiciendis possimus officia commodi repellendus ut minima dignissimos.
                
            </p>

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
                    <li><a href="3mainpage.html" class="smoothscroll">Home</a></li>
                    <li><a href="7profilepage.html" class="smoothscroll">Profile</a></li>
                    <li><a href= "6appointmentpage.html" class="smoothscroll">Appointment</a></li>
                    <li><a href="8adoptionbasket.html" class="smoothscroll">Adoption Basket</a></li>
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
