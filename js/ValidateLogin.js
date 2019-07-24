var elUsername = document.getElementById('username');
var elPassword = document.getElementById('psw');
var elMsgu = document.getElementById('feedbacku');
var elMsgp = document.getElementById('feedbackp');


function checkUsername(){
    if(elUsername.value.length < 5){
		lengthUSER.classList.add("invalidCHECK");
		lengthUSER.classList.remove("validCHECK");
        elMsgu.innerHTML = '<p>Username must be at least 5 characters</p>';
    }else{
		lengthUSER.classList.remove("invalidCHECK");
		lengthUSER.classList.add("validCHECK");
        elMsgu.innerHTML = '';//clear error message
    }
}

function checkPassword(){
	
	if (elPassword.value.length >= 8) {
		lengthPSWD.classList.remove("invalidCHECK");
		lengthPSWD.classList.add("validCHECK");
		
	} else { 
		lengthPSWD.classList.remove("validCHECK");
		lengthPSWD.classList.add("invalidCHECK");
	}
	
	// check for lower case letters
	var lowerCaseLetters = /[a-z]/g;
	if(elPassword.value.match(lowerCaseLetters)) {
		letterPSWD.classList.remove("invalidCHECK");
		letterPSWD.classList.add("validCHECK");
  } else {
    letterPSWD.classList.remove("validCHECK");
	letterPSWD.classList.add("invalidCHECK");
	}

	// Check for upper case letter  
	var upperCaseLetters = /[A-Z]/g;
	  if(elPassword.value.match(upperCaseLetters)) {
		capitalPSWD.classList.remove("invalidCHECK");
		capitalPSWD.classList.add("validCHECK");
	  } else {
		capitalPSWD.classList.remove("validCHECK");
		capitalPSWD.classList.add("invalidCHECK");
	  }
  
	// Check for numbers
	var numbers = /[0-9]/g;
	 if(elPassword.value.match(numbers)) {
		numberPSWD.classList.remove("invalidCHECK");
		numberPSWD.classList.add("validCHECK");
	  } else {
		numberPSWD.classList.remove("validCHECK");
		numberPSWD.classList.add("invalidCHECK");
	  }
}

function setup(){
    elUsername.focus();
}

function submitButtonCheck() { 
	if(elUsername.value.length < 5 && elPassword.value.length < 8) {
		elMsgp.innerHTML = '<p>Login Failed: Enter Username & Password</p>';
		return false;
	}  
}

elUsername.addEventListener('blur', checkUsername, false);
elPassword.addEventListener('blur', checkPassword, false);
window.addEventListener('load', setup, false)