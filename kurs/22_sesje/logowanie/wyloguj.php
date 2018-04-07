<?php

    session_start();
if (isset($_GET['wyloguj'])){
    unset($_SESSION['zalogowane']);
    session_destroy();
    header('Location: index.php');
}else{
    header('Location: index.php');
}

?>
