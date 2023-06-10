<div id='addTaskDiv'>
  <form action='' method='post'>
    <input type='text' id='taskName' name='taskName' placeholder='Task name'><br>
    <input type='text' id='taskDescription' name='taskDescription' placeholder='Task description'><br>

    <input type='radio' id='taskPriority1' name='taskPriority' value='1'>
    <label for='taskPriority1'>Low Priority</label><br><br>
    <input type='radio' id='taskPriority2' name='taskPriority' value='2'>
    <label for='taskPriority2'>Medium Priority</label><br><br>
    <input type='radio' id='taskPriority3' name='taskPriority' value='3'>
    <label for='taskPriority3'>High Priority</label><br><br>

    <input type='submit' name='add' value='Done'>
  </form> 
</div>

<?php
if(isset($_POST['add'])){
  $taskName = $_POST['taskName'];
  $taskDescription = $_POST['taskDescription'];
  $taskPriority = $_POST['taskPriority'];

  echo  isset($taskName) . $taskDescription . $taskPriority ;


}
?>