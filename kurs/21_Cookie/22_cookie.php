<?php
if(!isset($_COOKIE['szkokla'])):
        setcookie('szkokla', 'TEB');
    $komunikat = 'cookie o nazwie szkola nie istnieje';
    else:
    $komunikat = 'cookie o nazwie szkola jest ustawione<br>';
    $komunikat .= "jego zawartosc to: ".$_COOKIE['szkola'];
    endif;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
    <?php
       // setcookie('imie', 'janusz', time()+15);
    echo $komunikat;

    ?>
</body>
</html>
