<!-- 4.Create a PHP program to find odd or even number from given number. -->

<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Enter a Number to Check if it's Odd or Even</h2>
    <form method="post">
        <label for="number">Number:</label><br>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the number from the form
            $number = $_POST['number'];
            
            // Check if the number is odd or even
            if ($number % 2 == 0) {
                echo "<h3>$number is an even number.</h3>";
            } else {
                echo "<h3>$number is an odd number.</h3>";
            }
        }
    ?>
</body>
</html>