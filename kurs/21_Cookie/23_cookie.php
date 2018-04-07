<?php
 $dni = 30;

if(!isset($_COOKIE['licznik'])){
    $licznik = 1;
}else{
    $licznik = intval($_COOKIE['licznik']);
    $licznik++;
}

setcookie('licznik', "$licznik", time() + 60*60*24*$dni);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>
<body>
   <form action="./23_cookie.php">
       <input type="submit" name="dodaj" value="+">
       <input type="submit" name="usun" value="Usun ciasteczko">

   </form>
    <?php

        if(isset($_GET['usun'])){
            setcookie('licznik', false);
            header('location: ./23_cookie.php');
        }
       // setcookie('imie', 'janusz', time()+15);
        if($licznik == 1){
            echo "liczba odwiedzin w ciau ostatnich $dni dni: <span style=\"color:red\">$licznik </span>raz";

        }else{
            echo "liczba odwiedzin w ciau ostatnich $dni dni:<span style=\"color:red\">$licznik </span>razy";

        }

    ?>
</body>
</html>
