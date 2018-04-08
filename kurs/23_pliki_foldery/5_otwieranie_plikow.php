<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Otwieranie Plikow</title>
</head>
<body>
 <?php
    $dir = "./test";
    $plik = "kurs.txt";
  if (isset($_GET['przycisk'])){
    $nowyTekst = $_GET['area'];
    //echo $nowyTekst;

   // if ($fd=fopen($dir."/".$plik,'wb')){    //nadpisue
   if ($fd=fopen($dir."/".$plik,'a')){   //dopisue
      if (fwrite($fd, $nowyTekst) === false){
        echo "blad zapisu";
      }else{
        echo "plik zapisany poprawnie";
      }
      fclose($fd);
    }else{
      echo "nie mozna otworzyc pliku o nazwie $plik";
    }
  }

  //###########################

  echo "wolne miesce na partyci: ";  //bajty
  $wolneMiejsce = round(disk_free_space("/") / (1024 * 1024),2);
  echo $wolneMiejsce."MiB";
  echo "<br>pojemnosc dysku: ";
  $dysk = round(disk_total_space("/") / (1024**3),2);
  echo "$dysk GiB<br>";

  ### otwieranie i wyswietlanie pliku w polu

  if (!$fd = fopen($dir."/".$plik, 'r')){
    echo "nie mozna otowrzyc pliku";
  }else{
    $rozmiar = filesize($dir."/".$plik);
    //echo "$rozmiar Bajty";
    $text = fread($fd, $rozmiar);
    fclose($fd);

  }

  ?>
  <form>
    <textarea name="area" cols="40" rows="15"> <?php
     echo $text;
    ?></textarea><br>
    <input type="submit" name="przycisk" value="zapisz">
  </form>
</body>
</html>
