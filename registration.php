<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>


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

        input[type="submit"]:disabled {
    background-color: #ccc; /* Gray color for disabled button */
    cursor: not-allowed; /* Show the 'not allowed' cursor on disabled button */
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

<script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var username = document.getElementById("username").value;
            var submitButton = document.getElementById("submitBtn");

            // Check if the password is less than 8 characters or username is empty
            if (password.length < 8 || username.length === 0) {
                submitButton.disabled = true;
            } else {
                submitButton.disabled = false;
            }
        }
    </script>

<script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var username = document.getElementById("username").value;
            var submitButton = document.getElementById("submitBtn");

            // Check if the password is less than 8 characters or username is empty
            if (password.length < 8 || username.length === 0) {
                submitButton.disabled = true;
            } else {
                submitButton.disabled = false;
            }
        }
    </script>

</head>
<body>
    <h1>New User Registration</h1>
    <form method="post" action="register_process.php">
        <input type="text" name="username" id="username" placeholder="Username" required oninput="validateForm()"><br>
        <input type="password" name="password" id="password" placeholder="Password" required oninput="validateForm()"><br>
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="submit" id="submitBtn" value="Register" disabled>
    </form>
    <footer>&copy; 2023 Your Company Name. All rights reserved.</footer>
</body>
</html>
