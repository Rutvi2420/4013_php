<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masking</title>
</head>
<body>
    <center>
        <h1>Data Masking</h1>
        <?php
            
            $email = "Rutvi.Meghpara@example.com";

            // Find the position of "@"
            $pos = strpos($email , "@");
           // echo $pos."<br>";

           // Split into local-part and domain
            $ext = substr($email , 0 , $pos);
           // echo $ext."<br>";

            
            $domain = substr($email ,$pos);
           // echo $domain."<br>";

            //Take first 2 chars of local-part
            $first = substr($ext,0 , 2);
           // echo $first."<br>";

           // Take last 2 chars of local-part
            $last = substr($ext , -2);
            //echo $last."<br>";

            // Combine with "..."
            $masked = $first."...".$last.$domain;
            echo "<h2>".$masked."</h2>";


        ?>
        
</center>
</body>
</html>