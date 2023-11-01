document.addEventListener("DOMContentLoaded", function () {
    const taskForm = document.getElementById("task-form");
    const taskList = document.getElementById("task-list");

    // Function to fetch tasks from the server and display them
    function fetchTasks() {
        // Use AJAX to fetch tasks from the server
        // ...

        // For demonstration purposes, let's assume tasks are fetched as an array of objects
        const tasks = [
            { id: 1, name: "Task 1", description: "Description for Task 1" },
            { id: 2, name: "Task 2", description: "Description for Task 2" }
        ];

        // Clear the task list before adding tasks
        taskList.innerHTML = "";

        // Iterate through the tasks and add them to the task list
        tasks.forEach(task => {
            const listItem = document.createElement("li");
            listItem.textContent = `${task.name}: ${task.description}`;

            // Add edit and delete buttons (you'll need to implement their functionality)
            const editButton = document.createElement("button");
            editButton.textContent = "Edit";
            editButton.addEventListener("click", () => editTask(task.id));

            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Delete";
            deleteButton.addEventListener("click", () => deleteTask(task.id));

            listItem.appendChild(editButton);
            listItem.appendChild(deleteButton);
            taskList.appendChild(listItem);
        });
    }

    // Function to handle form submission
    taskForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const taskName = document.getElementById("task-name").value;
        const taskDescription = document.getElementById("task-description").value;

        // Use AJAX to send the task data to the server for storage
        // ...

        // For demonstration purposes, fetch tasks again after adding a new task
        fetchTasks();
    });

    // Function to handle editing a task (you need to implement this)
    function editTask(taskId) {
        // Implement edit task functionality here
        // ...
    }

    // Function to handle deleting a task (you need to implement this)
    function deleteTask(taskId) {
        // Implement delete task functionality here
        // ...
    }

    // Fetch tasks when the page loads
    fetchTasks();
});
