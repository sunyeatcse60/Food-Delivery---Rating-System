<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if (!empty($_POST['cartData'])) {

    $orderData = $_POST['cartData'];
    $timestamp = date('Y-m-d H:i:s');


    $sql = "INSERT INTO orders (order_data, timestamp) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $orderData, $timestamp);

    if ($stmt->execute()) {
        echo 'Order placed successfully!';
    } else {
        echo 'Error saving order: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo 'No cart data received.';
}
?>