<?php
// delete_task.php
if (isset($_POST['id'])) {
    $taskId = $_POST['id'];

    // Perform a database query to delete the task based on $taskId

    echo "Task deleted successfully.";
} else {
    echo "Task ID not provided.";
}
?>
