var password = document.getElementById("newPassword");

// Check Password
password.addEventListener("input", function (event) {
	
	if (password.value.length >= 8) {
    lengthPSWD.classList.remove("invalidCHECK");
    lengthPSWD.classList.add("validCHECK");
	} else { 
	lengthPSWD.classList.remove("validCHECK");
	lengthPSWD.classList.add("invalidCHECK");
	}
	
	// check for lower case letters
	var lowerCaseLetters = /[a-z]/g;
	if(password.value.match(lowerCaseLetters)) {
    letterPSWD.classList.remove("invalidCHECK");
    letterPSWD.classList.add("validCHECK");
  } else {
    letterPSWD.classList.remove("validCHECK");
	letterPSWD.classList.add("invalidCHECK");
	}

	// Check for upper case letter  
	var upperCaseLetters = /[A-Z]/g;
	  if(password.value.match(upperCaseLetters)) {
		capitalPSWD.classList.remove("invalidCHECK");
		capitalPSWD.classList.add("validCHECK");
	  } else {
		capitalPSWD.classList.remove("validCHECK");
		capitalPSWD.classList.add("invalidCHECK");
	  }
  
	// Check for numbers
	var numbers = /[0-9]/g;
	  if(password.value.match(numbers)) {
		numberPSWD.classList.remove("invalidCHECK");
		numberPSWD.classList.add("validCHECK");
	  } else {
		numberPSWD.classList.remove("validCHECK");
		numberPSWD.classList.add("invalidCHECK");
	  }
	
});



