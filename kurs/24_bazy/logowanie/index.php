<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Loowanie</title>
</head>
<body>
 <?php
  session_start();
  $_SESSION['zalogowany'] = 0;
  $_SESSION['blad'] = false;
  if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
    if ($polaczenie = mysqli_connect('localhost', 'root', '', 'teb')){
      $login = $_POST['login'];
      $login = htmlentities($login);

      $haslo = $_POST['haslo'];
      $haslo = htmlentities($haslo);

      mysqli_set_charset($polaczenie, "utf8");

      $zapytanie = "SELECT `imie`,`nazwisko`,`miasto` FROM `uzytkownicy`WHERE login='$login' and haslo='$haslo'";
      if ($rezultat = mysqli_query($polaczenie, $zapytanie)){
        $wiersz = mysqli_fetch_assoc($rezultat);
        if ($ile = mysqli_num_rows($rezultat)){
        echo "<h4>Twoje dane </h4>";
        echo "Imie: $wiersz[imie]<br>";
        echo "Nazwisko: $wiersz[nazwisko]<br>";
        echo "Miasto: $wiersz[miasto]<br>";
        $_SESSION['zalogowany'] = 1;
          echo "<a href=\"index.php?wyloguj=\">wyloguj sie</a>";
        }else{
          $_SESSION['zalogowany'] = 0;

        }
      }else{
        $_SESSION['blad'] = "blednie zapytanie";
      }
    }
  }else{
   if (isset($_POST['przycisk'])){
     $_SESSION['blad'] = 'wprowadz wszystkie dane logowania';


     }
    if ($_SESSION['blad']){
      echo $_SESSION['blad'];
    }
  }
  if ($_SESSION['zalogowany'] == 0){
  echo <<<FORM
  <h3>Formularz logowania</h3>
  <form method="post">
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="haslo" placeholder="haslo"><br>
    <input type="submit" name="przycisk" value="Zaloguj sie">
  </form>
FORM;
  }
  ?>
</body>
</html>
