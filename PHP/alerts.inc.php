<div id='modal'>
  <div class='alert' id='addTaskDiv'>
    <form action='' method='post'>
      <input type='text' class='inp inp--title' id='newTaskName' name='newTaskName' placeholder='Task name' maxlength='40'>
      <div class='divRadio'>
        <input type='radio' class="inp inp--radio" id='taskPriority1' name='taskPriority' value='1'>
        <label for='taskPriority1'>Low Priority</label><br><br>
        <input type='radio' class="inp inp--radio" id='taskPriority2' name='taskPriority' value='2'>
        <label for='taskPriority2'>Medium Priority</label><br><br>
        <input type='radio' class="inp inp--radio" id='taskPriority3' name='taskPriority' value='3'>
        <label for='taskPriority3'>High Priority</label><br><br>
      </div>
      <input type='text' class='inp inp--description' id='newTaskDescription' name='newTaskDescription' placeholder='Task description' maxlength='85'><br>
      <div>
        <input type='submit' class='inp btn btn--confirm' id='confirmNewTaskButton' name='confirm' value='Done'>
        <input type='submit' class='inp btn btn--cancel' id='cancelNewTaskButton' name='cancel' value='Cancel'>
      </div>
    </form> 
  </div>


  <!-- <div id='exitDiv'>
    <p> Αre you sure you want to cancel the task <?php $taskName = $_POST['taskName']?? NULL ; echo $taskName;?> ?</p>
    <button id='exit'> Yes </button>
    <button id='back'> Back </button>
  </div> -->
  
</div>



<!-- PHP for new tasks -->
<?php
if(isset($_POST['confirm'])){
  $newTaskName = $_POST['newTaskName'] ?? 'NULL';
  $newTaskDescription = $_POST['newTaskDescription'] ?? 'NULL';
  $taskPriority = $_POST['taskPriority'] ?? 1;

  $statement = $conn->prepare('INSERT INTO todos (name_todo,priority_todo,decription_todo) VALUES (?, ?, ?)');
  $statement->execute([$newTaskName, $taskPriority, $newTaskDescription]);
}if(isset($_POST['cancel'])){
  $newTaskName = $_POST['newTaskName'] ?? 'NULL';
};;
?>