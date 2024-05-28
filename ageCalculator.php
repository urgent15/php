<!-- 21.Write a PHP program to to Create an age calculator.  -->

<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
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
        .result {
            margin-top: 20px;
        }
    </style>
    <script>
        function calculateAge() {
            var dob = document.getElementById('dob').value;
            var dobDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - dobDate.getFullYear();
            var monthDiff = today.getMonth() - dobDate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dobDate.getDate())) {
                age--;
            }

            document.getElementById('age').innerText = "Your Age: " + age + " years";
        }
    </script>
</head>
<body>
    <div class="calculator">
        <h2>Age Calculator</h2>
        <label for="dob">Enter Your Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        <input type="submit" value="Calculate Age" onclick="calculateAge()">

        <div class="result" id="age"></div>
    </div>
</body>
</html>
