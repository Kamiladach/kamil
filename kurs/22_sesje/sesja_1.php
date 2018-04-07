<?php
    session_start();
    $_SESSION['imie'] = 'Filip';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sesja 1</title>
</head>
<body>
   <?php
        echo "witamy $_SESSION[imie]";
        if(isset($_SESSION['nazwisko'])){
            echo " ".$_SESSION['nazwisko'];
        }
        echo " na stronie!";
        echo "<br>identyfikator sesji: ".session_id().'<br>';
    ?>
    <a href="sesja_1_1.php">nastepna strona</a><br>
    <a href="sesja_1.php?usunSesje=">Usun sesje</a>
    <?php
        if(isset($_GET['usunSesje'])){
            session_destroy();
        }
    ?>
</body>
</html>
