<!-- 7.Write a PHP program to Compute the multiplication table of a number. -->

<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Enter a Number to Generate its Multiplication Table</h2>
    <form method="post">
        <label for="number">Number:</label><br>
        <input type="number" id="number" name="number" required><br><br>
        <input type="submit" value="Generate Table">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the number from the form
            $number = $_POST['number'];
            
            // Display the multiplication table
            echo "<h3>Multiplication Table for $number</h3>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i</td><td>$result</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>