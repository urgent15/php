<!-- 28.Write a PHP program to Get server information. -->

<!DOCTYPE html>
<html>
<head>
    <title>Server Information</title>
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
        <h2>Server Information</h2>
        <ul>
            <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
            <li>Server IP Address: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
            <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
            <li>Server Protocol: <?php echo $_SERVER['SERVER_PROTOCOL']; ?></li>
            <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
            <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
            <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
            <li>Script Filename: <?php echo $_SERVER['SCRIPT_FILENAME']; ?></li>
            <li>PHP Version: <?php echo PHP_VERSION; ?></li>
        </ul>
    </div>
</body>
</html>
