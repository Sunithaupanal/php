<?php
// Start session to store data across page loads
session_start();

// Initialize product array and total
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['productName']);
    $price = floatval($_POST['productPrice']);

    if ($name !== "" && $price > 0) {
        $_SESSION['products'][] = [
            "name" => $name,
            "price" => $price
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task Four</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
    }
    h2 {
      font-size: 28px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-top: 15px;
    }
    input {
      width: 300px;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: #007bff;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    h3 {
      margin-top: 30px;
    }
    ul {
      list-style: none;
      padding-left: 0;
    }
    ul li {
      margin-bottom: 5px;
    }
  </style>
</head>
<body>
  <h2>Task Four</h2>
  <p>
    Storing the input data with Product Name and Product Price as an object into array,
    displaying that list data, calculating total Product Price using PHP.
  </p>

  <form method="POST" action="">
    <label for="productName">Product Name *</label>
    <input type="text" name="productName" id="productName" required>

    <label for="productPrice">Product Price *</label>
    <input type="number" name="productPrice" id="productPrice" required>

    <button type="submit">Submit</button>
  </form>

  <h3>Output Result:</h3>
  <ul>
    <?php
    $total = 0;
    foreach ($_SESSION['products'] as $product) {
        echo "<li>{$product['name']} - ₹" . number_format($product['price'], 2) . "</li>";
        $total += $product['price'];
    }
    ?>
  </ul>
  <p><strong>Sale Price</strong></p>
  <p><strong>Total Price:</strong> ₹<?php echo number_format($total, 2); ?></p>
</body>
</html>