// Lets retrieve some data from our SQL database
console.log('8Js is loaded');
function run_sql(){
    // Requiring modules 
    console.log('I am here');
    axios.post('../database/getadoptionbasket.php')
    .then(response => {
        console.log(response.data)
        })
    .catch(error => {
        console.log(error.message)
        })
}
//SQL ends here


let pet_list = [];


function adoptionBasket(){
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
                html += `<div id="Display_Adoption_Basket" class="col-md-6 mb-4 col-lg-4" data-aos="fade-up" data-aos-delay="">
                  <div class="trainer">
                    <figure>
                    <img src="${result.photos[0]['full']}" alt="Image" class="img-fluid">
                    </figure>
                    <div class="px-md-3">
                      <h3>${result.name}</h3>
                      <p>${result.description}</p>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="selected_pets[]" value="${result.id}">
                        <label class="form-check-label" for="exampleCheck1">Add to Cart</label>
                    </div>
                  </div>
              </div>`;
				}
		// end for loop, now lets put html inside the dog-card-deck
		document.getElementById('Display_Adoption_Basket').innerHTML = html;
}