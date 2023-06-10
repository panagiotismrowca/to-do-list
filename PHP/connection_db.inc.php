<?php
    $host = "localhost";
    $dbname = "todo_db";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $e) {
      echo "Αδυναμία σύνδεσης: " . $e;
    }
?>