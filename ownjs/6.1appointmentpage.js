console.log('6appointmentpage.js is running');
// Code to make the maps start & end 
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

//  Code to make the maps start & end 

function maps_api_waypoints(start,end,waypoints_arary){
	console.log("map api  with waypoints is triggered")
	var maps_api_key = 'AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0';
	var starting = start;
    var ending = end;
    console.log("This is the waypoint array" + waypoints_arary);
    console.log(waypoints_arary);
	var waypoints = waypoints_arary.split("|");

	var url = "https://www.google.com/maps/embed/v1/directions?key=" + maps_api_key + "&origin=" + starting + "&destination=" + ending + "&waypoints=" + waypoints
	var html = `<iframe src="${url}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`

	//innerHTML html into whatever div we need 
	document.getElementById('map').innerHTML = html;

}
// sample of the HTML for embedding 
/* <iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCegO83Ox84AikzfCIn4XMtmBgLOKdIgS0&origin=75212&destination=91723&waypoints=94549&avoid=tolls|highways" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> */

//END OF MAPS