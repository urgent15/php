<!DOCTYPE html>
<html> 
<head> 
<title>CHESEBOAR5D</title>

</head>
<body> 
<table width="270px" border="2px">
<form action="?" method="post">
        <input type="number" placeholder="Enter a number" id="num" name="num">
        <br>
        <button type="submit">Submit</button>
    </form> 
<?php
if ($_POST){
    $num = $_POST["num"];
for($row=1; $row<=$num; $row++)
{
    echo "<tr>";
    
    for($col=1; $col<=$num; $col++){
    
        $total = $row + $col;
        
        
        if($total % 2 == 0)
        {
    
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
        }
        else
        {
        
            echo "<td height=30px width=30px bgcolor=#000000></td>";
        }
    }
    
    echo "</tr>"; 
}
}
?>
</table>
</body>
</html>                 