<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #044f69;
            margin: 0;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        h1 {
            margin-top: 180px;
            font-size: 45px;
        }

        form {
            max-width: 400px;
            margin: 30px auto;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: black;
            font-size: 30px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 18px;
            transition: border-color 0.3s ease;
            color: #000;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <form method="POST" action="login_process.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>