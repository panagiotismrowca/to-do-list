<?php
  $sql = 'SELECT id_todo,name_todo,decription_todo,priority_todo,status_todo FROM todos;';
  $result = $conn->query($sql);
  $row = $result->fetch();
  
  $row['id_todo'];
  echo var_dump($row['name_todo']);
?>