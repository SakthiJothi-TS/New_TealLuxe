<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 50px;
        }

        form {
            background: #fff;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
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

        button:hover {
            background-color: #0a5761;
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

    <form id="productForm" action="database.php" method="POST" enctype="multipart/form-data" style="max-width:400px; margin:auto;">
    <h2>Add Product</h2>

    <label for="name">Product Name:</label><br>
    <input type="text" name="name" id="name" placeholder="Product Name" required><br>
    <div class="error" id="nameError"></div>

    <label for="skin_type">Skin Type:</label><br>
    <input type="text" name="skin_type" id="skin_type" placeholder="Skin Type" required><br>
    <div class="error" id="skinTypeError"></div>

    <label for="price">Price:</label><br>
    <input type="number" name="price" placeholder="Price" required><br><br>

    <label for="rating">Rating:</label><br>
    <input type="number" step="0.1" name="rating" placeholder="Rating" required><br><br>

    <label for="rating_count">Rating Count:</label><br>
    <input type="number" name="rating_count" placeholder="Rating Count" required><br><br>

    <label for="image">Product Image:</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit" name="submit">Add Product</button>
</form>


    <script>
        document.getElementById("productForm").addEventListener("submit", function (e) {
            let valid = true;

            const name = document.getElementById("name").value.trim();
            const skinType = document.getElementById("skin_type").value.trim();

            const nameError = document.getElementById("nameError");
            const skinTypeError = document.getElementById("skinTypeError");

            nameError.textContent = "";
            skinTypeError.textContent = "";

            if (!isNaN(name)) {
                nameError.textContent = "Product name should not be a number.";
                valid = false;
            }

            if (!isNaN(skinType)) {
                skinTypeError.textContent = "Skin type should not be a number.";
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    </script>

</body>

</html>



