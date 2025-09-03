<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Formating</title>
</head>
<body>
<center>
            <!-- HTML Form -->
            <form method="post" action="">
            <div style="background-color:lightblue; width:40%; padding-top:20px; 
            padding-bottom: 20px; border:1px solid navy; border-radius:8px; ">
          
           Full Name: <input type="text" placeholder="Enter Your Full Name" name = "name"/><br><br>
            <input type="submit" value="Submit">
            
            </div>
</form>
<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       
        //Accept full name from user + remove spaces
        $name = trim($_POST["name"]);
        echo "Original Name : ".$name."<br>";
        
        // Convert entire string to lowercase
        $name = strtolower($name);

        // Break into words
        $words = explode(' ',$name);

         // Capitalize first letter of each word
        foreach ($words as &$word) {
            $word = ucfirst($word);
            
        }
        // Rejoin words into a single string
        $formattedName = implode(' ' , $words);

         // Display formatted name
        
        echo "Formatted Name : ". $formattedName;
      
    
    }
    


    
    ?>
</body>
</html>