<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/addTask.css">
    <link rel="stylesheet" href="../CSS/alerts.css">
    <script src="../JS/script.js" defer></script>
  </head>
  <body>
    <header>
      <h1>ToDo List</h1>
      <button id="addTaskButton">Add new task</button> 
    </header>

    <?php include "connection_db.inc.php"; ?>

    <?php include "navmenu.inc.php"; ?>

    <?php include "addNewTask.inc.php";?>

    <?php include "tasks.inc.php";?>

    <?php include "alerts.inc.php";?>
    <footer>
      <p>All rights reserved &copy <?php echo date('Y');?></p>
    </footer>
  </body>
</html>
