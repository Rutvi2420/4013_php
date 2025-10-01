<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Generator </title>
</head>
<body>
    <center>
<!--Resume Generator Using String Formatting -->
        <h1><I><u>Resume Generator</u></I></h1>
        <div style = "width : 60%;border : 2px solid navy; background-color:#f0f8ff;">
        <?php
    // ---- Candidate Data ----
    $user = [
        "name" =>"RUTVI Patel",
        "email" => "rutvi@gmail.com",
        "phone" => "+91 7600061160",
        "skills" => [".NET" , "JAVA" , "SQL" , "Python" , "WebDev"],
        "experience" =>[
            ["position" => "Web Developer", "company" => "TechCorp" , "years" => "2023-2025"],
            ["position" => "Intern" , "company" => "CodeLabs" , "years" => "2022-2023"]
        ]
    ]; 
 
// ---- Function to Format Resume ----



function generateResume($data)
{
    $resume ="<h2>===== RESUME =====</h2><br>";
    $resume.= "<h3>Name : {$data['name']}</h3>";
    $resume.= "<h3>Email : {$data['email']}</h3>";
    $resume.="<h3>Phone No. : {$data['phone']}</h3><br><br>";
    $resume.= "<b><u>Skills</u></b><br>";
    $resume.="<h4>-".implode("<br>-" , $data['skills'])."</h4><br><br>";
    
    $resume.= "<b><u>Experience</u></b><br>";
    foreach($data['experience'] as $exp)
    {
        $resume.="<h3> * {$exp['position']} at {$exp['company']} ({$exp['years']})</h3>";
          
    }


    return $resume;


    
}

echo generateResume($user);
?>
</div>
</center>
</body>
</html>