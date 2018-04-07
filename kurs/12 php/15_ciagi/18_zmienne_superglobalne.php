<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zmienne super globalne</title>
</head>
<body>
    <?php
    echo $_SERVER['SERVER_PORT']; //80
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']; ///kurs/GitHub/kurs/12 php/15_ciagi/18_zmienne_superglobalne.php
    echo "<br>";
    echo $_SERVER['SERVER_PROTOCOL']; ///HTTP/1.1
    echo "<br>";
    echo $_SERVER['DOCUMENT_ROOT']; ///C:/xampp/htdocs
    echo "<br>";
    
    $plik = $_SERVER['DOCUMENT_ROOT'];
    $plik .= $_SERVER['SCRIPT_NAME'];
    echo $plik."<br>";
    
    
// stale predefinowane
    echo PHP_VERSION."<br>"; //7.2.2
    $ver = PHP_VERSION;
    
    if ($ver >= 7.0){
        echo "Nowa wersja php";
    }else{
        echo "stara wersja php";
    }
    echo "<br>";
    echo PHP_OS;
    echo __LINE__."<br>";
    echo __FILE__."<br>";
    echo __DIR__."<br>";
    
    ?>
</body>
</html>