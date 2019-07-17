function checkInput() {

    var currentFloor = document.getElementById("inputCurrentFloor").value;
    var requestedFloor = document.getElementById("inputRequestedFloor").value;


    console.log('Current Floor: ' + currentFloor);
    console.log('Requested Floor: ' + requestedFloor);
    console.log('');

    if ((currentFloor < 4) && (currentFloor > 0) && (requestedFloor < 4) && (requestedFloor > 0)) {
        document.getElementById("submit").disabled = false;
        console.log("False");
    } else {
        document.getElementById("submit").disabled = true;
        console.log("True");

    }



}


document.getElementById("inputRequestedFloor").addEventListener('blur', checkInput);
document.getElementById("inputCurrentFloor").addEventListener('blur', checkInput);