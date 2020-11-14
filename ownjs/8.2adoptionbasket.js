var app = new Vue({
    el: '#dog_card_deck',
    data: {
        checkeddogs: [],
        testing: 'THIS IS A TEST',
        isHidden: true
    },
    methods: {
        foo_reload: function() {
            console.log('[Before] Reload');
            this.$forceUpdate();
            console.log('[After] Reload');
        }
        // activate() {
        // setTimeout(() => this.isHidden = false, 500);
        // }
    }
})

new Vue({
    el: '#foo',
    data: {
        something: "Hello Something"
    }
})

// 1. Sleep function
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
// Lets retrieve some data from our SQL database
console.log('8Js is loaded');

// 2. Making call to SQL DB
function run_sql(){
    console.log('I am here in run_sql');
    axios.post('../database/getadoptionbasket.php')
    .then(response => {  
        console.log(response.data);
        console.log(typeof(response.data));
        response_str = response.data.replace(/\s/g, '');
        console.log(response_str);
        var response_array = response_str.split(",");
        console.log("array_response: ", response_array);
        console.log('Finished running run_sql()')
        adoptionBasket(response_array);
        return response_array        
        })
    .catch(error => {
        console.log(error.message)
        })
}
//SQL ends here

// 3. Making API Call
async function adoptionBasket(pet_list){
    console.log('we are inside adoptionbasket');
    // pet_list = await run_sql();
    // pet_list= ["49662769", "49662820", "49662799","49711076"];
    console.log('PetList: ', pet_list);
    compiled_array =[];
    for (pet of pet_list){
        console.log("we are in round ", pet);
        //Wes API KEY
        // var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
        // var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';
        //Wes 2nd API KEY
        var id = 'KCXb8y2r6wilER4RBfAdnYwWm6bhUFXGI09J4N6X8qRk2aaAz0';
        var secret = 'qagSVQBSizMwEx8acEJ4ojmx9XWgTmKSCb1vvkxp';
        //Sheri API KEY
        // var id = 'tdIL28vzdTlXMQqyJY28FYHp8GSrkhr1taoUTiTmQaIrOxFs0g';
        // var secret = 'ZGs2r5AvICHaynezcEv7M1LfNC35Vmuq8SDX9sj6';

        var client  = new petfinder.Client({apiKey: id, secret: secret});
        console.log('PetFinder works'); 

        client.animal.show(pet)
        .then(resp => {
            // Do something with resp.data.breeds
            var results_array = resp.data.animal;
            console.log(results_array);
            console.log('Pushing into results array');
            compiled_array.push(results_array)
            // display_adoption_basket_cards(results_array);
        });
    };
    
    // Once SQL runs and API runs, display function will run after a small delay
    setTimeout(function display_adoption_basket_cards(result_array){
        console.log('Running time delay function')
        console.log(result_array);
        console.log('I am in display_adoption_basket_cards HEHEHE');
        var html = ''; // This will be used to replace dog-card-deck innerHTML later
            for (result of result_array){                    
                    html += 
                             // <div class="col-sm-3 my-3">
                            `
                            <div class="card-group" style="display: flex;">
                            <div class="justify-content-center" style="margin-left: 30px; display: flex; flex-wrap: wrap; align-content: center;">
                            <div class="col-md-6 col-xl-4 my-3 justify-content-sm-center">    
                                <div class="card" style="width: 18rem; margin: auto;">
                                    <a href='4individualpage.php?id=${result.id}'><img src="${result.photos[0]['full']}" alt="Image" class="img-fluid"></a>
                                    <div class="card-body">
                                    <h5 class="card-title">Name: ${result.name}</h5>
                                    <p class="card-text">${result.description}.</p>
                                    <input type="checkbox" id="${result.id}" value="${result.id}" v-model="checkeddogs">
                                    <label for="${result.id}">I choose you!!</label>
                                    <form action='../database/delete_from_cart.php' method='POST'>
                                        <input type='hidden' id='${result.id}' name='dog_id' value='${result.id}'>
                                        <input class='btn btn-primary' type='submit' value="🗑" style="max-width: 100%;"> 
                                    </form><br>
                                    <button class='btn btn-secondary' onclick="make_appointment(${result.id},'${result.name}','${result.photos[0]['full']}','${result.contact['address']['postcode']}')">Make Appointment</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                            `;

            }//end-for
            // end for loop, now lets put html inside the dog-card-deck
            document.getElementById('dog_card_deck').innerHTML = html;
            console.log("========== foo ===========");
            console.log(document.getElementById('dog_card_deck').innerHTML);

            new Vue({
                el: '#dog_card_deck',
                data: {
                    testing: 'TESTING PLEASE',
                    checkeddogs: []
                },
                methods: {
                    submit_selections: function() {

                    }
                }
            })

        }, 8000, compiled_array);

            
            
}

// 5. Function to make appointment
function make_appointment(dog_id,dog_name,dog_image,dog_address){
    window.location = '5adoptionmessage.php?id=' + dog_id + '&name=' + dog_name + '&image=' + dog_image + '&address=' + dog_address;
}