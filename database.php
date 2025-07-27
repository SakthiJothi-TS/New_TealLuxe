<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $skin_type = $_POST['skin_type'];
    $price = $_POST['price'];
    $rating = $_POST['rating'];
    $rating_count = $_POST['rating_count'];

    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $upload_path = 'uploads/' . $image;

    // Upload the image file to the "uploads" folder
    move_uploaded_file($tmp_name, $upload_path);

    $sql = "INSERT INTO products (image, name, skin_type, price, rating, rating_count) 
            VALUES ('$image', '$name', '$skin_type', '$price', '$rating', '$rating_count')";

    if (mysqli_query($connect, $sql)) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
