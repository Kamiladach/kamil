<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form method="get" action="./13_3_formularze.php">
      <input type="text" name="login">
      <input type="password" name="pass"><br>
      
      <input type="radio" name="kolor" value="b">bialy
      <input type="radio" name="kolor" value="czer">czerwony
      <input type="radio" name="kolor" value="cz">czarny
      <input type="submit" name="przycisk" value="wyslij">
  </form>
 
   <?php
       // echo "witaj {$_get['login']}";
    if(isset($_GET['przycisk']) && !empty($_GET['login']) && !empty($_GET['pass'])){
        $login= $_GET['login'];
        $pass = $_GET['pass'];
    echo "witaj $login <br> Twoe haslo: $pass";
      if (isset($_GET['kolor'])){
          $kolor = $_GET['kolor'];
          switch ($kolor){
              case 'b':
                  $kolor= "Bialy";
                  break;
              case 'czer':
                  $kolor = "Czewrony";
                  break;
              case 'cz':
                  $kolor = "Czarny";
                  break;
          }
          echo "<br>Twoj ulubiony kolor: $kolor";
      }
    }
    
    ?>
    
</body>
</html>