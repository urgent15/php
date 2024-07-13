<!DOCTYPE html>
<html lang="en">
<head>
      <title>SUM OF INDIVIDUAL</title>
</head>
<body>
<form action="?" method="post">
         <label for="ENTER NUMBER">ENTER NO</label>
        <input type="NUMBER" placeholder="Enter a NO" id="num" name="num">
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <H2>
    <?php
     echo"<br><br><br><br><br><br>";
     if ($_POST) 
     {
        $num = $_POST["num"];
       
      }
      
   function sum_of_digits($num){
      $sum = 0;
      for ($i = 0; $i < strlen($num); $i++){
         $sum += $num[$i];
      }
      return $sum;
   }
   print_r("The sum of digits is ");
   echo sum_of_digits($num);
?>   
    </H2>
</body>
</html>
