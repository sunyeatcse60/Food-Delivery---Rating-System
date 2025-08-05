<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];


if ($password !== $confirmPassword) {
    echo "Passwords do not match.";
    exit();
}

// email or username already exists
$checkUser = "SELECT * FROM signuptable WHERE email = '$email' OR username = '$username'";
$result = mysqli_query($con, $checkUser);

if (mysqli_num_rows($result) > 0) {
    echo "Email or Username already registered. Please login.";
    exit();
}


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$query = "INSERT INTO signuptable (username, email, phone, password)
          VALUES ('$username', '$email', '$phone', '$hashedPassword')";

$run = mysqli_query($con, $query);

if ($run) {
    header("Location: login.html");
} else {
    echo "Signup failed. Try again.";
}
?>
