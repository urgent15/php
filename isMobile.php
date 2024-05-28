<!-- 29.Write a PHP program to detect remote device is mobile device or not. -->

<!DOCTYPE html>
<html>
<head>
    <title>Mobile Device Detection</title>
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
        <h2>Mobile Device Detection</h2>
        <?php
            $userAgent = $_SERVER['HTTP_USER_AGENT'];

            if (strpos($userAgent, 'Mobile') !== false || strpos($userAgent, 'Android') !== false || strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false || strpos($userAgent, 'Windows Phone') !== false) {
                echo "<p>The remote device is a mobile device.</p>";
            } else {
                echo "<p>The remote device is not a mobile device.</p>";
            }
        ?>
    </div>
</body>
</html>