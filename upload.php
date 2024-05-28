<!-- 32.Write a PHP program to upload an image file within upload folder. Then fetch the details of the file. -->

<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
        }
        .container input[type="file"], .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .container img {
            max-width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Image Upload and Details</h2>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" required><br>
            <input type="submit" name="submit" value="Upload Image">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                // Directory to store uploaded images
                $uploadDir = "upload/";

                // Get the details of the uploaded file
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $fileType = $_FILES["image"]["type"];
                $fileTmpName = $_FILES["image"]["tmp_name"];
                $fileError = $_FILES["image"]["error"];

                // Move the uploaded file to the upload directory
                $destination = $uploadDir . $fileName;
                if (move_uploaded_file($fileTmpName, $destination)) {
                    echo "<p>Image uploaded successfully!</p>";
                    echo "<img src='$destination' alt='Uploaded Image'>";
                    echo "<p>File Name: $fileName</p>";
                    echo "<p>File Size: $fileSize bytes</p>";
                    echo "<p>File Type: $fileType</p>";
                } else {
                    echo "<p>Error uploading image.</p>";
                }
            }
        ?>
    </div>
</body>
</html>