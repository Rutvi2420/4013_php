<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Countdown</title>
</head>
<body>
    <center>
        <h1>Event Countdown</h1>
        <?php
            function countDays($eventDate)
            {
                $today = strtotime(date('Y-m-d')); // Current date timestamp
              
                $event = strtotime($eventDate); //Event date timestamp

                if($event < $today)
                    return "The event date already passed !";
                

                $diff = $event - $today;  // Difference in seconds
                $days = floor($diff / (60 * 60 * 24)); // Convert to days
                echo "<h3>Event Date is : ".date($eventDate)."</h3><br>";
                return "<h3>".$days. " days remaining until the event.</h3>";

                



            }

            echo countDays('2025-11-29');
        ?>
</center>
</body>

</html>