<!-- 17.Write a program to calculate Electricity bill in PHP. Conditions : For first 50unit - Price - INR 3.50/ unit, For next 100 units - Price - INR 4.00/unit, For next 100 units - price - INR 5.20/unit, For units above 250 - 6.50/unit. -->

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
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
    <script>
        function calculateBill() {
            var units = document.getElementById('units').value;
            var rate = 0;

            if (units <= 50) {
                rate = 3.50;
            } else if (units <= 150) {
                rate = 4.00;
            } else if (units <= 250) {
                rate = 5.20;
            } else {
                rate = 6.50;
            }

            var billAmount = units * rate;
            document.getElementById('billAmount').innerText = "Total Bill Amount: INR " + billAmount.toFixed(2);
        }
    </script>
</head>
<body>
    <div class="calculator">
        <h2>Electricity Bill Calculator</h2>
        <label for="units">Enter Units Consumed:</label>
        <input type="number" id="units" name="units" required><br><br>
        <input type="submit" value="Calculate Bill" onclick="calculateBill()"><br><br>
        <div id="billAmount"></div>
    </div>
</body>
</html>
