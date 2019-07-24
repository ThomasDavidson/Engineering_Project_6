function checkInput() {

    var requestedFloor = document.getElementById("inputRequestedFloor").value;


    console.log('Requested Floor: ' + requestedFloor);
    console.log('');


    if ((requestedFloor < 4) && (requestedFloor > 0)) {
        document.getElementById("submit").disabled = false;
        console.log("False");
    } else {
        document.getElementById("submit").disabled = true;
        console.log("True");

    }



}


document.getElementById("inputRequestedFloor").addEventListener('blur', checkInput);