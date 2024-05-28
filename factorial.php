<!-- 19.Write a PHP script to find the factorial of a given number. -->

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
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
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .calculator h2 {
            margin-top: 0;
        }
        .calculator label, .calculator input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        .calculator input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .calculator input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Factorial Calculator</h2>
        <form method="post">
            <label for="number">Enter a Number:</label>
            <input type="number" id="number" name="number" required><br><br>
            <input type="submit" value="Calculate Factorial">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['number'];
                $factorial = 1;

                for ($i = 1; $i <= $number; $i++) {
                    $factorial *= $i;
                }

                echo "<p>Factorial of $number is: $factorial</p>";
            }
        ?>
    </div>
</body>
</html>