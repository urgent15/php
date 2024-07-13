<!DOCTYPE html>
<html>
<head>
    <title>Gender Selection Form</title>
</head>
<body>
    <form action="?" method="post">
        NAME:-
        <input type="TEXT" placeholder="Enter YOUR NAME" id="name" name="name" required>
        <br>
        EMAIL:-
        <input type="TEXT" placeholder="Enter YOUR EMAIL" id="email" name="email" required>
        <br>
        GENDER:-
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="others" name="gender" value="Others">
        <label for="others">Others</label>
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['submit'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            echo "Your Name is $name, Your Email is $email, and Your Gender is $gender";
        } 
    } else {
        echo "No Data Found";
    }
    ?>
</body>
</html>
