<!-- 9.Write a php program to display current date and display using getdate() function. -->

<!DOCTYPE html>
<html>
<head>
    <title>Current Date Display</title>
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
        .date-display {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .date-display h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="date-display">
        <h2>Current Date</h2>
        <?php
            $date = getdate();
            $day = $date['mday'];
            $month = $date['mon'];
            $year = $date['year'];
            $weekday = $date['weekday'];
            $monthname = $date['month'];

            echo "<p>Today is $weekday, $monthname $day, $year.</p>";
        ?>
    </div>
</body>
</html>