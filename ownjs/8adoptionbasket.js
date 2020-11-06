let pet_list = [];

function addPets(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const pet_id = urlParams.get('id')
    check=pet_list.includes(pet_list)
    if (check==false){
        pet_list.push(pet_id);
    }
    console.log(pet_list);
}



function adoptionBasket(){
    console.log("hi");
    console.log(pet_list);
    for (pet in pet_list){
        var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
        var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

        var client  = new petfinder.Client({apiKey: id, secret: secret});

        console.log(typeof(pet));

        client.animal.show(pet)
        .then(resp => {
            // Do something with resp.data.breeds
            var results_array = resp.data.animal;
            console.log(results_array);
            display_adoption_basket_cards(result_array);
        });
    }
}

function display_adoption_basket_cards(result_array){
    var html = ''; // This will be used to replace dog-card-deck innerHTML later
		for (result of result_array){
			if(result.photos.length > 0){ //making sure the array has pictures
				html += `<div class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
							<div class="trainer">
							<figure>
							<a href='4individualpage.html?id=${result.id}'><img src="${result.photos[0]['full']}" alt="Image" class="img-fluid"></a>
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
		document.getElementById('wishlist').innerHTML = html;
}