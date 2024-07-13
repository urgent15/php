<!DOCTYPE html>
<html>
<head>
    <title>FROM_INFORMATION+</title>
</head>
<body>
    <form action="?" method="post">
        NAME:-
        <input type="TEXT" placeholder="Enter YOUR NAME" id="N1" name="N1" required>
        <br>
        EMAIL:-
        <input type="TEXT" placeholder="Enter YOUR EMAIL" id="N2" name="N2" required>
        <br>
        AGE:-
        <input type="NUMBER" placeholder="Enter YOUR AGE" id="N3" name="N3" required>
        <br>
        CITY:-
        <input type="TEXT" placeholder="Enter YOUR CITY" id="N4" name="N4" required>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        echo "No Data Found";
    } else {
        if(isset($_POST['submit'])) {
            $name = $_POST["N1"];
            $email = $_POST["N2"];
            $age = $_POST["N3"];
            $city = $_POST["N4"];
            echo "Your Name is $name, Your Email is $email, Your Age is $age, and Your City is $city";
        } 
    }
    ?>
</body>
</html>
