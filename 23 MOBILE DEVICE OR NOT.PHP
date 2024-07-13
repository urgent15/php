<?php
//28

// print_r($_SERVER);

//29
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$res=$_SERVER['REMOTE_ADDR'];
if($iphone || $android || $ipad==true){
    echo "remote device is mobile device".$res;
}
else{
    echo "remote device is not mobile device".$res;
}
?>