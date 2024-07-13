<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOWEL COUNT</title>
</head>
<body>
<form action="?" method="post">
         <label for="ENTER WORD">ENTER WORD</label>
        <input type="TEXT" placeholder="Enter a WORD" id="t1" name="t1">
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <H2>
    <?php
     echo"<br><br><br><br><br><br>";
     if ($_POST) 
     {
        $text = $_POST["t1"];
        $lowercase=strtolower($text);
       echo "the number of count of the vowel string". countvowel($lowercase);
       
      }
      function countvowel($text){
        $vowel=["a","e","i","o","u"];
        $len=strlen($text);
        $count=0;
        for($i=0;$i<$len;$i++){
            if(in_array($text[$i],$vowel)){
                $count++;
                echo "$text[$i]. the position is .$i.</br>";
            }
            
           
        }
        return $count;
      }
    ?>
    </H2>
</body>
</html>