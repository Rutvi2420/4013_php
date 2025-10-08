<?php
$message = "";

if (isset($_GET['username']) && !empty(trim($_GET['username']))) {
    $username = htmlspecialchars(trim($_GET['username']));
    $message = "Welcome, <span class='username'>$username</span>! Thank you for registering.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f8ff;
            color: #333;
            padding: 30px;
        }
        h2 {
            color: #0056b3;
        }
        form {
            background: #e1ecff;
            padding: 20px;
            border-radius: 8px;
            width: 320px;
            box-shadow: 0 0 10px rgba(0, 86, 179, 0.3);
        }
        input[type="text"] {
            padding: 8px;
            width: 95%;
            border: 1px solid #0056b3;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 12px;
        }
        input[type="submit"] {
            background-color: #0056b3;
            color: white;
            border: none;
            padding: 10px 16px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #004080;
        }
        .message {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #d9f2d9;
            border: 1px solid #2e7d32;
            border-radius: 6px;
            color: #2e7d32;
            font-weight: bold;
            width: 320px;
        }
        .username {
            color: #004080;
            font-style: italic;
        }
    </style>
</head>
<body>

<h2>User Registration Form</h2>

<?php if ($message): ?>
    <div class="message"><?php echo $message; ?></div>
<?php endif; ?>

<form method="get" action="">
    Enter your username:<br>
    <input type="text" name="username" required placeholder="Your username">
    <br>
    <input type="submit" value="Register">
</form>

</body>
</html>

