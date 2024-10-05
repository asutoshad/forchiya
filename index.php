<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #ff4081, #2196f3);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        /* Header Section */
        .header {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .header h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #fff;
            font-weight: 300;
        }

        .header .server-time {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Countdown Container */
        .countdown-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        h1 {
            margin-bottom: 20px;
            font-weight: 300;
        }

        #countdown {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .time-box {
            font-size: 2.5rem;
            font-weight: 600;
            padding: 10px;
        }

        #days, #hours, #minutes, #seconds {
            font-size: 3rem;
            display: block;
            margin-bottom: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .time-box {
                font-size: 1.5rem;
            }

            #days, #hours, #minutes, #seconds {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Binod coming for Chiya</h3>
        <?php
            echo "<p class='server-time'>Today Date & Time: " . date("Y-m-d H:i:s") . "</p>";
        ?>
    </div>

    <div class="countdown-container">
        <h1>Countdown Timer</h1>
        <div id="countdown">
            <div class="time-box">
                <span id="days"></span>Days
            </div>
            <div class="time-box">
                <span id="hours"></span>Hours
            </div>
            <div class="time-box">
                <span id="minutes"></span>Minutes
            </div>
            <div class="time-box">
                <span id="seconds"></span>Seconds
            </div>
        </div>
    </div>

    <script>
    // Set the future date to 4 years, 10 months, and 25 days from today (2024-10-05 08:00)
    const futureDate = new Date("2029-08-30T08:00:00");

    function countdown() {
        const now = new Date().getTime();
        const timeDifference = futureDate.getTime() - now;

        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        document.getElementById("days").innerText = days;
        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

        if (timeDifference < 0) {
            clearInterval(interval);
            document.getElementById("countdown").innerHTML = "<h2>Countdown Ended</h2>";
        }
    }

    const interval = setInterval(countdown, 1000);
</script>

</body>
</html>
