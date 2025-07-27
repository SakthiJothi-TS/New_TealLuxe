<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    // header("Location: buynow.php");
    exit;
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";
$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$product = null;
$success = false;

// When page loads
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $id AND status = 'active'";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);
}

// When form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $email = $_SESSION['email'];
    $quantity = $_POST['quantity'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $price = $_POST['price'];
    $total = $price * $quantity;

    $insert = "INSERT INTO orders (product_id, email, quantity, address, total_price) 
               VALUES ('$product_id', '$email', '$quantity', '$address', '$total')";
    
    if (mysqli_query($conn, $insert)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy Now - Tealluxe</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            background-color: white;
            margin: 50px auto;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px #ccc;
        }

        h2 {
            text-align: center;
            color: #444;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #2d8659;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-top: 15px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }

        .product-info {
            margin-top: 10px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($product && !$success): ?>
            <h2>Buy Now</h2>
            <div class="product-info">
                <p><strong>Product:</strong> <?= htmlspecialchars($product['name']) ?></p>
                <p><strong>Price:</strong> ₹<?= $product['price'] ?></p>
            </div>

            <form method="post">
                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                <input type="hidden" name="price" value="<?= $product['price'] ?>">

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" required min="1" value="1">

                <label for="address">Shipping Address:</label>
                <textarea name="address" required rows="3"></textarea>

                <button type="submit">Confirm Order</button>
            </form>
        <?php elseif ($success): ?>
            <div class="success">
                <h2>Order Placed Successfully 🎉</h2>
                <p>Thank you for shopping with Tealluxe!</p>
            </div>
        <?php else: ?>
            <h2>Product Not Found</h2>
        <?php endif; ?>
    </div>
</body>
</html>
