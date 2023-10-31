<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
    color: #333;
}

header {
    background-color: #044f69;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    font-weight: bold;
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
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
}

.hero {
    background-color: #044f69;
    color: #fff;
    text-align: center;
    padding: 50px 0;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: #044f69;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    color: #fff;
    font-size: 25px;
}

.form-group {
    margin-bottom: 20px;
}

form input, form textarea {
    width: calc(100% - 20px);
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    
}

form button {
    background-color: white;
    color: black;
    border: none;
    padding: 10px 20px;
    font-size: 19px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

form button:hover {
    background-color: #0056b3;
}

.task-list {
    margin-top: 30px;
}

.task-list h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

  </style>
</head>
<body>
<div class="hero">
        <h1>Welcome to  Task Manager</h1>

    

    </div>
    <header>
        <nav>
            <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <h2>New Task</h2>
        <form id="task-form">
            <div class="form-group">
                <label for="task-name">Task Name:</label>
                <input type="text" id="task-name" required>
            </div>
            <div class="form-group">
                <label for="task-description">Description:</label>
                <textarea id="task-description" required></textarea>
            </div>
            <button type="submit">Add Task</button>
        </form>
        <div class="task-list">
            <h2>Task List</h2>
            <ul id="task-list"></ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
