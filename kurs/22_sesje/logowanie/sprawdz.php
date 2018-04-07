<?php
    session_start();
    if (isset($_POST['przycisk']) && !empty($_POST['login']) && !empty($_POST['haslo'])){
         $login = htmlentities($_POST['login']);
         $haslo = htmlentities($_POST['haslo']);
        //echo "$login $haslo";
        if ($login == 'jan' && $haslo == 'tajne'){
            $_SESSION['zalogowane'] = true;
            $_SESSION['login'] = $login;
            unset($_SESSION['blad']);
            header('Location: ./zalogowane.php');
        }else{$_SESSION['blad'] = 'Bledne dane logowania';
        header('Location: index.php');
             }
    }else{
        $_SESSION['blad'] = 'Uzupelnij wszystkie dane logowania';
        header('Location: index.php');
    }
?>
