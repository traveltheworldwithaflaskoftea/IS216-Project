// Cart containing pets they wish to adopt 
cartIDArray = []; 
var us_states={"AL":"Alabama","AK":"Alaska","AS":"American Samoa","AZ":"Arizona","AR":"Arkansas","CA":"California","CO":"Colorado","CT":"Connecticut","DE":"Delaware","DC":"District Of Columbia","FM":"Federated States Of Micronesia","FL":"Florida","GA":"Georgia","GU":"Guam","HI":"Hawaii","ID":"Idaho","IL":"Illinois","IN":"Indiana","IA":"Iowa","KS":"Kansas","KY":"Kentucky","LA":"Louisiana","ME":"Maine","MH":"Marshall Islands","MD":"Maryland","MA":"Massachusetts","MI":"Michigan","MN":"Minnesota","MS":"Mississippi","MO":"Missouri","MT":"Montana","NE":"Nebraska","NV":"Nevada","NH":"New Hampshire","NJ":"New Jersey","NM":"New Mexico","NY":"New York","NC":"North Carolina","ND":"North Dakota","MP":"Northern Mariana Islands","OH":"Ohio","OK":"Oklahoma","OR":"Oregon","PW":"Palau","PA":"Pennsylvania","PR":"Puerto Rico","RI":"Rhode Island","SC":"South Carolina","SD":"South Dakota","TN":"Tennessee","TX":"Texas","UT":"Utah","VT":"Vermont","VI":"Virgin Islands","VA":"Virginia","WA":"Washington","WV":"West Virginia","WI":"Wisconsin","WY":"Wyoming"}

function list_states(){
    var list_html='';
    for (var[key,value] of Object.entries(us_states))
    {
        list_html+=`<li><a href="#myInput" onclick="onclick_state('${key}')">${value}</a></li>`;
    }
    document.getElementById("insert_list2").innerHTML=list_html;
}

function list_dog() {
    var dog_list_html=``;
    var request = new XMLHttpRequest(); // Prep to make an HTTP request
    request.onreadystatechange = function() {
        if( this.readyState == 4 && this.status == 200 ) {
            var dog_dataset= JSON.parse(this.responseText);
            for (dog of dog_dataset){
                dog_list_html+=`<li><a href="#myInput" onclick="onclick_breed('${dog.name}')">${dog.name}</a></li>`;
            }
            document.getElementById("insert_list1").innerHTML=dog_list_html;
        }
    }
    var url = '';
    url = "https://api.thedogapi.com/v1/breeds?"
    request.open("GET", url, true);
    request.send();
}