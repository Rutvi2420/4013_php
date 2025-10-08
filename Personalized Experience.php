<?php
// Default language
$language = 'English';

// If form submitted, set the cookie with selected language
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    // Set cookie for 30 days
    setcookie('preferred_language', $language, time() + (30 * 24 * 60 * 60));
} 
// If cookie exists, use the stored language
elseif (isset($_COOKIE['preferred_language'])) {
    $language = $_COOKIE['preferred_language'];
}

$message = "Your preferred language is: <strong>" . htmlspecialchars($language) . "</strong>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Language Preference with Cookies</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f8ff;
            color: #333;
        }
        h2 {
            color: #0073e6;
        }
        form {
            margin-top: 20px;
        }
        select {
            font-size: 16px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #0073e6;
        }
        input[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            margin-left: 10px;
            border-radius: 5px;
            border: none;
            background-color: #0073e6;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #005bb5;
        }
        .message {
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 18px;
            color: #004080;
        }
    </style>
</head>
<body>

<h2>Select Your Preferred Language</h2>

<div class="message"><?php echo $message; ?></div>

<form method="post" action="">
    <label for="language">Language:</label>
    <select name="language" id="language">
        <option value="English" <?php if ($language === 'English') echo 'selected'; ?>>English</option>
        <option value="Hindi" <?php if ($language === 'Hindi') echo 'selected'; ?>>Hindi</option>
        <option value="Gujarati" <?php if ($language === 'Gujarati') echo 'selected'; ?>>Gujarati</option>
        <option value="German" <?php if ($language === 'German') echo 'selected'; ?>>German</option>
    </select>
    <input type="submit" value="Save Preference">
</form>

</body>
</html>
