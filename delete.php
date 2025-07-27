<?php
session_start();

// Optional: Access control if using roles
// if ($_SESSION['role'] !== 'admin') {
//     die("Access denied");
// }

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    
    // Soft delete: mark product as inactive
    $sql = "UPDATE products SET status = 'inactive' WHERE id = $id";
    
    if (mysqli_query($connect, $sql)) {
        header("Location: dashboard.php"); // Change to your actual dashboard page
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($connect);
?>
