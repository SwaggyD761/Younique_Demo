<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>terra_crypto</title>
    <link rel="stylesheet" href="css/bookingsStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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
    		<h1>Appointment Booking</h1>
	    	<form>
				    <label for="date">Date:</label>
    				<input type="date" id="date" name="date"><br>

				    <label for="time">Time:</label>
				    <input type="time" id="time" name="time"><br>

				    <label for="name">Name:</label>
  				  <input type="text" id="name" name="name"><br>

	  	      <label for="surname">Surname:</label>
  	  	  	<input type="text" id="surname" name="surname"><br>

 				    <label for="email">Email:</label>
			      <input type="email" id="email" name="email"><br>

 		   		  <label for="phone">Phone:</label>
 		 	  	  <input type="tel" id="phone" name="phone"><br>

	 		      <input type="submit" value="Submit">
		    </form>

			</div>
        
			<div class="blank-area">
		  <d/iv>

		</div>
		
	</div>
	
</body>
        
	<?php
		include("Navbar&Footer/_includeFooter.php")
	?>

</html>
