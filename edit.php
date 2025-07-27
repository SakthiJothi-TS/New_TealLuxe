<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

// DB connection
$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get product ID from query string
if (!isset($_GET['id'])) {
    die("Product ID not specified.");
}
$id = $_GET['id'];

// Fetch product details
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($connect, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die("Product not found.");
}
$product = mysqli_fetch_assoc($result);

// Handle form submission
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $skin_type = $_POST['skin_type'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $rating_count = $_POST['rating_count'];

    // Check for image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $image_path = 'uploads/' . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        $update = "UPDATE products SET name='$name', skin_type='$skin_type', price=$price, rating=$rating, rating_count=$rating_count, image='$image_name' WHERE id=$id";
    } else {
        $update = "UPDATE products SET name='$name', skin_type='$skin_type', price=$price, rating=$rating, rating_count=$rating_count WHERE id=$id";
    }

    if (mysqli_query($connect, $update)) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Update failed: " . mysqli_error($connect);
    }
}
?>

<!-- Edit Product Form -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        form {
            background: #fff;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }
        input {
             width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
           button {
            width: 100%;
            padding: 12px;
            background-color: #176E79;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        img {
            max-width: 100px;
            margin-bottom: 10px;
        }
       .error {
            color: red;
            font-size: 13px;
            margin-top: -8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Edit Product</h2>
    <form id="editForm" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        <div id="nameError" class="error"></div>

        <input type="text" name="skin_type" id="skin_type" value="<?= htmlspecialchars($product['skin_type']) ?>" required>
        <div id="skinTypeError" class="error"></div>

        <input type="number" name="price" value="<?= $product['price'] ?>" required>
        <input type="number" step="0.1" name="rating" value="<?= $product['rating'] ?>" required>
        <input type="number" name="rating_count" value="<?= $product['rating_count'] ?>" required>

        <p>Current Image:</p>
        <img src="uploads/<?= htmlspecialchars($product['image']) ?>" alt="Product Image">
        <input type="file" name="image">

        <button type="submit" name="update">Update Product</button>
    </form>

    <script>
        function validateForm() {
            let isValid = true;

            const name = document.getElementById('name').value.trim();
            const skinType = document.getElementById('skin_type').value.trim();
            const nameError = document.getElementById('nameError');
            const skinTypeError = document.getElementById('skinTypeError');

            const lettersOnly = /^[A-Za-z\s]+$/;

            nameError.textContent = "";
            skinTypeError.textContent = "";

            if (!lettersOnly.test(name)) {
                nameError.textContent = "Name should contain only letters.";
                isValid = false;
            }

            if (!lettersOnly.test(skinType)) {
                skinTypeError.textContent = "Skin type should contain only letters.";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>
</html>
