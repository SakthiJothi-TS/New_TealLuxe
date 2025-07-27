<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables
$username = $email = $password = "";
$usernameErr = $emailErr = $passwordErr = "";
$showForm = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;

    // Get input and trim spaces
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation: Username should not contain numbers
    if (!preg_match("/^[a-zA-Z\s]+$/", $username)) {
        $usernameErr = "Username should contain only letters.";
        $isValid = false;
    }

    // Validation: Email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Enter email .";
        $isValid = false;
    }

    // Validation: Password length
    if (strlen($password) < 5) {
        $passwordErr = "Password must be at least 5 characters.";
        $isValid = false;
    }

    // If valid, insert into DB
    if ($isValid) {
        $check = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($connect, $check);

        if (mysqli_num_rows($result) > 0) {
            $usernameErr = "Username already exists. Try another.";
        } else {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if (mysqli_query($connect, $sql)) {
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($connect);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Tealluxe</title>
    <link rel="stylesheet" href="./css/register.css">
    <style>
        .error { color: red; font-size: 16px; }
        input { width: 300px; padding: 8px; }
    </style>
</head>
<body>
    <h2 align="center">Register - Tealluxe</h2>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter Username" value="<?php echo htmlspecialchars($username); ?>" required><br>
        <span class="error"><?php echo $usernameErr; ?></span><br><br>

        <input type="email" name="email" placeholder="Enter Email" value="<?php echo htmlspecialchars($email); ?>" ><br>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <input type="password" name="password" placeholder="Enter Password" required><br>
        <span class="error"><?php echo $passwordErr; ?></span><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
