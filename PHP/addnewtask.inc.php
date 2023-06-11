<div id='addTaskDiv'>
  <form action='' method='post'>
    <input type='text' id='taskName' name='taskName' placeholder='Task name' maxlength='40'><br>
    <input type='text' id='taskDescription' name='taskDescription' placeholder='Task description' maxlength='85'><br>

    <input type='radio' class="taskPriority" id='taskPriority1' name='taskPriority' value='1'>
    <label for='taskPriority1'>Low Priority</label><br><br>
    <input type='radio' class="taskPriority" id='taskPriority2' name='taskPriority' value='2'>
    <label for='taskPriority2'>Medium Priority</label><br><br>
    <input type='radio' class="taskPriority" id='taskPriority3' name='taskPriority' value='3'>
    <label for='taskPriority3'>High Priority</label><br><br>

    <input type='submit' id='doneAddTask' name='add' value='Done'>
    <button id='cancelButton'> Cancel </button>
  </form> 
</div>

<?php
if(isset($_POST['add'])){
  $taskName = $_POST['taskName'] ?? 'NULL';
  $taskDescription = $_POST['taskDescription'] ?? 'NULL';
  $taskPriority = $_POST['taskPriority'] ?? 1;

  $statement = $conn->prepare('INSERT INTO todos (name_todo,priority_todo,decription_todo) VALUES (?, ?, ?)');
  $statement->execute([$taskName, $taskPriority, $taskDescription]);
};
?>