<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Szkola</title>
</head>
<body>
<h3>Logowanie</h3>
<?php
    if (isset($_SESSION['blad'])){
      echo $_SESSION['blad'];
    }
  ?>
 <form action="sprawdz.php" method="post">
  <input type="text" name="login">
  <input type="password" name="pass">
  <input type="submit" name="przycisk">

 </form>
</body>
</html>
