<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'database_name';
$connection = mysqli_connect($host, $user, $password, $database);

// Check if the connection is successful
if (mysqli_connect_errno()) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Process the form data when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $date = $_POST['date'];
  $time = $_POST['time'];
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  // Insert the form data into the appointments table
  $query = "INSERT INTO appointments (date, time, name, surname, email, phone) VALUES ('$date', '$time', '$name', '$surname', '$email', '$phone')";
  $result = mysqli_query($connection, $query);

  // Check if the query is successful
  if (!$result) {
    die('Error: ' . mysqli_error($connection));
  }

  // Send a confirmation email to the user
  $to = $email;
  $subject = 'Appointment Booking Confirmation';
  $message = 'Dear ' . $name . ', thank you for booking an appointment on ' . $date . ' at ' . $time . '. We look forward to seeing you soon!';
  $headers = 'From: your_email@example.com';
  $sent = mail($to, $subject, $message, $headers);

  // Check if the email is sent successfully
  if ($sent) {
    echo 'Your appointment has been booked and a confirmation email has been sent to ' . $email . '.';
  } else {
    echo 'Your appointment has been booked, but the confirmation email could not be sent.';
  }
}

// Close the database connection
mysqli_close($connection);
?>
