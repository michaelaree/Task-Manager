<?php
$conn = mysqli_connect("localhost", "root", "", "task-manager");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Add task
if (isset($_POST['add_task'])) {
    $task = $_POST['task'];

    $query = "INSERT INTO tasks (task) VALUES ('$task')";

    if (mysqli_query($conn, $query)) {
        echo "Task added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Mark as complete
if (isset($_POST['mark_complete'])) {
    $task_id = $_POST['task_id'];

    $query = "UPDATE tasks SET completed = 1 WHERE id = $task_id";

    if (mysqli_query($conn, $query)) {
        echo "Task marked as complete.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Edit task
if (isset($_POST['edit_task'])) {
    $task_id = $_POST['task_id'];
    $edited_task = $_POST['edited_task'];

    $query = "UPDATE tasks SET task = '$edited_task' WHERE id = $task_id";

    if (mysqli_query($conn, $query)) {
        echo "Task edited successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Delete task
if (isset($_POST['delete_task'])) {
    $task_id = $_POST['task_id'];

    $query = "DELETE FROM tasks WHERE id = $task_id";

    if (mysqli_query($conn, $query)) {
        echo "Task deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>