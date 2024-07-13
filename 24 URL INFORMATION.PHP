<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL SERVER</title>
</head>
<body>
<form action="?" method="post">
       URL INFORMATION:-
        <input type="TEXT" placeholder="Enter a URL" id="url" name="url" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <H2>
        <?php  
         if ($_POST) 
         {
        $url = $_POST["url"];  
        $parsedUrl = parse_url($url);

        print_r($parsedUrl);
        
    }
        ?> 
    </H2>
</body>
</html>


<!-- 31 -->
