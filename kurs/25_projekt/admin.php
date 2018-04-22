<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Panel administracyjny</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script src="js/jQuery.js"></script>
</head>
<body>
<a href="wyloguj.php?wyloguj=1">Wylogu sie</a><br><br>
 <?php
  if ($_SESSION['uprawnienia'] == 'admin'){
    include_once('polaczenie.php');
    if (!$polaczenie->connect_error){
      $sql = "SELECT * FROM `administracja`";
      if ($rezultat = $polaczenie->query($sql)){
        echo <<<TABELA
        <table id="tabela1">
          <tr>
            <th>Id</th>
            <th>Uprawnienie</th>
            <th>Login</th>
            <th>Mail</th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>Hasło</th>
            <th>Aktywny</th>
            <th>usun uzytkownika</th>
            <th>edytuj uzytkownika</th>
          </tr>
TABELA;
        while($wiersz = $rezultat->fetch_assoc()){
          echo <<<WIERSZ
       <tr>
          <td>$wiersz[idAdministracja]</td>
          <td>$wiersz[uprawnienieId]</td>
          <td>$wiersz[login]</td>
          <td>$wiersz[mail]</td>
          <td>$wiersz[imie]</td>
          <td>$wiersz[nazwisko]</td>
          <td>$wiersz[haslo]</td>
          <td>$wiersz[aktywny]</td>
          <td><a href="usun.php?usun=$wiersz[idAdministracja]">usun</a></td>
          <td><a href="admin.php?edytuj=$wiersz[idAdministracja]">edytuj</a></td>
       </tr>
WIERSZ;
        }
        echo "</table>";
        if(isset($_GET['edytuj'])){
          $id = $_GET['edytuj'];
          $sql = "select * from administracja where idAdministracja = '$id'";
          $rezultat = $polaczenie->query($sql);
          $wiersz = $rezultat->fetch_assoc();
          echo "<table>";
          echo "<h2>edycja uzytkownika</h2>";
        echo <<<EDYCJA
        <form method="post" action="./edytuj.php">
          identyikator uzytkownika: $wiersz[idAdministracja], login: $wiersz[login]<br><br>
          <input type="hidden" name="id" value="$wiersz[idAdministracja]">
          <select name="uprawnienie">
         <option>gosc</option>
         <option>admin</option>
         <option>sekretariat</option>
         <option>uczen</option>
        </select><br><br>
          <input type="text" name ="login" value=$wiersz[login]></input><br><br>
          <input type="text" name ="mail" value=$wiersz[mail]></input><br><br>
          <input type="text" name ="imie" value=$wiersz[imie]></input><br><br>

          <input name = "nazwisko" type = "text" value="$wiersz[nazwisko]"><br><br>
          <input type="password" name="haslo" value=$wiersz[haslo]></input><br><br>
          <select name="aktywny">
        <option>aktywny</option>
        <option>nieaktywny</option>
        <option>usuniety</option>
        <option>zablokowany</option>
        </select><br><br>
          <input type="submit" name="edytuj" value="zatwierdz">
         </form>

EDYCJA;
          echo "</table>";
           }
      }else{
        echo 'Błędne zapytanie do bazy danych';
      }
    }else{
      $_SESSION['blad'] = 'Błędne  połączenie z bazą danych';
      header('location: index.php');
    }
  }else{
    header('location: index.php');
  }
?>
<br><hr><br>
<div>
  <?php
  echo $_SESSION['blad'];
  ?>
</div>
<fieldset id="dodaj">
<legend>Dodawanie użytkownika</legend>
<form method="post" action="./dodaj.php">
  <select name="uprawnienie">
    <option>gosc</option>
    <option>admin</option>
    <option>sekretariat</option>
    <option>uczen</option>


  </select><br><br>
  <input type="text" name="login" placeholder="login"><br><br>
  <input type="mail" name="mail" placeholder="mail"><br><br>
  <input type="text" name="imie" placeholder="imie"><br><br>
  <input type="text" name="nazwisko" placeholder="nazwisko"><br><br>
  <select name="aktywny">
    <option>aktywny</option>
    <option>nieaktywny</option>
    <option>usuniety</option>
    <option>zablokowany</option>
  </select><br><br>
  <input type="submit" value="Dodaj użytkownika" name="przycisk">
</form>
</fieldset>
</body>
</html>
