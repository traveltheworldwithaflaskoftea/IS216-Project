function load_individual_dog(){
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id')
    console.log(id); 
    search_dog_id(id);

}

function search_dog_id(id){
	var id = '7xl0fwJI98JMdZBn8vxztbMrxm7sIgf31I7wRBchOGkAOWeGnO';
	var secret = 'pSAX1F4ihX08DiHz6uH9AGOWvzVRTZTgAQfbta0E';

	var client  = new petfinder.Client({apiKey: id, secret: secret});

	client.animal.search({
		type: 'dog',
		id = id
		})
	.then(resp => {
		// Do something with resp.data.breeds
		var results_array = resp.data.animals;
		console.log(results_array);
		//
	});
}