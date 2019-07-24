var today = new Date(); //new Date() object with current date and time
var year = today.getFullYear();

var ft = document.getElementById('foot');
ft.innerHTML = '<p>Copyright &copy Steve ' + year + '</p>';