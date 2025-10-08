<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        $fileName = htmlspecialchars($_FILES['uploadedFile']['name']);
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];

        // For demo, we won't move the file to a permanent location
        // But you could move_uploaded_file() here if you want

        $message = "<span class='success'>File uploaded successfully: <strong>$fileName</strong></span>";
    } else {
        $message = "<span class='error'>Error uploading file. Please try again.</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff7e6;
            padding: 40px;
            color: #333;
        }
        h2 {
            color: #b36b00;
        }
        form {
            background-color: #fff0b3;
            padding: 25px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 0 12px rgba(179, 107, 0, 0.3);
        }
        input[type="file"] {
            margin: 15px 0;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #b36b00;
            color: white;
            border: none;
            padding: 10px 18px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #804c00;
        }
        .success {
            color: #4b7000;
            font-weight: bold;
            background-color: #d7f3a9;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #4b7000;
            width: 400px;
        }
        .error {
            color: #cc3300;
            font-weight: bold;
            background-color: #f8d7d7;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #cc3300;
            width: 400px;
        }
    </style>
</head>
<body>

<h2>Upload a File</h2>

<?php if ($message): ?>
    <div><?php echo $message; ?></div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="uploadedFile">Choose file to upload:</label><br>
    <input type="file" name="uploadedFile" id="uploadedFile" required><br>
    <input type="submit" value="Upload">
</form>

</body>
</html>