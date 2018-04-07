<?php
    session_start();
if (!isset($_SESSION['zalogowane'])){
    header('Location: ./index.php');
}
if (!isset($_COOKIE['wizyta'])){
        $wizyta = 'Witaj miszczu pierwszy raz na moje stronie<br><br>';
    }else{
        $wizyta = 'Wita miszczu ponownie na mojej stronie<br><br>';
    }

    setcookie('wizyta', true, time()+60*60*24*365*10);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zalogowany</title>
</head>
<body>
    <h2>Witaj
    <?php
    echo $_SESSION['login'];
        ?>
    na stronie!</h2><?php
    echo $wizyta;
    ?>
    <a href="wyloguj.php?wyloguj=">wyloguj</a>
</body>
</html>
