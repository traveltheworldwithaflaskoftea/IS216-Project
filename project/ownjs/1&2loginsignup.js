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


// Enter shortcut for Log-in
// Get the input field
var input = document.getElementById("username");

// // Execute a function when the user releases a key on the keyboard
// input.addEventListener("keyup", function(event) {
//   // Number 13 is the "Enter" key on the keyboard
//   if (event.keyCode === 13) {
//     // Cancel the default action, if needed
//     event.preventDefault();
//     // Trigger the button element with a click
//     document.getElementById("login").click();
//   }
// });


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

