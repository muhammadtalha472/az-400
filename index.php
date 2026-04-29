<?php
$title = "Welcome to DevOps Training";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.08);
            padding: 40px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            max-width: 600px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .highlight {
            color: #00d4ff;
            font-weight: bold;
        }

        .btn {
            margin-top: 25px;
            display: inline-block;
            padding: 12px 25px;
            border-radius: 30px;
            background: #00d4ff;
            color: #000;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover {
            background: #00aacc;
            transform: scale(1.05);
        }

        footer {
            margin-top: 20px;
            font-size: 0.8rem;
            opacity: 0.7;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🚀 Welcome to <span class="highlight">DevOps Training</span></h1>

    <p>
        Master modern tools like <span class="highlight">Git, Docker, Kubernetes, CI/CD</span>
        and become a DevOps Engineer.
    </p>

    <p>
        Start your journey towards automation, scalability, and cloud excellence.
    </p>

    <a href="#" class="btn">Get Started</a>

    <footer>
        <?php echo "© " . date("Y") . " Talha Munir | DevOps Journey"; ?>
    </footer>
</div>

</body>
</html>
