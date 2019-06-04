<!DOCTYPE HTML>
<html>

	<!-- Link Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!-- Link Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- Link JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- Load the Navigation Bar wit hPHP include function --> 
    <?php 
					include('menu.php');
					?>

<head>
  <title>Eng Project 6 - Robert's Logbook</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="pragma" content="no-cache" /> <!-- want browser to reload this page every time -->
  <meta name="robots" content="noindex nofollow" />  <!-- do not want page or any of its links to be indexed -->
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">Engineering Project 6</span></a></h1>
          <h2>Thomas, Damien, Robert & Steve</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
		  
		 <!-- Drop down menu for Logbooks -->
			  <div class="dropdown">
				   <button class="dropbtn">Logbooks</button>
				  <div class="dropdown-content">
					<a href="./ThomasLogBook.html">Thomas</a>
					<a href="./DamianLogBook.html">Damien</a>
					<a href="./Stephen - Logbook.html">Steve</a>
					<a href="./RobertLogBook.html">Robert</a>
				  </div>
				</div> 
		  <!-- Drop down menu for Logbooks -->
		  
          <li><a href="contact.html">Contact Us</a></li>
		  <li><a href="./Registration.html">Sign Up</a></li>
      <li><a href="./loginRequest.html">Login</a></li>
      <li><a href="./about.html">About</a></li>
        </ul>
      </div>
    </div>
	
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
		
        <h4>End of Week 1</h4>
        <h5>July 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
		
		<h4>End of Week 2</h4>
        <h5>July 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
		
		<h4>End of Week 3</h4>
        <h5>July 1st, 2014</h5>
        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
		
		
        <h3>Useful Links</h3>
        <ul>
          <li><a href="#">Our Youtube Channel</a></li>
          <li><a href="#">Our Github Repository</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1> <strong> Log Book Entries</strong> </h1>
        <hr />
        <h2>Week Two - 5-13-2019 </h2>

        <ul>
            <li>Git repository with Team</li>
            <li>Establish remote connection with the Raspberry Pi</li>
            <li>Plan establishment of group Git repository</li> 
        </ul>

        <h2>Week Three - 5-20-2019 </h2>

        <ul>
            <li>Worked on Can bus</li>
            <li>Cleaned up .css stuff</li>
            <li>created test plan</li> 
        </ul>

        <h3>Week Four 6-03-2019</h3>
        <ul>
          <li>Cleaned up file strucutres</li>
          <li>Automated raspberry pi repository</li>
       </ul>
		
    </div>
	</div>
    <div id="footer">
      Copyright &copy; Eng Project
    </div>
  </div>
</body>
</html>
