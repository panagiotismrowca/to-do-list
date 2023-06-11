const addTaskButton = document.querySelector('#addTaskButton');
const addTaskDiv = document.querySelector('#addTaskDiv');
const cancelButton = document.querySelector('#cancelButton');
const exitDiv = document.querySelector('#exitDiv');

const openAddTaskDiv = () => {
  addTaskDiv.style.display = 'block';
  addTaskDiv.style.transitionDuration = '300ms';
}
const openExitDiv = () => {
  exitDiv.style.display = 'block';
  exitDiv.style.transitionDuration = '300ms';
}

addTaskButton.addEventListener('click',openAddTaskDiv);
cancelButton.addEventListener('click',openExitDiv);
