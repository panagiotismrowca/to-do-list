<div id="addTask">
  <form action="" method="post">
    <input type="text" id="taskTitle" name="taskTitle" placeholder="Title" ><br>
    <p> Priority:</p>
    <span>
      <input type="radio" id="low" name="priority" value=1>
      <label for="low">Low</label><br>
      <input type="radio" id="medium" name="priority" value=2>
      <label for="medium">Medium</label><br>
      <input type="radio" id="high" name="priority" value=3>
      <label for="high">High</label><br>
    </span>
    <input type="text" id="taskNotes"  name="taskNote"  placeholder="Notes"><br>
    <input type="submit" id="cancel" name='cancel' value="Cancel">
    <input type="submit" id="done" name='done'  value="Done">
  </form>
</div>

<?php
if(isset($_POST['done'])){
  if(isset($_POST['taskTitle'])){
    $taskTitle = $_POST['taskTitle'];
  } else {
    $taskTitle = 'Default';
  }
  if(isset($_POST['priority'])){
    $priority = $_POST['priority'];
  } else {
    $priority = 'Default';
  }

  if(isset($_POST['taskNote'])){
    $taskNote = $_POST['taskNote'];
  } else {
    $taskNote = 'Default';
  }

  $insert = "INSERT INTO todos ('name_todo','priority_todo','decription_todo')";

  $values = "VALUES(";
  if($taskTitle=='Default'){
    $values = $values . $taskTitle . ',';
  }else{
    $values = $values . "'" . $taskTitle . "',";
  }
  if($priority=='Default'){
    $values = $values . $priority;
  }else{
    $values = $values. $priority;
  }
  if($taskNote=='Default'){
    $values = $values . ',' . $taskNote . ")";
  }else{
    $values = $values .",'". $taskNote . "')";
  }

  $sql = $insert . ' ' . $values;
  $conn->query($sql);
};
  ?>