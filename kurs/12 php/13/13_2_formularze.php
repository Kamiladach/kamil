<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>FormULARZE</title>
</head>
<body>
    <h3>dane poprane z formularza</h3>
    <?php
    
    if(isset($_GET['przycisk']) && !empty($_GET['imie']) && !empty($_GET['nazwisko']) && !empty($_GET['haslo']) && !empty($_GET['haslo'=='haslo1'])){
        
        
    $imie = $_GET['imie'];
    echo '<font color="blue">'.'imie: '.'</font>'.'<b>'.'<font color="red">'.$imie.'</b>'.'<br>'.'</font>';
    $nazwisko = $_GET['nazwisko'];
    echo '<font color="blue">'.'nazwisko: '.'</font>'.'<b>'.'<font color="red">'.$nazwisko.'</b>'.'<br>'.'</font>';
    $haslo = $_GET['haslo'];
    echo '<font color="blue">'.'haslo: '.'</font>'.'<b>'.'<font color="red">'.$haslo.'</b>'.'<br>'.'</font>';
    $haslo1 = $_GET['haslo1'];
    echo '<font color="blue">'.'haslo1: '.'</font>'.'<b>'.'<font color="red">'.$haslo.'</b>'.'<br>'.'</font>';
    }else{
        //echo 'jestes januszem';
        header('location: 13_1_formularze.php');
    }
    /*}else{
        ?>
        <script>
            
        alert('Jestes Januszem');
    </script>
        <?php
        header('location: 13_1_formularze.php');
    }*/
    ?>
    
</body>
</html>