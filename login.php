<?php
session_start();              

$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "tealluxe";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$emailErr = $passwordErr = "";
$email = $password = "";
$loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $valid = false;
    } else {
        $email = trim($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $valid = false;
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $valid = false;
    } else {
        $password = trim($_POST["password"]);
    }


    if ($valid) {
        $email    = mysqli_real_escape_string($connect, $email);
        $password = mysqli_real_escape_string($connect, $password);


        $adminQuery  = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $adminResult = mysqli_query($connect, $adminQuery);

        if (mysqli_num_rows($adminResult) == 1) {
            $adminRow = mysqli_fetch_assoc($adminResult);

            // store in session
            $_SESSION['username'] = $adminRow['name'] ?? $adminRow['email'];
            $_SESSION['role']     = 'admin';

            header("Location: dashboard.php");
            exit();
        }

        $userQuery  = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $userResult = mysqli_query($connect, $userQuery);

        if (mysqli_num_rows($userResult) == 1) {
            $userRow = mysqli_fetch_assoc($userResult);

            // store in session
            $_SESSION['username'] = $userRow['username'] ?? $userRow['email'];
            $_SESSION['role']     = 'user';

            header("Location: index.php");
            exit();
        }

        $loginError = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Tealluxe</title>
    <link rel="stylesheet" href="./css/login.css">
    <style>
        .error { color: red; font-size: 16px; }
        input  { width: 100%; padding: 8px; }
    </style>
</head>
<body>
    <h2 align="center">Login - Tealluxe</h2>

    <form method="POST" action="">
        <label>Email</label><br>
        <input type="email"
               name="email"
               placeholder="Enter Email"
               value="<?= htmlspecialchars($email) ?>"><br>
        <span class="error"><?= $emailErr ?></span><br><br>

        <label>Password</label><br>
        <input type="password"
               name="password"
               placeholder="Enter Password"><br>
        <span class="error"><?= $passwordErr ?></span><br><br>

        <input type="submit" value="Login"><br><br>
        <span class="error"><?= $loginError ?></span>
    </form>
</body>
</html>
