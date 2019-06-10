var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elMsgu = document.getElementById('feedbacku');
var elMsgp = document.getElementById('feedbackp');


function checkUsername(){
    if(elUsername.value.length < 7){
        elMsgu.innerHTML = '<p>Username must be at least 7 characters</p>';
    }else{
        elMsgu.innerHTML = '';//clear error message
    }
}

function checkPassword(){
    if(elPassword.value.length < 7){
             elMsgp.innerHTML = '<p>Password must be at least 7 characters</p>';
    }else{
        elMsgp.innerHTML = '';//clear error message
    }
}

function setup(){
    elUsername.focus();
}

elUsername.addEventListener('blur', checkUsername, false);
elPassword.addEventListener('blur', checkPassword, false);
window.addEventListener('load', setup, false)