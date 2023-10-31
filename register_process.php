<?php
$conn = mysqli_connect("localhost", "root", "", "task-manager");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

// Check if the username already exists
$checkQuery = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($result) > 0) {
    echo "User with this username already exists. Please choose a different username. <a href='login.php'>Login</a>";
} elseif (strlen($password) < 8) {
    echo "Password should be at least 8 characters long.<a href='registration.php'> Please try again.</a>";
} else {
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $query = "INSERT INTO users (username, password, name) VALUES ('$username', '$hashedPassword', '$name')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful. <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
