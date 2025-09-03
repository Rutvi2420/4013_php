<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Moderation System</title>
</head>
<body>
    <center>
<form method="post" action="">
            <div style="background-color:lightblue; width:40%; padding-top:20px; 
            padding-bottom: 20px; border:1px solid navy; border-radius:8px; ">
          
            Enter Your Comment : <input type="text" placeholder="Type Your Comment" name = "cmnt"/><br><br>
            <input type="submit" value="Submit">
            
            </div>
</form>
    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
            // Accept comment input + remove spaces
            $comment = trim($_POST["cmnt"]);
           
            //Convert to lowercase for keyword matching
            $format = strtolower($comment);

            //Define banned words
            $bannedWords = ['spam', 'hack' , 'scam'];
        
            //Check if comment contains banned words
           
            $flagged = false;
            foreach($bannedWords as $word)
            {
                if(strpos($format , $word) !== false)
                {
                    $flagged = true;
                    break;

                }
            }
            echo "<h3>";
             echo "<h3>Comment Moderation</h3>";
            //Safely display the comment
             echo "User Comment: " . htmlspecialchars($comment) . "<br>";
             echo "</h3>";

             if($flagged)
             {
                echo "<h2><span style='color:red;'>⚠️Comment flagged for inappropriate content.</h2></span>";
             }
             else
             {
                echo "<h2><span style='color:green;'>✅Commnet Approved.</h2></span>";
             }
             

        }

       
        
       

    
    ?>
</center>
</body>
</html>