<?php
// Simulate setting an environment variable (for testing only)
putenv("APP_ENV=development");
// You could also use $_ENV['APP_ENV'] if your environment supports it properly

// Fetch environment variable
$appEnv = getenv('APP_ENV') ?: 'production';

// Define database configurations for different environments
$dbConfigs = [
    'development' => [
        'host' => 'localhost',
        'username' => 'Rutu_user',
        'password' => 'Rutu_pass',
        'dbname' => 'Rutu_db'
    ],
    'production' => [
        'host' => 'prod.db.server',
        'username' => 'prod_user',
        'password' => 'prod_pass',
        'dbname' => 'prod_db'
    ]
];

// Load configuration based on environment
$currentConfig = $dbConfigs[$appEnv] ?? $dbConfigs['production'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Environment-based DB Config</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f7fa;
        }
        .config-output {
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            max-width: 400px;
        }
        /* Different background colors based on environment */
        .development {
            background-color: #27ae60; /* Green */
        }
        .production {
            background-color: #c0392b; /* Red */
        }
        h2 {
            margin-top: 0;
        }
        .config-details {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 6px;
            font-family: monospace;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="config-output <?= htmlspecialchars($appEnv) ?>">
    <h2>Environment: <?= htmlspecialchars(ucfirst($appEnv)) ?></h2>
    <p>Loaded Database Configuration:</p>
    <div class="config-details">
        Host: <?= htmlspecialchars($currentConfig['host']) ?><br>
        Username: <?= htmlspecialchars($currentConfig['username']) ?><br>
        Password: <?= htmlspecialchars($currentConfig['password']) ?><br>
        Database: <?= htmlspecialchars($currentConfig['dbname']) ?>
    </div>
</div>

</body>
</html>


