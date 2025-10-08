<?php
session_start();

$valid_username = "RUTU";
$valid_password = "RUTU@24";

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $message = "<span class='success'>Login successful! Welcome, " . htmlspecialchars($username) . ".</span>";
    } else {
        $message = "<span class='error'>Invalid username or password.</span>";
    }
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $message .= "<br><span class='info'>You are currently logged in as " . htmlspecialchars($_SESSION['username']) . ".</span>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Validation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            padding: 40px;
            color: #333;
        }
        h2 {
            color: #003366;
        }
        form {
            background: #e6f0ff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 51, 102, 0.2);
            width: 350px;
        }
        input[type="text"], input[type="password"] {
            width: 95%;
            padding: 10px;
            margin: 12px 0;
            border: 2px solid #0059b3;
            border-radius: 6px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #0059b3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #003d80;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: #d32f2f;
            font-weight: bold;
        }
        .info {
            color: #0066cc;
            font-style: italic;
        }
        .message {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Login Form</h2>

<div class="message"><?php echo $message; ?></div>

<form method="post" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required autocomplete="off"><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>

