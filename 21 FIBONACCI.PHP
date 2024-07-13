<!DOCTYPE html>
<html>
<head>
    <title>FIBONACCI</title>
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
        $a = 0;
        $b = 1;
        
        if ($num == 0){
            echo $a;
        } elseif ($num == 1) {
            echo $b;
        } else {
            echo "The fibonaci series is " . $a . ", " . $b; 
            
            for ($i = 2; $i < $num; $i++) {
                $c = $a + $b;
                echo ", " . $c;
                $a = $b;
                $b = $c;
            }
        }
    }
?>

        

</H2>
</body>
</html>