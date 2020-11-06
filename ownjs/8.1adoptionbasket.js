function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
// Lets retrieve some data from our SQL database
console.log('8Js is loaded');

function run_sql(){
    // Requiring modules 
    console.log('I am here in run_sql');
    axios.post('../database/getadoptionbasket.php')
    .then(response => {
        console.log(response.data);
        console.log(typeof(response.data));
        response_str = response.data.replace(/\s/g, '');
        console.log(response_str);
        var response_array = response_str.split(",");
        console.log("array_response: ", response_array);
        return response_array        
        })
    .catch(error => {
        console.log(error.message)
        })
    
}
//SQL ends here
async function adoptionBasket(){
    console.log('we are inside adoptionbasket');
    compiled_array = [];
    // pet_list = await run_sql();
    pet_list= ["49662769", "49662820", "49662799","49711076"];
    console.log('PetList: ', pet_list);
    compiled_array =[];
    for (pet of pet_list){
        console.log("we are in round ", pet);
        var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
        var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

        var client  = new petfinder.Client({apiKey: id, secret: secret});
        console.log('PetFinder works'); 

        client.animal.show(pet)
        .then(resp => {
            // Do something with resp.data.breeds
            var results_array = resp.data.animal;
            // compiled_array.push(result_array);
            console.log(results_array);
            compiled_array.push(results_array)
            // display_adoption_basket_cards(results_array);
        });
    };
    
    setTimeout(function afterTwoSeconds() {
        console.log(compiled_array);
      }, 5000);

    function meh(){
        console.log('meh')
    };

    setTimeout(meh(), 1000);

    setTimeout(function display_adoption_basket_cards(result_array){
        console.log('I am in display_adoption_basket_cards');
        var html = ''; // This will be used to replace dog-card-deck innerHTML later
            for (result of result_array){
                    console.log(result);
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
            console.log(html);
            document.getElementById('dog-card-deck').innerHTML = html;}, 5000, compiled_array);
    
}


function display_adoption_basket_cards(result_array){
    console.log('I am in display_adoption_basket_cards');
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