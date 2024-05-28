<!-- 6.Write a PHP program to swap two numbers. -->
<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>
    <h2>Enter Two Numbers to Swap</h2>
    <form method="post">
        <label for="num1">Number 1:</label><br>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label><br>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <input type="submit" value="Swap">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the numbers from the form
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            // Swap the numbers
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;

            // Display the swapped numbers
            echo "<h3>After swapping:</h3>";
            echo "<p>Number 1: $num1</p>";
            echo "<p>Number 2: $num2</p>";
        }
    ?>
</body>
</html>