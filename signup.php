<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];


if ($password !== $confirmPassword) {
    echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
    exit();
}


$checkUser = "SELECT * FROM signuptable WHERE email = '$email' OR username = '$username'";
$result = mysqli_query($con, $checkUser);


if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email or Username already registered. Please login.'); window.history.back();</script>";
    exit();
}


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


$query = "INSERT INTO signuptable (username, email, phone, password)
          VALUES ('$username', '$email', '$phone', '$hashedPassword')";

$run = mysqli_query($con, $query);

if ($run) {
    header("Location: login.html");
} else {
    echo "<script>alert('Signup failed. Try again.'); window.history.back();</script>";
}
?>