<!-- 26.Write a program in PHP to get current directory, filename and code line number.  -->

<!DOCTYPE html>
<html>
<head>
    <title>PHP File Information</title>
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
        .container p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PHP File Information</h2>
        <?php
            // Get current directory
            $currentDir = __DIR__;

            // Get filename
            $fileName = __FILE__;

            // Get code line number
            $lineNumber = __LINE__;

            // Display file information
            echo "<p>Current Directory: $currentDir</p>";
            echo "<p>Filename: $fileName</p>";
            echo "<p>Code Line Number: $lineNumber</p>";
        ?>
    </div>
</body>
</html>