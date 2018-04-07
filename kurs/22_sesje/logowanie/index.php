<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>logowaie do systemu</h2>
    <?php

    if(isset($_SESSION['blad'])){
        echo $_SESSION['blad'];
    }
    if (isset($_SESSION['zalogowane'])){
        header('Location: ./zalogowane.php');
    }
    ?>
    <form method="post" action="./sprawdz.php">
        <input type="text" name="login" placeholder="login"><br><br>
        <input type="password" name="haslo" placeholder="haslo"><br><br>
        <input type="submit" name="przycisk" value="Zaloguj">
    </form>
</body>
</html>
