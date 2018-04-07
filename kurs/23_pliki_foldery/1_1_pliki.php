<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i Foldery</title>
</head>
<body>
   <?php
    $dir = "./test";
    if (@!($fd = opendir($dir))){
        exit("nie mozna otwoarzyc katalogu $dir");
    }else{
        echo "<ul>";
        while(($plik = readdir($fd)) !== false){
            if ($plik != '.' && $plik != '..')
            echo "<li>$plik</li>";
        }
        echo "</ul>";
    }
    closedir($fd);
    ?>

</body>
</html>
