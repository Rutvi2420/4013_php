<?php

$counter = 0;

function incrementCounter() {
    
    $GLOBALS['counter']++;
}

incrementCounter();
incrementCounter();
incrementCounter();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Global Counter Demo</title>
    <style>
        .counter-output {
            font-size: 24px;
            font-weight: bold;
            color: #2E86C1; 
            background-color: #D6EAF8; 
            padding: 10px 20px;
            border-radius: 8px;
            width: fit-content;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<div class="counter-output">
    <?php
    echo "Counter value: " . $counter;
    ?>
</div>

</body>
</html>
