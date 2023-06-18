<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?php echo asset('/../css/main.css')?>" type="text/css"> 
    <link rel="stylesheet" href="<?php echo asset('./css/alerts.css')?>" type="alerts/css">
    <script src="<?php echo asset('./js/script.js')?>" defer></script>
  </head>
  <body>
    <header>
      <h1>ToDo List</h1>
      <button id="addTaskButton">Add new task</button> 
    </header>

    <?php echo $__env->yieldContent('tasks'); ?>;

    <div id='#navMenuDiv'>
      <ul>
        <li class="active" id="viewAll">All</li>
        <li class="active" id="viewComplited">Complited</li>
        <li class="active" id="viewPending">Pending</li>
      </ul>
    </div>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\to-do-list\to-do-list\resources\views/home.blade.php ENDPATH**/ ?>