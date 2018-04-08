<?php
session_start();
if (isset($_GET['wyloguj'])){
  session_destroy();
  header('Location: index.php');
}
?>
