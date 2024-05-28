<!-- 14.Write a PHP script for the following : Design a form to accept a string. Write a function to count the total numbers of vowels from the string. Show the occurrence of each vowel from the string.  -->

<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        .result-container {
            margin-top: 20px;
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        .result-container p {
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Count Vowels</h2>
        <form method="post">
            <label for="string">Enter a String:</label><br>
            <input type="text" id="string" name="string" required><br><br>
            <input type="submit" value="Count Vowels">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputString = $_POST['string'];
                $vowels = ['a', 'e', 'i', 'o', 'u'];
                $vowelCounts = array_fill_keys($vowels, 0);

                for ($i = 0; $i < strlen($inputString); $i++) {
                    $char = strtolower($inputString[$i]);
                    if (in_array($char, $vowels)) {
                        $vowelCounts[$char]++;
                    }
                }

                $totalVowels = array_sum($vowelCounts);

                echo "<div class='result-container'>";
                echo "<h3>Total Number of Vowels: $totalVowels</h3>";
                foreach ($vowelCounts as $vowel => $count) {
                    echo "<p>$vowel: $count</p>";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>