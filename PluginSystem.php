<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plugin System</title>
</head>
<body>
    <center>
        <h1>Plugin System with Function Existence Check</h1>
        <?php

            function greetFunction()
            {
                return "<h3>Welcome, Message From Plugin...</h3>";
            }

            function runPlugin($usrFunction)
            {
                //Condition for check function is exist or not
                if(function_exists($usrFunction)) 
                {
                    echo call_user_func($usrFunction); // Calling only existence function...
                }
                else
                {
                    echo "<h3>Plugin Function $usrFunction Not Found !</h3>";
                }
            }

            runPlugin('greetFunction'); // Calling Existing Function
            runPlugin('MyFunction') ; // Not Exist!
        ?>
</center>
</body>
</html>