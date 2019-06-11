var el,elForm;
var firstNameFeedback, lastNameFeedback, emailFeedback, birthdateFeedback;
var firstnameInput, lastnameInput, emailInput, birthdateInput;

elForm = document.getElementById('reqaccess');
firstNameFeedback = document.getElementById('firstnameFeedback');
lastNameFeedback = document.getElementById('lastnameFeedback');
emailFeedback = document.getElementById('emailFeedback');
websiteFeedback = document.getElementById('websiteFeedback');
birthdateFeedback = document.getElementById('birthdateFeedback');
firstNameInput = document.getElementById('fname');
lastNameInput = document.getElementById('lname');
emailInput = document.getElementById('email');
birthdateInput = document.getElementById('birthdate');



function charCount(e){
    var charDisplay, textEntered, counter, maxDisplay;
    textEntered = document.getElementById('message').value ; // text input by user
    charDisplay = document.getElementById('charactersleft'); // Get element that displays remaining chars
    maxDisplay = document.getElementById('maxchar');
    counter = (180 - (textEntered.length));  // remaining chars
    charDisplay.innerHTML = 'Characters remaining: ' + counter; // Show remaining chars
    if(counter <= 0){
        maxDisplay.innerHTML = 'You have exceeded the maximum number of characters allowed';
    }else{
        maxDisplay.innerHTML = '';
    }
}

function checkFirstName(event){
    if(firstnameInput.value.length < 1){
        firstNameFeedback.innerHTML = '<----You must enter your first name';
        event.preventDefault();
    }else{
        firstNameFeedback.innerHTML = '';
    }
}

function checkLastName(event){
    if(lastnameInput.value.length < 1){
        lastNameFeedback.innerHTML = '<----You must enter your last name';
        event.preventDefault();
    }else{
        lastNameFeedback.innerHTML = '';
    }
}

function checkEmail(event){
    if(emailInput.value.length < 1){
        emailFeedback.innerHTML = '<----You must enter your email';
        event.preventDefault();
    }else{
        emailFeedback.innerHTML = '';
    }
}

function checkBirthdate(event){
    if(birthdateInput.value.length < 1){
        birthdateFeedback.innerHTML = '<----You must enter your Birthdate';
        event.preventDefault();
    }else{
        birthdateFeedback.innerHTML = '';
    }
}

el = document.getElementById('message');
el.addEventListener('keypress', charCount, false);
elForm.addEventListener('submit',function(event){checkFirstName(event);checkLastName(event);checkEmail(event);checkBirthdate(event);}, false)