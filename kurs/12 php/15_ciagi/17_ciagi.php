<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ciagi znakowe</title>
</head>
<body>
   <?php
        $liczba = 10;
        $ciag = 'test';
        $wiek = 25;
    
        $text1 = "\$iczba wynosi: $liczba";
        $text2 = "\$iczba wynosi: $liczba";

    //heredoc
        $text3 = <<<"ID"
        masz $wiek lat
ID;

        echo $text3;
    //nowdoc
    
        $text4 = <<<'TEKST'
        masz $wiek lat
TEKST;
        echo $text4;
    echo <<<TEST
    Janusz $wiek
    
TEST;
    
    $s1 = 'abc';
    $s2 = 'def';
    
    //$s3 = $s1 +$s2;  //blad
    //echo $s3; //Blad
    $s3 = $s1.$s2;
    echo $s3;
    echo "<br>";
   // szybkosc wysweitlania ciagow znajowych;
// heredoc ze zmienna (najszybsza), cudzyslow, heredoc bezposrednio, apostrow, przecinek(5 krotnie wolniesza niz pozostale).
    ?>
    
    <form>
        <input type="text" name="kraj">
        <input type="number" name="wiek" placeholder="wiek">
        <input type="text" name="imie" placeholder="imie">
        <input type="submit" name="przycisk">
    </form>
    <?php
    
    if(isset($_GET['kraj'])){
        $panstwo = $_GET['kraj'];
    }else{
        $panstwo = 'Brak';
        
    }
    
    echo "Two kraj: $panstwo<br>";
    $wiek = $_GET['wiek'] ?? 'brak'; // dziala zamias else w if a wzye  znacznik ??
    echo "Twoj wiek: $wiek";
    
    $imie = isset($_GET['imie']) ? $_GET['imie'] : 'brak imienia'; //jak istnieje zmiena imie to ja przypisz w przeciwnym razie brak imienia
    //$imie = isset($_GET['imie']) ?? $_GET['imie'] ?? 'brak imienia'; //jak istnieje zmiena imie to ja przypisz w przeciwnym razie brak imienia
    
    echo "<br> Twoje imie: $imie";
    
    echo "<br>";
    //spaceship
    $a = 'a';
    $b = 'b';
    
    echo $a <=> $b; //-1
    echo 'c' <=> 'c'; //0
    echo 'd' <=> 'c'; //1
    
    //grawis, lewy apostrof
    
   // $polecenie = `dir /ah`;
   // echo $polecenie; `attrib -h 'sciezka jakieos ppliku np 18_ i zostanie ukryty na serwerze';
   // $polecenie = `echo anusz > tessssssssssssst.txt`;
   // echo "<pre> $polecenie </pre>";
    
    
    ########################    nl2br() ###################################
    
    $wiersz = <<<ID
    man
    na imie
    Janusz
ID;
    echo "<h3> przed uzyciem funkci nl2br:</h3>";
    echo $wiersz;
    echo "<h3>po uzyciu funkcji nl2br:</h3>";
    echo nl2br($wiersz);
    
    
    ######################### funcje zmieniajace wielkosc liter ###############
    
    $ciag = "maM nA iMie jAnUsZ";
    echo "<br>$ciag";
    echo "<br>";
    $male = strtolower($ciag);
    $duze = strtoupper($ciag);
    $pierwszaDuza = strtolower($ciag);
    $pierwszaDuza = ucfirst($pierwszaDuza);
    $wyrazy = ucwords($pierwszaDuza);
    echo $male;
    echo "<br>";
    echo $duze;
    echo "<br>";
    echo $pierwszaDuza;
    echo "<br>";
    echo $wyrazy;
    //zad 1.
    
   /* Uzytkownik podaje w formularzu swoje imie i nazwisko, 
    zamien wszystkie dane na male litery a pierwsza na duza litere. 
    Zabezpiscz przed brakiem podania danych, 
    Zabezpiecz przed bledymi danymi w polu text patern. 
    Ogranisz wprowadzanie danych do liter w imieniu (male lub duze max 20 znaow). 
    Ogranicz wprowadzanie danych do liter i myslinia w nazwisku (male lub duze) max 40 znakow;
    Wyswietl w formacie: imie: ......., nazwisko:...... np. Imie: Jan, Nazwisko: Kowal. */
    
    ?>
    <h3> Zadanie 1.</h3>
    <form action="./17_ciagi.php" method="post">
        <input type="text"  name="imie1" placeholder="Imie" pattern="([a-z]|[A-Z]){2,20}">
        <input type="text" name="nazwiso1" placeholder="Nazwisko" pattern="([a-z]|[A-Z]){2,20}(-{1})([a-z]|[A-Z]){2,20})?">
        <input type="submit" name="wyswietl">
    </form>
    <?php
    
    $imieP = isset($_POST['imie1']) ? $_POST['imie1'] : '';
    $nazwiskoP = isset($_POST['nazwiso1']) ? $_POST['nazwiso1'] : '';
    $imieMale = strtolower($imieP);
    $imieMale = ucfirst($imieMale);
    $nazwisoMale = strtolower($nazwiskoP);
    $nazwisoMale = ucfirst($nazwisoMale);
    
    echo "<br>Imie: $imieMale <br> Nazwiso: $nazwisoMale";
    
    
    ?>
</body>
</html>