<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Slug Generation</title>
</head>
<body>
    <center>
        <h1>URL Slug Generation</h1>
        <?php
            //Function for generating slugs...
            function generateSlug($title)
            {
                //1.Removes leading and trailing whitespace.
                $slug = trim($title);

                //2.Converts the entire string to lowercase.
                $slug = strtolower($slug);

                //3.Replaces all spaces with a hyphen (-).
                $slug = str_replace(" ", "-" ,$slug);
                
                // 4. Remove invalid characters (keep only a-z, 0-9, and hyphen)
                $slug = preg_replace("/[^a-z0-9-]/","",$slug);

                //Return the final string.
                return $slug;
            }

            $str = "My First Blog Post!!";
            echo "<h2>String is : " . $str."</h2>";
            echo "<h2>Slug : ".generateSlug($str)."</h2>";
        ?>
</center>
</body>
</html>