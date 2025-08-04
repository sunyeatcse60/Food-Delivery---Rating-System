<?php
 
include 'connect.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $rating = $_POST['rating'];


  $query = "INSERT INTO feedback(name, email, message, rating) 
            VALUES ('$name', '$email', '$message', '$rating')";

  $run = mysqli_query($con, $query);


  if ($run) {
    echo "Feedback submitted successfully.";
  } else {
    echo "Failed to submit feedback.";
  }

?>