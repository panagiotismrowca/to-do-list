<!--
    <h2>AAAAAAAAAAAAAAAAAAAAAAAA</h2>
    <p> SKAADsajusgd </p>
    <span>
      <input type='checkbox' class="inp inp--changestatus" id='changestatusID1' name='changestatus' value='id'>
      <label for='changestatusID1'> DONE </label><br><br>
    </span>
  </span>
</div> -->
<div id='taskList'>
<?php
  $sql = 'SELECT id_todo,name_todo,decription_todo,priority_todo,status_todo FROM todos ORDER BY id_todo DESC LIMIT 12;';
  $result = $conn->query($sql);

  foreach ($result as $row) {
    if($row['priority_todo'] == 2){
      $priority = 'task--medium';
    }else if($row['priority_todo'] == 3){
      $priority = 'task--high';
    }else{
      $priority = 'task--low';
    }
  
    if($row['status_todo'] == 'Completed'){
      $status = 'task--completed';
    }

    $taskName = $row['name_todo'];
    $taskDescription = $row['decription_todo'];

    echo "<div class='task $priority $status'>
    <div>
      <button class='btn btn--completed' name=''> Done </button>
      <button class='btn btn--delete'> Delete </button>
    </div>
    <h2> $taskName </h2>
    <p> $taskDescription <p>
  </div>";
}
;
?>
</div>