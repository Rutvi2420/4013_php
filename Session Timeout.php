<?php
session_start();

// Set timeout duration in seconds (for demo, 30 seconds)
$timeoutDuration = 30;

// Check if user is "logged in" (for demo, we just simulate login)
if (!isset($_SESSION['loggedin'])) {
    // Simulate login for demo (in real case, check credentials)
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = 'DemoUser';
    $_SESSION['last_activity'] = time();
    $message = "You are now logged in as <strong>" . $_SESSION['username'] . "</strong>.";
} else {
    // Check if timeout has been reached
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeoutDuration) {
        // Timeout reached, log out user
        session_unset();
        session_destroy();
        session_start();
        $message = "<span style='color:red; font-weight:bold;'>Session expired due to inactivity. You have been logged out.</span>";
    } else {
        // Update last activity time
        $_SESSION['last_activity'] = time();
        $message = "Welcome back, <strong>" . $_SESSION['username'] . "</strong>. You are still logged in.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Timeout Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef6f9;
            padding: 40px;
            color: #333;
        }
        .message {
            font-size: 20px;
            margin-bottom: 25px;
        }
        .timer {
            font-weight: bold;
            color: #0077cc;
            font-size: 18px;
        }
    </style>
    <script>
        // Show countdown timer for remaining time until timeout
        let timeoutDuration = <?php echo $timeoutDuration; ?>;
        let lastActivity = <?php echo $_SESSION['last_activity'] ?? time(); ?>;
        
        function updateTimer() {
            const now = Math.floor(Date.now() / 1000);
            let secondsLeft = timeoutDuration - (now - lastActivity);
            if (secondsLeft < 0) secondsLeft = 0;
            document.getElementById('timer').textContent = secondsLeft + " seconds remaining before auto logout.";
        }

        setInterval(updateTimer, 1000);
        window.onload = updateTimer;
    </script>
</head>
<body>

<div class="message"><?php echo $message; ?></div>

<?php if (isset($_SESSION['loggedin'])): ?>
    <div class="timer" id="timer"></div>
    <p>Refresh this page or wait to see the session timeout in action (30 seconds inactivity).</p>
<?php else: ?>
    <p>Refresh the page to simulate login again.</p>
<?php endif; ?>

</body>
</html>
