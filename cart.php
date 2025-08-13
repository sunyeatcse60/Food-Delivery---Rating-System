<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Your Cart</title>
  <style>
    .cart-item {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>

<body>
  <h2>Your Cart</h2>
  <?php
  $res = $con->query("SELECT * FROM cart_items");
  while ($row = $res->fetch_assoc()) {
    echo "
        <div class='cart-item'>
          <div>
            <strong>{$row['name']}</strong><br>
            ৳{$row['price']}
          </div>
          <form method='POST' action='remove_from_cart.php'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <button type='submit'>Remove</button>
          </form>
        </div>
      ";
  }
  ?>

  <form method="POST" action="checkout.php">
    <button type="submit">Checkout</button>
  </form>
</body>

</html>