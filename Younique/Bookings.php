<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>terra_crypto</title>
    <link rel="stylesheet" href="css/bookingsStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="contianer">
	  <div class=nav-bar>
	    <?php
	      include("Navbar&Footer/_includeNavbar.php")
	    ?>
	  </div>
	
    	  <div class="content">
	    <div class="appointments">
	      <?php
	        include("Carousel/_includeCarousel.php")
	      ?>
	    </div>
    
	    <div class="new-bookings">
	      <div class="create-booking">
    	        <h1 class="bookings-form-header">Appointment Booking</h1>
	        <form class="bookings-form" action="php/bookAppointment.php">
	          <label class="bookings-form-label" for="date">Date:</label>
    	          <input class="bookings-form-input" type="date" id="date" name="date"><br>

	          <label class="bookings-form-label" for="time">Time:</label>
	          <input class="bookings-form-input" type="time" id="time" name="time"><br>

	          <label class="bookings-form-label" for="name">Name:</label>
  	          <input class="bookings-form-input" type="text" id="name" name="name"><br>

	          <label class="bookings-form-label" for="surname">Surname:</label>
  	          <input class="bookings-form-input" type="text" id="surname" name="surname"><br>

 	          <label class="bookings-form-label" for="email">Email:</label>
	          <input class="bookings-form-input" type="email" id="email" name="email"><br>

 	          <label class="bookings-form-label" for="phone">Phone:</label>
 	          <input class="bookings-form-input" type="tel" id="phone" name="phone"><br>

	          <input class="bookings-form-button" type="submit" value="Submit">
	        </form>

	      </div>
        
	      <div class="blank-area">
	      </div>

	    </div>
	  </div>
	</div>
	
</body>
        
	<?php
		include("Navbar&Footer/_includeFooter.php")
	?>

</html>
