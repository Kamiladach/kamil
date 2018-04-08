<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Salon pielegnaci</title>
  <link rel="stylesheet" href="salon.css">
</head>
<body>
  <div id="banner">
  SALON PIELĘGNACJI PSÓW I KOTÓW
  </div>
  <div id="lewy">
  SALON ZAPRASZA W DNIACH
  </div>
  <div id="srodkowy">
  <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
  </div>
  <?php
    if (@$polaczenie = mysqli_connect('localhost', 'root', '', 'salon')){
      $zapytanie = "SELECT `imie`, `rodzaj`,`nastepna_wizyta`,`telefon` FROM `zwierzeta` WHERE `nastepna_wizyta`<> 0";

      if ($rezultat = mysqli_query($polaczenie, $zapytanie)){

        while($wiersz = mysqli_fetch_row($rezultat)){
          if ($wiersz[1] == 1){
          echo "pies: $wiersz[0]<br>";
            echo "data nastepnej wizyty: $wiersz[2], telefon wlasciciela: $wiersz[3]<br>";
        }else{
          echo "Kot: $wiersz[0]<br>";
            echo "data nastepnej wizyty: $wiersz[2], telefon wlasciciela: $wiersz[3]<br>";
        }
        }


    }else{
      echo "bledne zapytanie";
    }



    }else{
      echo "Nie polaczyles sie z baza danych salon";
    }
   ?>
  <div id="prawy">
  <h3>USŁUGI</h3>
  <?php
   $zapytanie = "SELECT `nazwa`,`cena` from uslugi";
    if ($rezultat = mysqli_query($polaczenie, $zapytanie)){
      while($wiersz = mysqli_fetch_row($rezultat)){
        echo "$wiersz[0], $wiersz[1]<br>";
      }
    }else{

    }

    mysqli_close($polaczenie);
  ?>
  </div>
</body>
</html>
