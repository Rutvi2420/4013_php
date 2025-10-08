<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acedemmic Calender</title>
</head>
<body>

    <center>
        <h1>Acedemmic Calender</h1>

        <?php
            // ----Function to Display Academic Calendar Date----

            function currentCalender()
            {
                echo "<h2>Today's Date : ".date("l, d F Y")."</h2>";
            }

            

            //call the function...
            currentCalender();
        ?>
</center>

</body>
</html>