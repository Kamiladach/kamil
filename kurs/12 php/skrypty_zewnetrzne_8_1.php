<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Skrypty zewnetrzne</title>
</head>
<body>
    <?php
        echo 'tresc pierwszego piku:<br>';
        require('skrypty_zewnetrzne_8_2.php');
        echo '<br>tresc drugiego pliku:<br>';
        include('skrypty_zewnetrzne_8_3.php');
    ?>
</body>
</html>