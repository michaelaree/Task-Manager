document.addEventListener("DOMContentLoaded", function() {
  const taskForm = document.getElementById("task-form");
  const taskNameInput = document.getElementById("task-name");
  const taskDescriptionInput = document.getElementById("task-description");
  const taskList = document.getElementById("task-list");

  taskForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const taskName = taskNameInput.value;
      const taskDescription = taskDescriptionInput.value;

      if (taskName && taskDescription) {
          addTaskToList(taskName, taskDescription);
          taskNameInput.value = "";
          taskDescriptionInput.value = "";
      }
  });

  function addTaskToList(name, description) {
      const li = document.createElement("li");
      li.innerHTML = `<strong>${name}:</strong> ${description}`;
      taskList.appendChild(li);
  }
});
