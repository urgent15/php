<!-- 13.Write a PHP program that displays a different messages based in time of day. For example page should display "Good Morning" if it is accessed in the morning.  -->

<!DOCTYPE html>
<html>
<head>
    <title>Greeting Based on Time of Day</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .greeting {
            background-color: #282c34;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div class="greeting" id="greeting">
        <?php
            date_default_timezone_set('Your/Timezone'); // Set your timezone
            $hour = date('H');

            if ($hour >= 5 && $hour < 12) {
                $message = "Good Morning";
            } elseif ($hour >= 12 && $hour < 17) {
                $message = "Good Afternoon";
            } elseif ($hour >= 17 && $hour < 21) {
                $message = "Good Evening";
            } else {
                $message = "Good Night";
            }

            echo $message;
        ?>
    </div>
    <script>
        function updateGreeting() {
            var now = new Date();
            var hours = now.getHours();
            var greetingMessage = '';

            if (hours >= 5 && hours < 12) {
                greetingMessage = 'Good Morning';
            } else if (hours >= 12 && hours < 17) {
                greetingMessage = 'Good Afternoon';
            } else if (hours >= 17 && hours < 21) {
                greetingMessage = 'Good Evening';
            } else {
                greetingMessage = 'Good Night';
            }

            document.getElementById('greeting').innerText = greetingMessage;
        }

        // Update the greeting message every hour
        setInterval(updateGreeting, 3600000);
        window.onload = updateGreeting;
    </script>
</body>
</html>