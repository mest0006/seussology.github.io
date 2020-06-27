<?php
$dsn = 'mysql:host=localhost;dbname=seussology';
$user = 'root';
$pass = 'root';

try {
  $db =  new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
  print $e->getMessage() . "<br/>";
  die();
}
if ($db) {
  echo 'database connected';
}