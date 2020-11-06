console.log("main.js is loaded");

// adoption baseket for page 8
// function adoptionBasket(){
//     var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
// 	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

// 	var client  = new petfinder.Client({apiKey: id, secret: secret});

// 	client.animal.search({
// 		type: 'dog'
// 		})
// 	.then(resp => {
// 		// Do something with resp.data.breeds
// 		var results_array = resp.data.animals;
// 		console.log(results_array);
// 	});
// }

console.log('adoption basket is defined!!');

// CODE DO MAKE THE FUCKING MAPS start and end 
function maps_api(start,end){
	console.log("map api triggered")
	var maps_api_key = 'AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0';
	var starting = start;
	var ending = end;
	var url = "https://www.google.com/maps/embed/v1/directions?key=" + maps_api_key + "&origin=" + starting + "&destination=" + ending 
	var html = `<iframe src="${url}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`

	//innerHTML html into whatever div we need 
	document.getElementById('map').innerHTML = html;

}

// CODE DO MAKE THE FUCKING MAPS start and end 
function maps_api_waypoints(start,end,waypoints_arary){
	console.log("map api  with waypoints is triggered")
	var maps_api_key = 'AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0';
	var starting = start;
	var ending = end;
	var waypoints = waypoints_arary.split("|");

	var url = "https://www.google.com/maps/embed/v1/directions?key=" + maps_api_key + "&origin=" + starting + "&destination=" + ending + "&waypoints=" + waypoints
	var html = `<iframe src="${url}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`

	//innerHTML html into whatever div we need 
	document.getElementById('map').innerHTML = html;

}
// sample of the HTML for embedding 
/* <iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0&origin=75212&destination=91723&waypoints=94549&avoid=tolls|highways" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> */

//END OF MAPS
// Function1: Displaying the card decks
function display_cards(result_array){
	var html = ''; // This will be used to replace dog-card-deck innerHTML later
		for (result of result_array){
			if(result.photos.length > 0){ //making sure the array has pictures
				html += `<div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
							<div class="trainer">
							<figure>
							<a href='4individualpage.php?id=${result.id}'><img src="${result.photos[0]['full']}" alt="Image" class="img-fluid"></a>
							</figure>
							<div class="px-md-3">
								<h3>${result.name}</h3>
								<p>${result.description}</p>
							</div>
							</div>
						</div>
						`;
				}
			}
		// end for loop, now lets put html inside the dog-card-deck
		document.getElementById('dog-card-deck').innerHTML = html;
}
// End of displaying the card decks 

// Function2: Loading the cards when the page loads for the first time
function load_default_cards(){
	list_states();
	list_dog();
	var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

	var client  = new petfinder.Client({apiKey: id, secret: secret});

	client.animal.search({
		type: 'dog'
		})
	.then(resp => {
		// Do something with resp.data.breeds
		var results_array = resp.data.animals;
		console.log(results_array);
		display_cards(results_array);
	});
}
// End of loading cards for the first time

// Function3: Search button which takes in params and calls the PetFinder API 
function search(){
	var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';
	// var search_state = '';

	var client  = new petfinder.Client({apiKey: id, secret: secret});
	var search_age = document.getElementById('age_badge').innerHTML.slice(1,-1);
	var search_gender = document.getElementById('gender_badge').innerHTML.slice(1,-1);
	var search_breed = document.getElementById('breed_badge').innerHTML.slice(1,-1);
	var search_state = document.getElementById('state_badge').innerHTML.slice(1,-1);
	console.log(search_state);

	if (search_state != ''){ //Got search states 
		client.animal.search({
			type: 'dog',
			breed: search_breed,
			age: search_age,
			gender: search_gender,
			location: search_state
			})
		.then(resp => {
			// Do something with resp.data.breeds
			var results_array = resp.data.animals;
			console.log(results_array);
			display_cards(results_array);	
			// If no results
			if(results_array.length == 0){
				document.getElementById('dog-card-deck').innerHTML = '<div class="rol"><p class="justify-content-center text-center">No results</p></div>';
			}
		});
	}
	else{
		client.animal.search({ //No search states 
			type: 'dog',
			breed: search_breed,
			age: search_age,
			gender: search_gender
			})
		.then(resp => {
			// Do something with resp.data.breeds
			var results_array = resp.data.animals;
			console.log(results_array);
			display_cards(results_array);	
			// If no results
			if(results_array.length == 0){
				document.getElementById('dog-card-deck').innerHTML = '<p>No results</p>';
			}
		});
	}
	
}

