<?php

session_start();
include 'connect.php';


$email = $_POST['email'];
$password = $_POST['password'];


$query = "SELECT * FROM signuptable WHERE email = '$email' OR username = '$email'";
$run = mysqli_query($con, $query);

//user found
if (mysqli_num_rows($run) == 1) {
    $row = mysqli_fetch_assoc($run);
    $hashedPassword = $row['password'];

    //Verify password
    if (password_verify($password, $hashedPassword)) {

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

    header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Invalid password.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('User not found.'); window.history.back();</script>";
}
?>