<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accept input via POST
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Sanitize inputs
    $name = trim($name);
    $email = strtolower(trim($email));
    $message = htmlspecialchars(trim($message), ENT_QUOTES, 'UTF-8');

    // Display sanitized output
    echo "<h2>Sanitized User Input:</h2>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Message:</strong> " . $message . "</p>";
} else {
    // Show the form if not submitted yet
    echo '
    <form method="POST" action="">
        <label>Name: <input type="text" name="name" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <label>Message:<br>
        <textarea name="message" rows="5" cols="30" required></textarea></label><br><br>
        <input type="submit" value="Submit">
    </form>
    ';
}
?>