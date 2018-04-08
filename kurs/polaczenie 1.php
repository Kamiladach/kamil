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
      
      
      
      
      mysqli_close($polaczenie);
    }else{
      echo "Nie polaczyles sie z baza danych salon";
    }
   ?>
  <div id="prawy">
  <h3>USŁUGI</h3>
  </div>
</body>
</html>