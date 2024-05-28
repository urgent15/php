<!-- 3.Design HTML form and retrieve the values in PHP script. -->

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h2>User Information Retrieve Form</h2>
    <form method="POST">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize and retrieve the form data
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST['email']);
            
            // Display the retrieved data
            echo "<h1>Form Submission Details</h1>";
            echo "<p>First Name: $firstname</p>";
            echo "<p>Last Name: $lastname</p>";
            echo "<p>Email: $email</p>";
        } else {
            echo "<h1>Error: Invalid request method.</h1>";
        }
    ?>
</body>
</html>


