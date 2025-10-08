<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Difference Calculator</title>
</head>
<body>
    <center>
        <h1>Date Difference Calculator</h1><hr>
        <?php
            //---Input Dates---
            $date1 = new DateTime("20-09-2025");
            $date2 = new DateTime("29-11-2025");
            
            //Calculate difference...
            
            $interval = $date1->diff($date2);
        
            echo "<h3>";
           echo "Start Date : ".$date1->format('d-m-Y')."<br>";
           echo "End Date : ".$date2->format('d-m-Y')."<br>";
           echo "Difference : ".$interval->days;
           echo "</h3>";

        ?>
</center>
</body>
</html>