<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i Foldery - sortowaie</title>
</head>
<body>
   <?php
    $dir = "./test";
    if (!($folder = opendir($dir))){
        exit("nie mozna otworzyc olderu");
    }else{
        $sortuj = 0;
            if (isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
            }
        $dane = scandir($dir, $sortuj);
        echo "<ul>";
            foreach ($dane as $wartosc){
                if ($wartosc != '.' && $wartosc != '..')
                echo "<li>$wartosc</li>";
            }
        echo "</ul>";
    }

    closedir($folder);
    ?>
    <a href="1_2_pliki.php?sortuj=0">Sortu rosaco</a>
    <a href="1_2_pliki.php?sortuj=1">Sortu malejaco</a>
</body>
</html>
