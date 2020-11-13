// Code to make the maps start & end 
function maps_api(start,end){
    var ar = <?php echo json_encode($ar) ?>;
    
	console.log("map api triggered")
	var maps_api_key = 'AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0';
	var starting = start;
	var ending = end;
	var url = "https://www.google.com/maps/embed/v1/directions?key=" + maps_api_key + "&origin=" + starting + "&destination=" + ending 
	var html = `<iframe src="${url}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`

	//innerHTML html into whatever div we need 
	document.getElementById('map').innerHTML = html;

}

//  Code to make the maps start & end 

