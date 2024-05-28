<!-- 23.Write a PHP program to create a String and store value on that string "php Program - the complete SOLUTION for WEB development". Do the following operations : , Convert lowercase string to uppercase., Convert uppercase string to lowercase., Convert first character uppercase., convert first character of all the words uppercase., get the last 11 characters of string., replace the first "the" of the following string with "best" -->


<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
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
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
        }
        .container p {
            margin-bottom: 10px;
        }
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>String Operations</h2>
        <?php
            $string = "php Program - the complete SOLUTION for WEB development";

            echo "<p>Original String: $string</p>";

            // Convert lowercase string to uppercase
            $uppercaseString = strtoupper($string);
            echo "<p>Uppercase String: $uppercaseString</p>";

            // Convert uppercase string to lowercase
            $lowercaseString = strtolower($string);
            echo "<p>Lowercase String: $lowercaseString</p>";

            // Convert first character uppercase
            $ucFirstString = ucfirst($string);
            echo "<p>First Character Uppercase: $ucFirstString</p>";

            // Convert first character of all the words uppercase
            $ucWordsString = ucwords($string);
            echo "<p>First Character of All Words Uppercase: $ucWordsString</p>";

            // Get the last 11 characters of string
            $lastCharacters = substr($string, -11);
            echo "<p>Last 11 Characters: $lastCharacters</p>";

            // Replace the first "the" with "best"
            $replacedString = preg_replace('/\bthe\b/', 'best', $string, 1);
            echo "<p>String after replacing 'the' with 'best': $replacedString</p>";
        ?>
    </div>
</body>
</html>
