const addTaskButton = document.querySelector("#addTaskButton");
const confirmNewTaskButton = document.querySelector('#confirmNewTaskButton');
const cancelNewTaskButton = document.querySelector('#cancelNewTaskButton');
const backButton = document.querySelector('#backButton');

const modal = document.querySelector('#modal');
const addTaskDiv = document.querySelector('#addTaskDiv');
const succDiv = document.querySelector("#succTaskAddition");


const openNewTaskDiv = () => {
  modal.style.display = 'block';
  addTaskDiv.style.display = 'block';
};
const closeNewTaskDiv = () => {
  modal.style.display = 'none';
  addTaskDiv.style.display = 'none';
};


addTaskButton.addEventListener('click',openNewTaskDiv);
confirmNewTaskButton.addEventListener('click', closeNewTaskDiv);