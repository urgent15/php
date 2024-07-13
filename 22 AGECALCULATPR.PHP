<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <form action="" method="post">
        ENTER DOB:
        <input type="date" placeholder="Enter DOB" id="num" name="num" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <h2>
        <?php  
        if ($_POST) {
            $dob = new DateTime($_POST["num"]); 
            $currentDate = new DateTime(); 
            $diff = $currentDate->diff($dob); 
           
            $years = $diff->y;
            $months = $diff->m;
            $days = $diff->d;
            echo "Age is " . $years . " years, " . $months . " months, and " . $days . " days.";
        }
        ?>
    </h2>
</body>
</html>

