accountsArr= [ 
  {
    username: "Catty123",
    password: "cats123", 
    email: "catty123@gmail.com"
  }, 
  {
    username: "Dog123", 
    password:"dogs123",
    email:"dog123@gmail.com"
  }
]; 

// Get the input field
var input = document.getElementById("username");


function ifValid(){
    var username = document.getElementById('username').value; 
    //console.log(username); 
    var password = document.getElementById('password').value; 
    //console.log(password); 
    for (account of accountsArr){
        if (account.username == username && account.password == password){
           window.location.href = "../html/3mainpage.html";
           break; 
        }else{
            document.getElementById('error').innerText = 'Invalid Username/Password!';
            }
        }
    }

function rememberMe(){
  var username = document.getElementById('username').value; 
  document.getElementById('username').value = username;
  var password = document.getElementById('password').value;
  document.getElementById('password').value = password; 
}