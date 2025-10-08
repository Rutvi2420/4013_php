<?php
// Retrieve server info safely
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'Unknown';
$requestUri = $_SERVER['REQUEST_URI'] ?? 'Unknown';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Request Logger</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            color: #1a1a1a;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 480px;
            width: 100%;
        }
        h1 {
            color: #0078d7;
            margin-bottom: 25px;
            text-align: center;
        }
        .info {
            font-size: 18px;
            margin-bottom: 15px;
            padding: 14px 20px;
            border-radius: 8px;
            background: #e7f1ff;
            border-left: 5px solid #0078d7;
        }
        .label {
            font-weight: 700;
            color: #004a99;
        }
        .value {
            margin-left: 10px;
            font-weight: 600;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Visitor Request Information</h1>
    <div class="info">
        <span class="label">IP Address:</span>
        <span class="value"><?php echo htmlspecialchars($ipAddress); ?></span>
    </div>
    <div class="info">
        <span class="label">Request Method:</span>
        <span class="value"><?php echo htmlspecialchars($requestMethod); ?></span>
    </div>
    <div class="info">
        <span class="label">Requested URI:</span>
        <span class="value"><?php echo htmlspecialchars($requestUri); ?></span>
    </div>
    <div class="info">
        <span class="label">User Agent:</span>
        <span class="value"><?php echo htmlspecialchars($userAgent); ?></span>
    </div>
</div>

</body>
</html>

