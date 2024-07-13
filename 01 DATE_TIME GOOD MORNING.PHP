<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
date_default_timezone_set("Asia/Kolkata");
echo "The time is " . date("h:i:sa");

$t = date("h:i:sa");
echo "</br>";
if ($t > "11:59:59am") {
  echo "good afternoon";
} elseif($t>"06:00:00pm"){
    echo "good evening";
} 
elseif($t>"12:00:00am"){
    echo "good night";
}else{
    echo "good morning";
}
?>

</body>
</html>     