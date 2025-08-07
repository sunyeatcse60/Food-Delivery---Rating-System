<?php
include 'connect.php';
if (!empty($_POST['cartData'])) {
    $orderData = $_POST['cartData']; // JSON string from frontend
    $timestamp = date('Y-m-d H:i:s');
    $stmt = $conn->prepare("INSERT INTO orders (order_data, timestamp) VALUES (?, ?)");
    $stmt->bind_param("ss", $orderData, $timestamp);
    if ($stmt->execute()) {
        echo 'Order placed successfully!';
    } else {
        echo 'Error saving order.';
    }
    $stmt->close();
    $conn->close();
} else {
    echo 'No cart data received.';
}
?>