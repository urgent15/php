<!-- 25.Write a PHP program to get ARRAY key from given array list. -->

<!DOCTYPE html>
<html>
<head>
    <title>Array Keys</title>
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
        <h2>Array Keys</h2>
        <?php
            // Given array list
            $arrayList = array(
                "name" => "Debasish",
                "age" => 30,
                "city" => "Kolkata",
                "country" => "India"
            );

            // Get the keys from the array
            $keys = array_keys($arrayList);

            // Display the keys
            echo "<p>Array Keys: " . implode(", ", $keys) . "</p>";
        ?>
    </div>
</body>
</html>