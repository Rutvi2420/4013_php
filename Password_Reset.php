<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
<center>
            <!-- HTML Form -->
            <form method="post" action="">
            <div style="background-color:lightblue; width:40%; padding-top:20px; 
            padding-bottom: 20px; border:1px solid navy; border-radius:8px; ">
          
            Email ID : <input type="email" placeholder="Enter Your Email ID" name = "email"/><br><br>
           
            
            <input type="submit" value="Submit">
            
            </div>
</form>
<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       
        //Accept user input + Remove extra spaces
        $email = trim($_POST["email"]);

        // Generate token using email + current timestamp
        $token = md5($email.time());

        // Display token
        echo "<h3>Password Reset Token</h3>";
        echo "Generated Token is : ".$token."<br>";

       
         // Example usage in reset URL
        echo "Password Reset Link : https://www.example.com/reset.php?token=".$token;
        
    }
    
    ?>
</body>
</html>