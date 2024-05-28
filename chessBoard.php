<!-- 16.Write a PHP program to create Chess board using for Loop. -->

<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .chessboard {
            display: flex;
            flex-wrap: wrap;
            width: 400px;
            height: 400px;
        }
        .square {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .black {
            background-color: #555;
            color: #fff;
        }
        .white {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
            for ($row = 1; $row <= 8; $row++) {
                for ($col = 1; $col <= 8; $col++) {
                    $class = ($row + $col) % 2 == 0 ? "black" : "white";
                    echo "<div class='square $class'>$col$row</div>";
                }
            }
        ?>
    </div>
</body>
</html>
