<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

if (!empty($_POST['cartData'])) {
    $cartData = json_decode($_POST['cartData'], true);
    $foodNames = [];
    if (is_array($cartData)) {
        foreach ($cartData as $item) {
            if (isset($item['name'])) {
                $foodNames[] = $item['name'];
            }
        }
    }
    $orderData = implode(", ", $foodNames);
    $timestamp = date('Y-m-d H:i:s');

    $sql = "INSERT INTO orders (food_name, timestamp) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $orderData, $timestamp);

    if ($stmt->execute()) {
        echo 'Order placed successfully!';
    } else {
        echo 'Error saving order: ' . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    echo 'No cart data received.';
}
?>