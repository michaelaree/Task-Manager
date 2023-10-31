<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #044f69;
            margin: 0;
            padding: 0;
            font-size: 16px;
            color: #fff;
        }

        .header {
            background-color: #044f69;
            padding: 15px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 250px;

        }

        .content {
            background-color: #fff;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .welcome-section {
            padding: 50px 30px;
            text-align: center;
        }

        .welcome-text {
            font-size: 30px;
            margin-bottom: 100px;
            color: black;
        }

        .cta-buttons {
            margin-top: 20px;
        }

        .cta-buttons li {
            display: inline;
            margin-right: 15px;
        }

        .cta-buttons a {
            background-color: black;
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-buttons a:hover {
            background-color: #044f69;
        }

        .features {
            padding: 50px 20px;
            background-color: #fff;
            text-align: center;
        }

        .feature-item {
            margin-bottom: 20px;
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 10px;
            color: #007bff;
        }

        .feature-title {
            font-size: 25px;
            margin-bottom: 10px;
            color: black;
            font-weight: bold;
        }

        .feature-description {
            font-size: 18px;
            color: black;
        }

        .experience {
            margin-top: 20px;
        }

        .experience h3 {
            color: #044f69;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .experience p {
            margin: 10px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="content">


            <div class="welcome-section">
                <h1 class="welcome-text">Welcome to Our Website</h1>
                <div class="cta-buttons">
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="login.php">Login</a></li>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
