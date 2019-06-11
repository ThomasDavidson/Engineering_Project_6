var today = new Date(); //new Date() object with current date and time
var year = today.getFullYear();
var birthdate = new Date('October 31, 1996 13:00:00'); // new Date() object with a value

var age = today.getTime() - birthdate.getTime(); // Age in milliseconds
age = Math.floor(age / 31556900000);

msg = '<p>My age is: ' + age + ' years old </p>';
var elemt = document.getElementById('info');
elemt.innerHTML = msg;