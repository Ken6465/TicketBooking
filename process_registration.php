<?php // Show success message and redirect ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - Inception</title>
    <!-- MDBootstrap and FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
            min-height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .success-section {
            background-color: hsla(218, 41%, 35%, 0.8);
            backdrop-filter: saturate(200%) blur(15px);
            border-radius: 15px;
            padding: 2rem;
            color: hsl(218, 81%, 95%);
            margin-top: 4rem;
            margin-bottom: 4rem;
            text-align: center;
        }

        .success-icon {
            font-size: 5rem;
            color: hsl(120, 50%, 50%);
            margin-bottom: 1rem;
        }
    </style>
    <meta http-equiv="refresh" content="3;url=login.php">
</head>
<body>
    <div class="container">
        <div class="success-section">
            <i class="fas fa-check-circle success-icon"></i>
            <h2 class="mb-4">Registration Successful!</h2>
            <p class="mb-4">Your account has been created successfully.</p>
            <p>You will be redirected to the homepage in <span id="timer">3</span> seconds...</p>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script>
        // Countdown timer
        let timeLeft = 3;
        const timerElement = document.getElementById('timer');

        const countdown = setInterval(() => {
            timeLeft--;
            timerElement.textContent = timeLeft;

            if (timeLeft <= 0) {
                clearInterval(countdown);
            }
        }, 1000);
    </script>
</body>
</html>