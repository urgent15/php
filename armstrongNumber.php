<!-- 11.Write a PHP program to check weather any given number is Armstrong or not. -->

<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
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
        .checker {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .checker h2 {
            margin-top: 0;
        }
        .checker label, .checker input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        .checker input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .checker input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function showAlert(message, isArmstrong) {
            var color = isArmstrong ? 'green' : 'red';
            alert(message);
            var resultDiv = document.getElementById('result');
            resultDiv.style.color = color;
            resultDiv.innerHTML = message;
        }
    </script>
</head>
<body>
    <div class="checker">
        <h2>Armstrong Number Checker</h2>
        <form method="post">
            <label for="number">Enter a Number:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" value="Check Armstrong">
        </form>

        <div id="result"></div>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST['number'];
                $numStr = strval($number);
                $numLength = strlen($numStr);
                $sum = 0;

                for ($i = 0; $i < $numLength; $i++) {
                    $digit = intval($numStr[$i]);
                    $sum += pow($digit, $numLength);
                }

                $isArmstrong = ($sum == $number);
                $message = $isArmstrong ? "$number is an Armstrong number." : "$number is not an Armstrong number.";
                echo "<script>showAlert('$message', $isArmstrong);</script>";
            }
        ?>
    </div>
</body>
</html>