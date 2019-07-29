var username = document.getElementById("username");
var usernameFeedback = document.getElementById("usernameFeedback");

var firstname = document.getElementById("fname");
var firstnameFeedback = document.getElementById("fnameFeedback");

var lastname = document.getElementById("lname");
var lastnameFeedback = document.getElementById("lnameFeedback");

var password = document.getElementById("password");

// Check First Name
firstname.addEventListener("input", function (event) {
  if (firstname.value.length < 2) {
    firstnameFeedback.innerHTML = '<-- Please Enter a Legit First Name'; 
	event.preventDefault();
  } else {
    firstnameFeedback.innerHTML = "";
  }
});

// Check Last Name
lastname.addEventListener("input", function (event) {
  if (lastname.value.length < 2) {
    lastnameFeedback.innerHTML = '<-- Please Enter a Legit First Name'; 
	event.preventDefault();
  } else {
    lastnameFeedback.innerHTML = "";
  }
});

// Check Username
username.addEventListener("input", function (event) {
  if (username.value.length < 5) {
    usernameFeedback.innerHTML = '<-- Username has to be longer than 5 characters'; 
	event.preventDefault();
  } else {
    usernameFeedback.innerHTML = "";
  }
});

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



