<?php
  session_start();
  if ($_SESSION['uprawnienia'] == 'admin'){
  if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['mail']) && !empty($_POST['imie']) && !empty($_POST['nazwisko'])){

    include_once('./polaczenie.php');
    $login = $polaczenie->real_escape_string(htmlentities($_POST['login']));
    $mail = $polaczenie->real_escape_string(htmlentities($_POST['mail']));
    $imie = $polaczenie->real_escape_string(htmlentities($_POST['imie']));
    $nazwisko = $polaczenie->real_escape_string(htmlentities($_POST['nazwisko']));
    $uprawnienie = $_POST['uprawnienie'];
    $haslo = $login.'@2000';
    switch ($uprawnienie){
      case 'admin':
        $uprawnienie = 1;
        break;
      case 'sekretariat':
        $uprawnienie = 2;
        break;
       case 'uczen':
        $uprawnienie = 3;
        break;
       case 'gosc':
        $uprawnienie = 4;
        break;
    }


    $sql = "insert into administracja values (NULL, '$uprawnienie', '$login', '$mail', '$imie', '$nazwisko', '$haslo', 'aktywny')";





    if (!$polaczenie->connect_error){

      if($rezultat = $polaczenie->query($sql)){
        $_SESSION['blad'] = "dodano prawidlowo uzytkownika: $login";
        header('location: admin.php');
      }else{
        $_SESSION['blad'] = 'bledne zapytanie do bazy';
        header('location: admin.php');
      }




    }else{
      $_SESSION['blad'] = 'bledne polaczenie z bazadanych, nie dodano uzytkownika';
      header('location: admin.php');
    }








  }else{
    header('location: admin.php');
  }
  }else{
    header('location: admin.php');
  }

?>
