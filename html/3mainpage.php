<!doctype html>
<html lang="en">
  <head>
    <title>🐶 FureverHome 😺</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <script src="../js/main.js"></script>
    
    <!-- Style sheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
        background-color: #fefefe;
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
        color: red;
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

  </style>
    
</head>
  

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section" onload="load_default_cards()">

    <link href="navbar.html" rel="import" />
    <!-- Navigation Bar -->
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

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
                <li><a href="3mainpage.php" class="nav-link">Home</a></li>
                <li><a href="#pet-section" class="nav-link">🐶 Find Your Pet</a></li>
                <li><a href= "7profilepage.php" class="nav-link">🙍 Profile</a></li>
                <li><a href= "6appointmentpage.php" class="nav-link">📆 Appointment</a></li>
                <li><a href="#contact-section" class="nav-link">☎️ Contact</a></li>
                <li><a href="8adoptionbasket.php" class="nav-link">🛒 Adoption Basket</a></li>
              </ul>
            </nav>       
          </div>
          
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" ><a href="" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          <!-- <div class="col-6 col-md-10">
          <nav class="site-navigation navbar navbar-expand-lg navbar-light bg-light float-right" style="position: right;" role="navigation">
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class=" main-menu navbar-nav mr-auto mt-2 mt-lg-0 text-right">
                <li class="nav-item"><a href="3mainpage.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#pet-section" class="nav-link">🐶 Find Your Pet</a></li>
                <li class="nav-item"><a href= "7profilepage.php" class="nav-link">🙍 Profile</a></li>
                <li class="nav-item"><a href= "6appointmentpage.php" class="nav-link">📆 Appointment</a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link">☎️ Contact</a></li>
                <li class="nav-item"><a href="8adoptionbasket.php" class="nav-link">🛒 Adoption Basket</a></li>
              </ul>
            </div>
          </nav>
          </div> -->

        </div>
      </div>
    </header>

    <!-- Body Section -->
    <section class="site-blocks-cover overflow-hidden bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 align-self-center text-center text-md-left">
            <div class="intro-text">
              <h1> Find your <span class="d-md-block">Furever Pet! </span></h1>
              <p class="mb-4">Matching these furry buddies to their<span class="d-block"> 🐶 FureverHome 🐱</p>
              <button type="submit" onclick="location.href='../html/questionnaire.html'" style="margin-bottom: 20px;" class="btn btn-primary col-8 col-offset-2 size" id="pet_compatibility">Take Pet Compatibility Test!</button>
            </div>
          </div>  
          <div class="col-md-5 align-self-end text-center text-md-right" style="margin-top: 50px;">
            <img src="../images/dogger_img_1.png" alt="Image" class="img-fluid cover-img">
          </div>
        </div>
      </div>    
    </section>

    <section class="site-section" id="pet-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-12 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="mb-2 heading" data-aos="fade-up">Find Your Dog! </h2>

                <!-- Single row -->
                <div class='row justify-content-center'>

                  <!-- // Col -->
                  <div class="col"> 
                    <div class="dropdown my-4" data-aos="fade-up">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Age
                      <span class="caret"></span></button>
                      <div class='form-group'>
                        <ul class="dropdown-menu p-2" id="myUL">
                          <input class='form-control' type="text" id="myInput" onkeyup="myFunction()"  title="Type in a name">

                          <li><a onClick="onclick_age('Baby')" href='#myInput'>Baby</a></li>
                          <li><a onClick="onclick_age('Young')" href='#myInput'>Young</a></li>
                          <li><a onClick="onclick_age('Adult')" href='#myInput'>Adult</a></li>
                          <li><a onClick="onclick_age('Senior')" href="#myInput">Senior</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- col  -->
                  <div class="col" data-aos="fade-up">
                    <div class="dropdown my-4">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Gender 
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu p-2" id="myUL2">
                        <input class='form-control' type="text" id="myInput2" onkeyup="myFunction2()"  title="Type in a name">

                        <li><a href="#myInput" onClick="onclick_gender('Male')"> Male</a></li>
                        <li><a href="#myInput" onClick="onclick_gender('Female')"> Female</a></li>
                        
                      </ul>
                    </div>
                  </div>

                  <!-- col  -->
                  <div class="col" data-aos="fade-up">
                    <div class="dropdown my-4">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Breed 
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu pre-scrollable p-2" id="myUL3">
                        <input class='form-control ' type="text" id="myInput3" onkeyup="myFunction3()"  title="Type in a name">

                        <div id="insert_list1">
                        <!-- <li><a href="#myInput" onclick="onclick_breed('Golden Retriever')">Golden Retriever</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Pug')">Pug</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Corgi')">Corgi</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Shiba Inu')">Shiba Inu</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Beagle')">Beagle</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Labrador Retriever')">Labrador Retriever</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('German Shepherd')">German Shepherd</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('French Bulldog')">French Bulldog</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Bulldog')">Bulldog</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Poodle')">Poodle</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Rottweiler')">Rottweiler</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('German Shorthaired Pointer')">German Shorthaired Pointer</a></li>
                        <li><a href="#myInput" onclick="onclick_breed('Yorkshire Terriers')">Yorkshire Terriers</a></li> -->
                        </div>

                        
                      </ul>
                    </div>
                  </div>

                  <!-- col  -->
                  <div class="col" data-aos="fade-up">
                    <div class="dropdown my-4">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">State 
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu pre-scrollable" id="myUL4">
                        <input class='form-control' type="text" id="myInput4" onkeyup="myFunction4()"  title="Type in a name">

                        <div id="insert_list2">
                        <!-- <li><a href="#myInput" onclick="onclick_state('AL')">Alabama</a></li>
                        <li><a href="#myInput" onclick="onclick_state('AL')">Alaska</a></li>
                        <li><a href="#myInput" onclick="onclick_state('AZ')">Arizona</a></li>
                        <li><a href="#myInput" onclick="onclick_state('AK')">Arkansas</a></li>
                        <li><a href="#myInput" onclick="onclick_state('CA')">California</a></li> -->
                        </div>
                    

                        
                      </ul>
                    </div>
                  </div>               

                <!-- end row  -->
                </div>
                <!-- end row -->
                
              <!-- Letting users know what fields have been selected -->
              <p id='filters_applied'>Filters Applied: 
                <span id='age'><badge id="age_badge" class="badge badge-dark"></badge></span>
                <span id='gender'><badge id="gender_badge" class="badge badge-dark"></badge></span>
                <span id='breed'><badge id="breed_badge" class="badge badge-dark"></badge></span>
                <span id='state'><badge id="state_badge" class="badge badge-dark"></badge></span>
                <span id='reset'></span>
              </p>

              <a href='#trainers-section'>
                <button class='btn btn-primary' onClick='search()'>Click here to find your forever pet!!</button>
              </a>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="site-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Welcome to Dogger Pet Care</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-right">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_3.jpg" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-left">
                <h2 class="text-black">Love &amp; Care</h2>
                <p class="mb-4">Far far away, behind the word mountains, Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row hover-1-wrap mb-5 mb-lg-0">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6"  data-aos="fade-left">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_1.jpg" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center"  data-aos="fade-right">
                <h2 class="text-black">Fearsome</h2>
                <p class="mb-4">Far far away, behind the word mountains, Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="row hover-1-wrap">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 mb-lg-0 col-lg-6 order-lg-2" data-aos="fade-right">
                <a href="#" class="hover-1">
                  <img src="images/dogger_img_sm_2.jpg" alt="Image" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1" data-aos="fade-left">
                <h2 class="text-black">Beautiful</h2>
                <p class="mb-4">Far far away, behind the word mountains, Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="#" class="btn btn-primary">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="site-section" id="about-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-5 align-self-center mr-auto text-left heading-section mb-5">
            <div class="paws ml-4">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-3">About Us</h2>
            <p class="lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="text-muted mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <ul class="list-unstyled ul-paw primary mb-0">
              <li>A small river named Duden flows</li>
              <li>It is a paradisematic country</li>
              <li>Roasted parts of sentences fly</li>
            </ul>
            
          </div>
          <div class="col-lg-6 text-left heading-section mb-5"  data-aos="fade-up" data-aos-delay="100">
            <a  data-fancybox data-ratio="1.5" href="https://vimeo.com/317571768" class="video-img">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="images/dogger_img_big_1.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Card sections for the pets -->
    <!-- This is the nice looking header -->
    <section class="site-section trainers" id="trainers-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-7 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="mb-2 heading">Pets Available</h2>
          </div>
        </div>
        <!-- Here starts the row -->
        <div class="row" id='dog-card-deck'>
        <div class="col-12" data-aos="fade-up"> 
          <img src="../images/giphy.gif" alt="Image" class="img-fluid justify-content-center" data-aos="fade-up">
        </div>

        <div class="col-12 mt-4" data-aos="fade-up"> 
          <h1> FINDING YOUR FUREVER PET</h1>
        </div>

        
      
        </div>
      </div>
    </section>

    <!-- <section class="site-section" id="pricing-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-7 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="mb-2 text-black heading">Pricing Table</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-primary p-3 p-md-5" data-aos="fade-up" data-aos-delay="">
            

            <div class="pricing">
              <h3 class="text-center text-white text-uppercase">Basic</h3>
              <div class="price text-center mb-4 ">
                <span><span>$47</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class="remove">Lorem ipsum dolor sit amet</li>
                <li class="remove">Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>

          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-dark  p-3 p-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing">
              <h3 class="text-center text-white text-uppercase">Premium</h3>
              <div class="price text-center mb-4 ">
                <span><span>$250</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class="remove">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-primary">Buy Now</a>
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 bg-primary  p-3 p-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing">
              <h3 class="text-center text-white text-uppercase">Professional</h3>
              <div class="price text-center mb-4 ">
                <span><span>$850</span> / year</span>
              </div>
              <ul class="list-unstyled ul-check success mb-5">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class="text-center">
                <a href="#" class="btn btn-secondary">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="site-section" id="faq-section">
      <div class="container" id="accordion">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Frequently Ask Questions</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row accordion justify-content-center block__76208">
          <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0" data-aos="fade-up"  data-aos-delay="">
            <img src="images/dogger_img_sm_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-5 mr-auto order-lg-1" data-aos="fade-up"  data-aos-delay="100">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="true" aria-controls="collapseFive">Should I stop letting my dog sleep with me at night?<span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">Is it okay to dress up your dog?<span class="icon"></span></a>
              </h3>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Why do dogs like belly rubs so much?<span class="icon"></span></a>
              </h3>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">Is a warm dry nose a sign of illness in dogs?<span class="icon"></span></a>
              </h3>
              <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
              </div>
            </div> 
          </div>

          
        </div>
      </div>
    </section> -->

    <!-- <section class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Happy Customers</h2>
          </div>
        </div>
        <div  data-aos="fade-up" data-aos-delay="200">
          <div class="owl-carousel nonloop-block-13">
            <div>
              <div class="block-testimony-1 text-center">
                
                <blockquote class="mb-4">
                  <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Ricky Fisher</h3>
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">

                

                <blockquote class="mb-4">
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Ken Davis</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">
                

                <blockquote class="mb-4">
                  <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 text-black">Mellisa Griffin</h3>

                
              </div>
            </div>

            <div>
              <div class="block-testimony-1 text-center">

                

                <blockquote class="mb-4">
                  <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>

                <figure>
                  <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
                </figure>
                <h3 class="font-size-20 mb-4 text-black">Robert Steward</h3>

                
              </div>
            </div>


          </div>
        </div>
      </div>
    </section> -->

    <section class="site-section" id="gallery-section">
      <div class="container-fluid">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Photo Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          
            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_1.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_1.jpg" alt="Image" class="img-fluid"></a>

            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_2.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_2.jpg" alt="Image" class="img-fluid"></a>
          
            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_3.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_3.jpg" alt="Image" class="img-fluid"></a>

            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_4.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_4.jpg" alt="Image" class="img-fluid"></a>
          
            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_5.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_5.jpg" alt="Image" class="img-fluid"></a>
          
            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_6.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_6.jpg" alt="Image" class="img-fluid"></a>

            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_6.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_7.jpg" alt="Image" class="img-fluid"></a>

            <a class="col-6 col-md-6 col-lg-4 col-xl-3 gal-item d-block" data-aos="fade-up" data-aos-delay="100" href="../images/dogger_img_sm_6.jpg" data-fancybox="gal"><img src="../images/dogger_img_sm_8.jpg" alt="Image" class="img-fluid"></a>
          
        </div>
      </div>
    </section>



    <!-- <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Dogger Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/dogger_img_sm_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">5 Things You Need To Know About Dog Massage</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/dogger_img_sm_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">5 Things You Need To Know About Dog Massage</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/dogger_img_sm_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">5 Things You Need To Know About Dog Massage</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="d-lg-flex blog-entry">
              <figure class="mr-4">
                <a href="single.html"><img src="images/dogger_img_sm_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="blog-entry-text">
                <h3><a href="single.html">5 Things You Need To Know About Dog Massage</a></h3>
                <span class="post-meta mb-3 d-block">April 17, 2019</span>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p><a href="#" class="">Read More..</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->



    <!-- <section class="site-section " id="services-section">
      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
          <div class="col-lg-6 text-center heading-section mb-5">
            <div class="paws">
              <span class="icon-paw"></span>
            </div>
            <h2 class="text-black mb-2">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
            
            <div class="block_service">
              <img src="images/dogger_checkup.svg" alt="Image mb-5">
              <h3>Dog Checkup</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="block_service">
              <img src="images/dogger_dermatology.svg" alt="Image mb-5">
              <h3>Dog Dermatology</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="block_service">
              <img src="images/dogger_bones.svg" alt="Image mb-5">
              <h3>For Strong Teeth</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div>


          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="">
            
            <div class="block_service">
              <img src="images/dogger_veterinary.svg" alt="Image mb-5">
              <h3>Dog First Aid</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>

          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="100">
            <div class="block_service">
              <img src="images/dogger_dryer.svg" alt="Image mb-5">
              <h3>Dog Dryer</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div>
          <div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
            <div class="block_service">
              <img src="images/dogger_veterinarian.svg" alt="Image mb-5">
              <h3>Expert Veterinarian</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            </div>
          </div>
            
        </div>
      </div>
    </section> -->

    <!-- Contact -->
    <section class="" id="contact-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-6 bg-primary">
            <form action="#" class="p-5 contact-form">
              
              <h2 class="h4 mb-5 heading">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-dark btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-6 bg-secondary">
            <div class="row justify-content-center align-items-center h-100 p-2">
              <div class="col-lg-6 text-center heading-section mb-5 align-self-center">
                <div class="paws">
                  <span class="icon-paw"></span>
                </div>
                <h2 class="text-white mb-5">Contact Us</h2>
                <ul class="list-unstyled text-left address">
                  <li>
                    <span class="d-block">Address:</span>
                    <p>69-35 Grand Avenue New York, USA</p>
                  </li>
                  <li>
                    <span class="d-block">Phone:</span>
                    <p>+(718) 565-9888</p>
                  </li>
                  <li>
                    <span class="d-block">Email:</span>
                    <p>hellothere@fureverhome.com</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
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
                <p>🐶 FureverHome 🐱 is a one-stop Pet Adoption portal that specialises in helping you find the perfect dog! Our portal allows you to search and set appointments with the nearest pet adoption places, add interested doggies into your wishlist and many more!</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#home-section" class="smoothscroll">Home</a></li>
                  <li><a href="#pet-section" class="smoothscroll">Find Your Pet</a></li>
                  <li><a href="7profilepage.php" class="smoothscroll">Profile</a></li>
                  <li><a href= "6appointmentpage.php" class="smoothscroll">Appointment</a></li>
                  <li><a href="8adoptionbasket.php" class="smoothscroll">Adoption Basket</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact</a></li>
                </ul>
              </div>
              <!-- Social Media Buttons-->
              <div class="col-md-3">
                <h2 class="footer-heading mb-2">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mt-4 mb-1">Subscribe Newsletter</h2>
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

  </div> <!-- .site-wrap -->  

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
  <script src="../ownjs/3mainpage.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/@petfinder/petfinder-js/dist/petfinder.min.js"></script>

</body>
</html>