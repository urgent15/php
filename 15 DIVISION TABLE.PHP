<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE
    </title>
</head>
<body>
    <table border=1 width=50%>
        <?php
        echo "<tr>";
        echo " <th> </th>";
        for($i=1;$i<=10;$i++){
            echo " <th> $i </th>";
        }
        
        echo "</tr>";

        for($i=1;$i<=10;$i++){
            echo "<tr>";  
            echo " <th> $i </th>";
            for($j=1;$j<=10;$j++){
                $div= $i/$j;
                $rounded_div = number_format($div, 3);
                echo "<td>$rounded_div</td>";
                
            }
            echo "</tr>";
        }
        ?>

</body>
</html>