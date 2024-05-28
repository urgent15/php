<!-- 2.Write a PHP program to get the name of user from HTML form and show greeting text. -->

<!DOCTYPE html>
<html>
<head>
    <title>Greeting Users</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect the value of the input field
            $name = htmlspecialchars($_POST['name']); // Use htmlspecialchars to prevent XSS
            if (!empty($name)) {
                echo "<h1>Welcome Dear, $name!</h1>";
            } else {
                echo "<h1>Please enter your name!</h1>";
            }
        } else {
            echo "<h1>Invalid request method.</h1>";
        }
        ?>
</body>
</html>

