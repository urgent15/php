<!-- 27.Write a PHP program to read from directory. -->

<!DOCTYPE html>
<html>
<head>
    <title>Read Directory</title>
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
        .container ul {
            list-style-type: none;
            padding: 0;
        }
        .container li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Files in Directory</h2>
        <ul>
            <?php
                // Directory path
                $directory = "./";

                // Check if the directory exists
                if (is_dir($directory)) {
                    // Open the directory
                    if ($handle = opendir($directory)) {
                        // Read files from the directory
                        while (($file = readdir($handle)) !== false) {
                            if ($file != "." && $file != "..") {
                                echo "<li>$file</li>";
                            }
                        }
                        // Close the directory handle
                        closedir($handle);
                    } else {
                        echo "<li>Error: Unable to open directory.</li>";
                    }
                } else {
                    echo "<li>Error: Directory does not exist.</li>";
                }
            ?>
        </ul>
    </div>
</body>
</html>