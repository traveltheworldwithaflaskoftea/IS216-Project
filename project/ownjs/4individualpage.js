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
    });
    console.log('done running');
}
function load_individual_dog(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const pet_id = urlParams.get('id')
    console.log(pet_id); 
    search_dog_id(pet_id);

}
