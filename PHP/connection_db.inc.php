<?php
    $host = "localhost";
    $dbname = "todolist";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $e) {
      echo "Αδυναμία σύνδεσης: " . $e;
    }
?>