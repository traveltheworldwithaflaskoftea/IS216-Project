function showModal(){
    // Show modal1
    document.getElementById('modal1').style.display='block';
}

function sent(){
    if (document.getElementById('email').value != ''){
         // Show modal2
        document.getElementById('modal2').style.display='block';
    }else{
        // not solved ! ! ! ! ! ! ! 
        // how to create the SHAKING input box
        var element = document.getElementById('email');
        var addError = function() { element.classList.add('error'); };
        var removeError = function() { element.classList.remove('error'); };
    }
   
    
}

function back(){
    window.location.href = "../html/1login.html";
}