// end search and API 

// Function4: Searching by ID 
function search_by_id(id){
	var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

	var client  = new petfinder.Client({apiKey: id, secret: secret});

	client.animal.show(49505058)
	.then(resp => {
		// Do something with resp.data.breeds
		var results_array = resp.data.animal;
		console.log(results_array);
	});
}

// Showing the applied filters on the search page 
function onclick_age(age){
	var search_age = age;
	document.getElementById('age').innerHTML = ' ' + `<badge id="age_badge" class="badge badge-dark">` + ' ' + age + ' ' + `</badge>`;
	// var text = document.getElementById('filters_applied').innerHTML;
	// var text = text.replace('young', '');
	// var text = text.replace('old', '');
	// document.getElementById('filters_applied').innerHTML = text + "  " + `<button class="badge badge-dark">` + age + `</button>`;
}

function onclick_gender(gender){
	var search_gender = gender;
	document.getElementById('gender').innerHTML = ' ' + `<badge id="gender_badge" class="badge badge-dark">` + ' ' + gender + ' ' + `</badge>`;

	// var text = document.getElementById('filters_applied').innerHTML;
	// var text = text.replace('female', '');
	// var text = text.replace('male', '');
	// document.getElementById('filters_applied').innerHTML = text + "  " +  `<button class="badge badge-dark">` + gender + `</button>`;
}

function onclick_breed(breed){
	var search_breed = breed;
	document.getElementById('breed').innerHTML = ' ' + `<badge id="breed_badge" class="badge badge-dark">` + ' ' + breed + ' ' + `</badge>`;

	// var text = document.getElementById('filters_applied').innerHTML;
	// var text = text.replace('golden retriever', '');
	// var text = text.replace('corgi', '');
	// var text = text.replace('pug', '');
	// var text = text.replace('shiba', '');
	// var text = text.replace('beagle', '');
	// document.getElementById('filters_applied').innerHTML = text + "  " + `<button class="badge badge-dark">` + breed + `</button>`;
}
function onclick_state(state){
	var search_state = state;
	document.getElementById('state').innerHTML = ' ' + `<badge id="state_badge" class="badge badge-dark">` + ' ' + state + ' ' + `</badge>`;
}
// end Showing the filters on the search page 

// Fuctions for the filter search
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
	}
}

function myFunction2() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL2");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function myFunction3() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput3");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL3");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function myFunction4() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput4");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL4");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
// End Fuctions for the filter search 




AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });

