<!DOCTYPE html>
<html>
<head>
    <title>ELCT BILL CALCULATE</title>
</head>
<body>
<form action="?" method="post">
        ENTER UNIT:
        <input type="number" placeholder="Enter UNIT" id="num" name="num" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <H2>
        <?php  
         if ($_POST) {
            $unit = $_POST["num"]; 
            if($unit<=50){
                $bill= $unit*3.50;
                echo "Your bill is $bill";
            }
            
            elseif($unit>=50 && $unit<=100){
                $bill= 50*3.50;
                $rem= $unit-50;
                $bill=$bill+($rem*4);
                echo "Your bill is $bill";

         }
         elseif($unit>=100 && $unit<=200){
            $bill= 50*3.50+100*4;
            $rem= $unit-100;
            $bill=$bill+($rem*5.20);
            echo "Your bill is $bill";

     }
     elseif($unit>=200 && $unit<=250){
        $bill= 50*3.50+100*4+200*5.20;
        $rem= $unit-200;
        $bill=$bill+($rem*6.50);
        echo "Your bill is $bill";

 }
        }
         
        ?> 
    </H2>
</body>
</html>
