<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="p">
<head>
    <meta charset="UTF-8">
    <title>Sesja 2</title>
</head>
<body>
    Witamy <?php echo $_SESSION['imie'];?> na drugiej stronie!<br>
    identyfikatorem sesji: <?php echo session_id();?> <br>
    <a href="sesja_1_2.php">ostatnia strona</a>
</body>
</html>
