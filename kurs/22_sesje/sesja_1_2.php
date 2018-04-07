<?php
    session_start();
unset($_SESSION['imie']);
$_SESSION['nazwisko'] = 'Konwal';
?>


<!DOCTYPE html>
<html lang="p">
<head>
    <meta charset="UTF-8">
    <title>Sesja 1_1</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na ostatniej stronie!<br>
    identyfikatorem sesji: <?php echo session_id();?> <br>
    <a href="sesja_1.php">Poczatkowa strona</a>
</body>
</html>
