function search_dog_id(pet_id){
    console.log("pet id");
	var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

	var client  = new petfinder.Client({apiKey: id, secret: secret});

    console.log(typeof(pet_id));

	client.animal.show(pet_id)
	.then(resp => {
		// Do something with resp.data.breeds
		var results_array = resp.data.animal;
        console.log(results_array);
        display_individual_page(results_array);
    });
    console.log('done running');
}

function load_individual_dog(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const pet_id = urlParams.get('id')
    console.log(pet_id); 

    // Calling the API 
    search_dog_id(pet_id);
}

function display_individual_page(dog_array){
    //time to update some values!!    
    document.getElementById('dog_name').innerHTML = `<p>${dog_array.name}</p>`;

    var img_html = '';
    var is_active = 'active';
    for (photo of dog_array.photos){
        img_html += `<div class="carousel-item ${is_active}" >
                        <img class="d-block w-100" src="${photo.full}" alt="First slide">
                    </div>`;
                    is_active = '';
    }
    document.getElementById('dog_images').innerHTML = img_html;

    document.getElementById('dog_details').innerHTML = `<ul>
                                                            <li>        
                                                                Name: ${dog_array.name}
                                                            </li>
                                                            <li>
                                                                Age: ${dog_array.age}
                                                            </li>
                                                            <li>
                                                                Gender: ${dog_array.gender}
                                                            </li>
                                                            <li>
                                                                Breed: ${dog_array.breeds.primary}
                                                            </li>
                                                            <li>
                                                                Secondary breed: ${dog_array.breeds.secondary}
                                                            </li>
                                                            <li>
                                                                Coat: ${dog_array.coat}
                                                            </li>
                                                            <li>
                                                                Colors: ${dog_array.colors.primary}
                                                            </li>
                                                        </ul>
                                                        `;

    console.log(dog_array.description);
    if(dog_array.photos.length < 2){
        document.getElementById('caro_buttons_left').innerHTML = '';
        document.getElementById('caro_buttons_right').innerHTML = '';
    }

    document.getElementById('dog_description').innerHTML = `
                                                        <p>${dog_array.description}</p>
                                                    `;
    document.getElementById('dog_attributes').innerHTML = `<ul>
                                                        <li>        
                                                            Declawed: ${dog_array.attributes.declawed}
                                                        </li>
                                                        <li>
                                                            House Trained: ${dog_array.attributes.house_trained}
                                                        </li>
                                                        <li>
                                                            Medical Shots: ${dog_array.attributes.shots_current}
                                                        </li>
                                                        <li>
                                                            Spayed Neutered: ${dog_array.attributes.spayed_neutered}
                                                        </li>
                                                        <li>
                                                            Special Needs: ${dog_array.attributes.special_needs}
                                                        </li>
                                                    </ul>
                                                    `;
    document.getElementById('dog_contact_details').innerHTML = `<ul>
                                                    <li>        
                                                    Address: ${dog_array.contact.address.address1}
                                                    </li>
                                                    <li>
                                                    City: ${dog_array.contact.address.city}
                                                    </li>
                                                    <li>
                                                    Country: ${dog_array.contact.address.country}
                                                    </li>
                                                    <li>
                                                    Postal Code: ${dog_array.contact.address.postcode}
                                                    </li>
                                                    <li>
                                                    Email: ${dog_array.contact.email}
                                                    </li><li>
                                                    Mobile: ${dog_array.contact.phone}
                                                    </li>
                                                    
                                                </ul>
                                                `;                                                                                                   
}



