<!-- 24.Write a Division table program in php using for loop.  -->

<!DOCTYPE html>
<html>
<head>
    <title>Division Table</title>
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
        table {
            border-collapse: collapse;
            width: 300px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Dividend</th>
            <th>Divisor</th>
            <th>Quotient</th>
            <th>Remainder</th>
        </tr>
        <?php
            $dividend = 50; // You can change the dividend value here
            $divisor = 5;   // You can change the divisor value here

            for ($i = 1; $i <= 10; $i++) {
                $quotient = floor($dividend / $divisor);
                $remainder = $dividend % $divisor;
                echo "<tr>";
                echo "<td>$dividend</td>";
                echo "<td>$divisor</td>";
                echo "<td>$quotient</td>";
                echo "<td>$remainder</td>";
                echo "</tr>";
                $dividend += 10;
            }
        ?>
    </table>
</body>
</html>

