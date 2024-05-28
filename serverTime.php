<!-- 12.Write a PHP program to show digital clock with the current time on server. -->

<!DOCTYPE html>
<html>
<head>
    <title>Digital Clock</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #282c34;
            color: #61dafb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .clock {
            background-color: #20232a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            font-size: 2em;
        }
        .clock p {
            margin: 0;
        }
    </style>
    <script>
        function updateClock() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'digital_clock.php?get_time=1', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('time').innerHTML = xhr.responseText;
                }
            };
            xhr.send(null);
        }

        setInterval(updateClock, 1000);
        window.onload = updateClock;
    </script>
</head>
<body>
    <div class="clock">
        <p id="time"></p>
    </div>

    <?php
        if (isset($_GET['get_time'])) {
            echo date('H:i:s');
            exit;
        }
    ?>
</body>
</html>