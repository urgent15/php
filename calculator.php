<!-- 8.Write a program for mathematical calculator using PHP. -->

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
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
        }
        .calculator h2 {
            margin-top: 0;
        }
        .calculator label, .calculator select, .calculator input {
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
        <h2>PHP Calculator</h2>
        <form method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required>
            
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required>
            
            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            
            <input type="submit" value="Calculate">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = '';

                if ($operation == "add") {
                    $result = $num1 + $num2;
                } elseif ($operation == "subtract") {
                    $result = $num1 - $num2;
                } elseif ($operation == "multiply") {
                    $result = $num1 * $num2;
                } elseif ($operation == "divide") {
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero";
                    }
                }

                echo "<h3>Result: $result</h3>";
            }
        ?>
    </div>
</body>
</html>