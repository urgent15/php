<!DOCTYPE html>
<html>
<head>
    <title>FACTORIAL</title>
</head>
<body>
<form action="?" method="post">
        ENTER NUMBER:
        <input type="number" placeholder="ENTER NUMBER" id="num" name="num" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <H2>
        <?php  
         if ($_POST) {
            $num = $_POST["num"]; 
            $fac=1;
            for($i=1;$i<=$num;$i++){
                $fac=$fac*$i;
            }
            echo"Factorial of $num is: $fac";
            }
        
        ?>
    </H2>
    
</body>
</html>
            