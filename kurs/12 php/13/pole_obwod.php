<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form method="get">
      <input type="number" name="wysokosc">wrtosc x<br>
      <input type="number" name="dluosc">warosc y<br>
      
      <input type="radio" name="cos" value="x" checked>Pole
      <input type="radio" name="cos" value="y">Obwod<br>
      
      <input type="submit" name="przycisk" value="wyswietl wynik">
  </form>
 
   <?php
       require ('pole_obwod_1.php');
  
    ?>
    
</body>
</html>