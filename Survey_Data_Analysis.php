<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Data Analysis</title>
</head>
<body>
<!--Survey Data Analysis using array and functions -->
<center>
    <h1>Survey Data Analysis</h1>
    <?php
        //Function to calculate average...

        function calcAverage($response)
        {
            $total = array_sum($response); // Sum of all scores
            $count = count($response);   //Count Number of response

            if($count === 0)
                return 0; //Avoid division by zero

            return $total / $count;

        }

        //Function to display result..

        function displayResult($response)
        {
            echo "<h3>Survey Score : ".implode("," , $response)."<br>";
            $avg = calcAverage($response);
            echo "Average Score : ".number_format($avg , 2)."</h3>";
        }

        //collecting survey response in an array...
        $survey_response = [2 ,4 , 3, 5 , 1  ,5 ];

        //call the function to display result
        displayResult($survey_response);
    ?>

</center>
</body>
</html>