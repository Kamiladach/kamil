
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Pliki i Foldery - sortowaie</title>
</head>
<body>
 <p>Dodaj katalog</p>
  <form>
      <input type="text" name="folder">
      <input type="submit" name="przyciskF" value="Dodaj katalog">
  </form><hr>
   <?php
    $dir = "./test";
    if (isset($_GET['przyciskF']) && !empty($_GET['folder'])){
        $folder = $_GET['folder'];
       // echo "$folder";
    if (!file_exists($dir."/".$folder)){
        mkdir($dir."/".$folder);
    }else{
        echo "<h4>Folder o nazwie $folder juz istnieje <br> podaj inna nazwe</h4>";
    }
    }



    if (!($folder = opendir($dir))){
        exit("nie mozna otworzyc folderu");
    }else{
        $sortuj = 0;
        $pliki = array();
        $katalogi = array();



        $dane = scandir($dir, $sortuj);
        echo "<ul>";
            foreach ($dane as $wartosc){
                if ($wartosc != '.' && $wartosc != '..')
                if (is_file($dir."/".$wartosc)){
                    $pliki[] = $wartosc;

                }else{
                    $katalogi[] = $wartosc;
                }
            }
        closedir($folder);
         if (isset($_GET['sortuj'])){
                $sortuj = $_GET['sortuj'];
             if ($sortuj == 0){
                 sort($pliki);
                 sort($katalogi);
             }else{
                 rsort($pliki);
                 rsort($katalogi);
             }
         }
        echo "<p>Pliki</p>";
        echo "<ul>";
            foreach($pliki as $wartosc){
                echo "<li>$wartosc</li>";

            }
        echo "</ul><hr>";

        echo "<h3>Katalogi</h3>";
        echo "<ul>";
            foreach ($katalogi as $wartosc){
                echo "<li>$wartosc</li>";
            }
        echo "</ul><hr>";
    }


    ?>
    <a href="2_1_sortowanie.php?sortuj=0">Sortu rosaco</a>
    <a href="2_1_sortowanie.php?sortuj=1">Sortu malejaco</a>
</body>
</html>
