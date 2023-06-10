const addButton = document.querySelector("#addButton");
const addTaskDiv = document.querySelector("#addTask");
const cancelButton = document.querySelector("#cancel");

const openNewTaskDiv = () => {
  addTaskDiv.style.display = "block";
}
const closeNewTaskDiv = () => {
  addTaskDiv.style.display = "none";
}

addButton.addEventListener("click",openNewTaskDiv);
cancelButton.addEventListener("click",closeNewTaskDiv);