jQuery(document).ready(function($) {

	"use strict";

	
	$(".loader").delay(1000).fadeOut("slow");
  $("#overlayer").delay(1000).fadeOut("slow");	
  

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();


	var sitePlusMinus = function() {
		$('.js-btn-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-btn-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
	};
	// sitePlusMinus();


	var siteSliderRange = function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	};
	// siteSliderRange();


	
	var siteCarousel = function () {
		if ( $('.nonloop-block-13').length > 0 ) {
			$('.nonloop-block-13').owlCarousel({
		    center: false,
		    items: 1,
		    loop: true,
				stagePadding: 0,
		    margin: 0,
		    smartSpeed: 1000,
		    autoplay: true,
		    nav: true,
				navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">'],
		    responsive:{
	        600:{
	        	margin: 0,
	        	nav: true,
	          items: 2
	        },
	        1000:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 2
	        },
	        1200:{
	        	margin: 0,
	        	stagePadding: 0,
	        	nav: true,
	          items: 3
	        }
		    }
			});
		}

		$('.slide-one-item').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    autoplay: true,
	    pauseOnHover: false,
	    nav: true,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
	  });

	  // $('.slide-one-item-alt').owlCarousel({
	  //   center: false,
	  //   items: 1,
	  //   loop: true,
			// stagePadding: 0,
			// smartSpeed: 700,
	  //   margin: 0,
	  //   autoplay: true,
	  //   pauseOnHover: false,

	  // });

	  // $('.slide-one-item-alt-text').owlCarousel({
	  //   center: false,
	  //   items: 1,
	  //   loop: true,
			// stagePadding: 0,
			// smartSpeed: 700,
	  //   margin: 0,
	  //   autoplay: true,
	  //   pauseOnHover: false,
	  // });

	  $('.slide-one-item-alt').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt-text').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt-text').trigger('prev.owl.carousel');
	    	}
	    }
	  });
	  $('.slide-one-item-alt-text').owlCarousel({
	    center: false,
	    items: 1,
	    loop: true,
			stagePadding: 0,
	    margin: 0,
	    smartSpeed: 1000,
	    autoplay: true,
	    pauseOnHover: true,
	    onDragged: function(event) {
	    	console.log('event : ',event.relatedTarget['_drag']['direction'])
	    	if ( event.relatedTarget['_drag']['direction'] == 'left') {
	    		$('.slide-one-item-alt').trigger('next.owl.carousel');
	    	} else {
	    		$('.slide-one-item-alt').trigger('prev.owl.carousel');
	    	}
	    }
	  });
	  

	  $('.custom-next').click(function(e) {
	  	e.preventDefault();
	  	$('.slide-one-item-alt').trigger('next.owl.carousel');
	  	$('.slide-one-item-alt-text').trigger('next.owl.carousel');
	  });
	  $('.custom-prev').click(function(e) {
	  	e.preventDefault();
	  	$('.slide-one-item-alt').trigger('prev.owl.carousel');
	  	$('.slide-one-item-alt-text').trigger('prev.owl.carousel');
	  });
	  
	};
	siteCarousel();

	var siteStellar = function() {
		$(window).stellar({
	    responsive: false,
	    parallaxBackgrounds: true,
	    parallaxElements: true,
	    horizontalScrolling: false,
	    hideDistantElements: false,
	    scrollProperty: 'scroll'
	  });
	};
	// siteStellar();

	var siteCountDown = function() {

		$('#date-countdown').countdown('2020/10/10', function(event) {
		  var $this = $(this).html(event.strftime(''
		    + '<span class="countdown-block"><span class="label">%w</span> weeks </span>'
		    + '<span class="countdown-block"><span class="label">%d</span> days </span>'
		    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
		    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
		    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
		});
				
	};
	siteCountDown();

	var siteDatePicker = function() {

		if ( $('.datepicker').length > 0 ) {
			$('.datepicker').datepicker();
		}

	};
	siteDatePicker();

	var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	// navigation
  var OnePageNavigation = function() {
    var navToggler = $('.site-menu-toggle');
   	$("body").on("click", ".main-menu li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a", function(e) {
      e.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        'scrollTop': $(hash).offset().top
      }, 600, 'easeInOutExpo', function(){
        window.location.hash = hash;
      });

    });
  };
  OnePageNavigation();

  var siteScroll = function() {

  	

  	$(window).scroll(function() {

  		var st = $(this).scrollTop();

  		if (st > 100) {
  			$('.js-sticky-header').addClass('shrink');
  		} else {
  			$('.js-sticky-header').removeClass('shrink');
  		}

  	}) 

  };
  siteScroll();


  var siteIstotope = function() {
  	/* activate jquery isotope */
	  var $container = $('#posts').isotope({
	    itemSelector : '.item',
	    isFitWidth: true
	  });

	  $(window).resize(function(){
	    $container.isotope({
	      columnWidth: '.col-sm-3'
	    });
	  });
	  
	  $container.isotope({ filter: '*' });

	    // filter items on button click
	  $('#filters').on( 'click', 'button', function() {
	    var filterValue = $(this).attr('data-filter');
	    $container.isotope({ filter: filterValue });
	    $('#filters button').removeClass('active');
	    $(this).addClass('active');
	  });
  }

  siteIstotope();


  $('.fancybox').on('click', function() {
	  var visibleLinks = $('.fancybox');

	  $.fancybox.open( visibleLinks, {}, visibleLinks.index( this ) );

	  return false;
	});

});