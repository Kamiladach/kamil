<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tablice</title>
</head>
<body>
    
    <?php
    //tablice ideksowane numerycznie
    
    $kolory = array('bialy', 'zielony', 'czerwony', 'aqua');
    echo "ilosc elemetow w tablicy: ".count($kolory)."<br>";
    echo 'poczatkowa zawortosc tablicy: ';
    $kolory[0] = 'czarny';
    echo "<br>";
    
    
   /* for ($i=0; $i<count($kolory); $i++):
        
        $x = $i + 1;
        echo "Element[$x]: $kolory[$i] <br>";
    endfor;*/
    
    function wyswietl($t){
        for ($i=0; $i<count($t); $i++):
        
        $x = $i + 1;
        echo "Element[$x]: $t[$i] <br>";
    endfor;
    
    }
    
    wyswietl($kolory);
    
    $auta = ['Ferrari', 'Bugatti', 'Lexus'];
    
    wyswietl($auta);
    echo "<br>";
    ################################################# tablice asocjacyne ################
    
    $dane = array(
    'imie'=> 'Janusz',
    'nazwisko'=> 'Nowa',
    'miasto'=> 'Poznan',
    'wiek'=> 18
    );
   // echo $dane[0]; //blad
    echo $dane['imie']."<br>";
    echo "<br>";
    
    $z = <<<TAB
    imie: $dane[imie]
    Nazwisko: $dane[nazwisko]
    Wiek: $dane[wiek]
TAB;
    
    echo nl2br($z);
    echo "<br>";
############################### FOREACH #################################
    echo "FOREACH<br>";
    foreach ($dane as $wartosc){
        echo "warotsc: $wartosc<br>";
    }
    echo "<br>";
    foreach ($dane as $klucz => $wartosc){
        $klucz = ucfirst($klucz);
        echo "$klucz: $wartosc<br>";
    }
    echo "<br>";
  #################################### tablica wielowymiarowa  
    $cyfry = array(
        array(1,2,3,4),
        array(5,6,7),
        array(8),
        array(9,10)
    );
    
    foreach ($cyfry as $wartosc){
        foreach($wartosc as $x){
        echo "$x ";
    }
    echo "<br>";
    }
     echo "<br>";
    ######################################## sortowanie #############################
    
    
    
    $tab = array(10,1,5,7,5,6,3,9);
    
    function w($tab){
    foreach($tab as $w):
        echo "$w ";
    endforeach;
    echo "<br>";    
    }
    
    w($tab);
    //rosnaco
    
    sort($tab);
    w($tab);
    
    //malejaco
    rsort($tab);
    w($tab);
    echo "<br>"; 
    ##############################################################################
    
    
    $tab = array("Julia","Anna", "Tomek", "Martyna");
    
    w($tab);
    sort($tab);
    w($tab);
    
    
######################################  srotowanie tabicy asocjacyjnej  #########################################
   $nazwiska = array(
       'pierwszy' => '2nowak',
       'pierwszy' => 'nowak',
       'drugi' => 'kolwal',
       'trzeci' => 'ananas',
       'czwarty' => 'zajac'
   );
    w($nazwiska);
    asort($nazwiska);
    //arsort($nazwiska);
    //ksort($nazwiska);  //sortue wedlug klucza
    krsort($nazwiska); //sortue wedlu klucza od najmiejszej warotsci
    w($nazwiska);
    
    ################### wyswietlanie tablicy #################
    
    $tab4 = array(2,1,56,3.5,8,'Janusz');
    
    echo "<br>";
    
    var_dump($tab4);

    echo "<br>";
    echo '<pre>';
    print_r($tab4);
    echo '</pre>';
    
    //zad. 1.
    /*uzytkownik z formulaza wysyla dane: imie, nazwisko, miasto, wiek
    zapisz dane w tablicy asocjacyjnej (klucze nazwij jak powyzej)
    utworz funkce zawierajaca heredoc i wyswietlajaca informacje ponizej
    Jestes [imie] [nazwisko] mas [wiek] lat, mieszkasz w [miasto] */
    
    //$doWyswietlania = array(
  /// 'imie' => $toCo w impucie zdefiniowalem,
    
/// );
    
    ?>
     <h3> Zadanie 1.</h3>
    <form>
        <input type="text"  name="imie" placeholder="Imie">
        <input type="text" name="nazwisko" placeholder="Nazwisko">
        <input type="text"  name="miasto" placeholder="Miasto">
        <input type="number"  name="wiek" placeholder="Wiek">
        
        <input type="submit" name="wyswietl">
    </form>
    <?php
    
    $imieP = isset($_GET['imie']) ? $_GET['imie'] : '';
    $nazwiskoP = isset($_GET['nazwisko']) ? $_GET['nazwisko'] : '';
    $miastoP = isset($_GET['miasto']) ? $_GET['miasto'] : '';
    $wiekP = isset($_GET['wiek']) ? $_GET['wiek'] : '';
   
    
    
   /* function K($tablica){
    foreach($tablica as $K):
        echo "$K ";
    endforeach;
    echo "<br>";    
    }
    
    K($tablica);*/
    function wys($imieP,$nazwiskoP,$miastoP,$wiekP){
    echo <<<TAB
    Jestes $imieP $nazwiskoP masz $wiekP lat, mieszkasz w $miastoP
TAB;
        
    }
    
    $tablica = array(
     'imie' => $imieP,
     'nazwisko' => $nazwiskoP,
     'miasto' => $miastoP,
     'wiek' => $wiekP
    );
    
    wys($tablica['imie'],$tablica['nazwisko'],$tablica['miasto'],$tablica['wiek']);
   
    ?>
</body>
</html>