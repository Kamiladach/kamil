
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
      <p>Dodaj plik</p>
      <input type="text" name="plik">
      <input type="submit" name="przyciskP" value="Dodaj Plik">

  </form><br><hr>
   <?php
    $dir = "./test";
    #### usuwnie plikow
    if (isset($_GET['usunP'])){
        $usunP = $_GET['usunP'];
        //echo $usunP;
        if (file_exists($dir."/".$usunP))
        unlink($dir."/".$usunP);
    }
    #### usuwanie Katologow

    if (isset($_GET['usunK'])){
        $usunK = $_GET['usunK'];
        //echo $usunK;
        if (file_exists($dir."/".$usunK))
        rmdir($dir."/".$usunK);
    }
    // tworzenie katalogow
    if (isset($_GET['przyciskF']) && !empty($_GET['folder'])){
        $folder = $_GET['folder'];
       // echo "$folder";
    if (!file_exists($dir."/".$folder)){
        mkdir($dir."/".$folder);
    }else{
        echo "<h4>Folder o nazwie $folder juz istnieje <br> podaj inna nazwe</h4>";
    }
    }
    // tworzenie katalogow
    if (isset($_GET['przyciskP']) && !empty($_GET['plik'])){
        $plik = $_GET['plik'];
    if (!file_exists($dir."/".$plik)){
        $fd = fopen($dir."/".$plik, 'w');
        if (file_exists($dir."/".$plik)){
            echo "<h4>Dodano plik o nazwie: $plik</h4>";
        }
        fclose($fd);
    }else{
        echo "<h4>Plik o nazwie $plik juz istnieje <br> podaj inna nazwe</h4>";
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

        #### wyswietlanie pliow
        echo "<p>Pliki</p>";
        echo "<ul>";
            foreach($pliki as $wartosc){
                echo "<li>$wartosc <a href=\"4_tworzenie_plikow.php?usunP=$wartosc\">Usun</a></li>";

            }
        echo "</ul><hr>";
        #### wyswietlanie katalow
        echo "<h3>Katalogi</h3>";
        echo "<ul>";
            foreach ($katalogi as $wartosc){
                echo "<li>$wartosc <a href=\"4_tworzenie_plikow.php?usunK=$wartosc\">Usun</a></li>";
            }
        echo "</ul><hr>";
    }


    ?>
    <a href="4_tworzenie_plikow.php?sortuj=0">Sortu rosaco</a>
    <a href="4_tworzenie_plikow.php?sortuj=1">Sortu malejaco</a>
</body>
</html>
