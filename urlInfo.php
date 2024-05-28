<!-- 31.Write a PHP program to retrieve given URL information. -->

<!DOCTYPE html>
<html>
<head>
    <title>URL Information Retrieval</title>
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
        .container input[type="text"], .container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .container textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>URL Information Retrieval</h2>
        <form method="post">
            <input type="text" name="url" placeholder="Enter URL" required><br>
            <input type="submit" value="Retrieve Information">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve information from the URL
                $url = $_POST["url"];
                $urlContent = file_get_contents($url);

                // Display the retrieved information
                if ($urlContent !== false) {
                    echo "<textarea readonly>$urlContent</textarea>";
                } else {
                    echo "<p>Error: Unable to retrieve information from the URL.</p>";
                }
            }
        ?>
    </div>
</body>
</html>