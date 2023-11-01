<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $task_name = htmlspecialchars($_POST['task_name']);
    $task_description = htmlspecialchars($_POST['task_description']);
    $status = htmlspecialchars($_POST['status']);

    $db = new mysqli('localhost', 'root', '', 'task-manager');

    $query = "INSERT INTO tasks (user_id, task_name, task_description, status) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("isss", $user_id, $task_name, $task_description, $status);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Error creating task: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <!-- Add your stylesheets and scripts here -->
</head>
<body>
    <header>
        <h1>Create Task</h1>
    </header>
    <nav>
        <!-- Add navigation links as needed -->
    </nav>
    <section>
        <h2>Task Form</h2>
        <form id="task-form" action="create_task.php" method="POST">
            <div class="form-group">
                <label for="task_name">Task Name:</label>
                <input type="text" id="task_name" name="task_name" required>
            </div>
            <div class="form-group">
                <label for="task_description">Description:</label>
                <textarea id="task_description" name="task_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="in_progress">In Progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Add Task</button>
            </div>
        </form>
    </section>
    <footer>
        &copy; 2023 Cocomore
    </footer>
</body>
</html>
