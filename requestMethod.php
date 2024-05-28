<!-- 30.Write a PHP program to create a self processing form, use the $_SERVER['REQUEST_METHOD'] that returns the request method e.g. , Get or POST., if the $_SERVER['REQUEST_METHOD'] is GET, you show the form., if the $_SERVER['REQUEST_METHOD']  is POST, you process it with an output message. -->


<!DOCTYPE html>
<html>
<head>
    <title>Self-Processing Form</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Self-Processing Form</h2>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                // Display the form
                echo '<form method="post">';
                echo '<input type="text" name="name" placeholder="Enter your name" required><br>';
                echo '<input type="submit" value="Submit">';
                echo '</form>';
            } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Process the form
                $name = $_POST["name"];
                echo "<p>Thank you, $name, for submitting the form!</p>";
            }
        ?>
    </div>
</body>
</html>