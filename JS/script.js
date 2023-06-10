const addTaskButton = document.querySelector('#addTaskButton');
const addTaskDiv = document.querySelector('#addTaskDiv');

const openAddTaskDiv = () => {
  addTaskDiv.style.display = 'block';
}

addTaskButton.addEventListener('click',openAddTaskDiv);
