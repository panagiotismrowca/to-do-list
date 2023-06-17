<div id='taskList'>
<?php
  $sql = 'SELECT id_todo,name_todo,decription_todo,priority_todo,status_todo FROM todos ORDER BY id_todo DESC LIMIT 12;';
  $result = $conn->query($sql);

  foreach ($result as $row) {
    if($row['priority_todo'] == 2){
      $priority = 'task--medium';
    } else if($row['priority_todo'] == 3){
      $priority = 'task--high';
    } else{
      $priority = 'task--low';
    }
  
    if($row['status_todo'] == 'Completed'){
      $status = 'task--completed';
    } else {
      $status = 'task--pending';
    };

    $taskName = $row['name_todo'];
    $taskDescription = $row['decription_todo'];
    $taskId = $row['id_todo'];

    echo "<div class='task $priority $status'>
    <form action='' method='post'>";
      if($status!='task--completed'){ echo "<button type='submit' class='btn btn--completed' name='doneTask' value='$taskId'>Done</button><br>";};
    echo "<button type='submit' class='btn btn--delete' name='deleteTask' value='$taskId'>Delete</button>
    </form>
    <h2> $taskName </h2>
    <p> $taskDescription </p>
  </div>";
}
;

if(isset($_POST['deleteTask'])){
  $taskId = $_POST['deleteTask'];
  $sql = "DELETE FROM todos WHERE id_todo = '$taskId';";
  $conn->query($sql);
  echo "<meta http-equiv='refresh' content='0'>";
}

if(isset($_POST['doneTask'])){
  $taskId = $_POST['doneTask'];
  
  if($status == 'task--completed'){
    $sql = "UPDATE todos SET status_todo = 'Pending' WHERE id_todo = $taskId;";
  } else if($status == 'task--pending') {
    $sql = "UPDATE todos SET status_todo = 'Completed' WHERE id_todo = $taskId;";
  }
  $conn->query($sql);
  echo "<meta http-equiv='refresh' content='0'>";
}
?>
</div>
