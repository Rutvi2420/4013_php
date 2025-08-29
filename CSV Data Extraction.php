<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Data Extraction</title>
</head>
<body>
    <center>
        <?php
            $csvRow = "101,John Doe,j.doe@email.com,Admin";
            $sep = explode("," , $csvRow);

            $userID = $sep[0];
            $userName = $sep[1];
            $email = $sep[2];
            $role = $sep[3];

            if(trim($role) === "Admin")
                echo "<h2>Welcome, $userName (User ID : $userID)</h2>";
            else
                echo "Access Denied for user $email";

        ?>
</center>
</body>
</html>