<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number Application</title>
</head>
<body>
    <h2>Reverse Number Application</h2>
    <form method="post" action="">
        Enter a Number:
        <input type="text" name="number" required>
        <br><br>
        <button type="submit" name="submit">Reverse Number</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
            $number = $_POST['number'];
            // Check if the input is a valid number
            if (is_numeric($number)) {
                // Reverse the number
                $reversedNumber = strrev($number);
                echo "<h3>The reversed number is: $reversedNumber</h3>";
            } else {
                echo "<h3>Please enter a valid number.</h3>";
            }
        }
    }
    ?>
</body>
</html>
