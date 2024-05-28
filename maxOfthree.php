<!-- 5.Write a PHP program to find maximum of three numbers. -->

<!DOCTYPE html>
<html>
<head>
    <title>Find Maximum of Three Numbers</title>
</head>
<body>
    <h2>Enter Three Numbers to Find the Maximum</h2>
    <form method="post">
        <label for="num1">Number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="num3">Number 3:</label><br>
        <input type="number" id="num3" name="num3" required><br><br>
        
        <input type="submit" value="Find Maximum">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the numbers from the form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            // Find the maximum number
            $max = $num1; // Assume $num1 is the maximum initially
            if ($num2 > $max) {
                $max = $num2; // Update $max if $num2 is greater
            }
            if ($num3 > $max) {
                $max = $num3; // Update $max if $num3 is greater
            }

            // Display the maximum number
            echo "<h3>The maximum of $num1, $num2, and $num3 is $max.</h3>";
        }
    ?>
</body>
</html>