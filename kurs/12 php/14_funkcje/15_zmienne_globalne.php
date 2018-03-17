<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zmienne globalne</title>
</head>
<body>
    <?php
    
    ############################ Zmienne globalne ##########
    $l = 10; //zmienna globalna
    //echo $l;
    
    function zmien(){
        
        //echo "warotsc \$l w funci wynosi: $GLOBALS[l]";
       // echo "warotsc \$l w funci wynosi: {$GLOBALS['l']}";
        echo "warotsc \$l w funci wynosi: ".$GLOBALS['l'];
        //echo "warotsc \$l w funci wynosi: $l";
    }
    zmien();
    echo "<br>";
    echo "wartosc zmiennen pozafunkca wynosi: $l";
    
    echo "<br>";
    ############### zmienne lockalne ####################
    function f(){
        $liczba=20;
        echo "zmienna \$liczaba wynosi wewnatrz funkcji: $liczba";
    }
    f();
   // echo "zmienna \$liczaba wynosi wewnatrz funkcji: $liczba"; // blad
    
    ######################## zmienne statyczne #################
    echo "<br>";
    function suma(){
        $liczba = 4;
        $liczba +=10;
        echo "wynosi \$liczba wynosi: $liczba"."<br>";
    }
    suma();
    suma();
    suma();
    echo "<br>";
    
    function suma1(){
        static $y=4;
        $y+=10;
        echo "wynosi \$y wynosi: $y"."<br>";
    }
    suma1();
    suma1();
    suma1();
    
    
    ################## przekazywanie argumentow ###################
    // przekazywanie argumentow przez wartosc
    
    function dodajTrzy($l){
        $l = $l + 3;
         
    }
    $liczba = 5;
    echo "\$liczba przed wywolaniem funkcji wynosi: $liczba"."<br>";
    
    dodajTrzy($liczba);
    echo "\$liczba po wywolaniu funkcij wynosi zmienna $liczba";
    echo "<br>";
    
    
    function dodajCztery(&$l){
        $l = $l + 4;
         
    }
    $liczba = 5;
    echo "\$liczba przed wywolaniem funkcji wynosi: $liczba"."<br>";
    
    dodajCztery($liczba);
    echo "\$liczba po wywolaniu funkcij wynosi zmienna $liczba";
    echo "<br>";
    
    
    ####################################### argumenty domyslne #########################################
    
    
    function dodaj($x, $y=4){
        return $x +$y;
    }
    $a = 3;
    echo dodaj(2,6);//8
    echo dodaj($a,$a);//6
    echo dodaj($a);//7
    echo "<br>";
    ########################## argumenty i typy danych #############################
    
    function mnozenie(int $x, int $y = 5){
        return $x * $y;
    }
    echo mnozenie(1); //5
    echo mnozenie(3,5); //15
    echo mnozenie(3.5,4); //12
    echo "<br>";
    
####Zad.1
    
   /* Napisz funkcje, ktora bedzie przyjmowala dwa argumenty liczbowe z formularza.
    na eranie pod formulazrem bedzie zwrocony mniejszy z nich np. Namiesza wartosc: ....
    Podnies pierwszy podany arument do potegi drugieo argumentu i wyswietl w formacie: 3 do 10 wynosi...
    */
    
        ?>
        <form method="post">
            <input type="number" name="x">  x <br>      
            <input type="number" name="y">  y <br>     
            <input type="submit" name="przycisk"> 
         </form>
         <?php
    function potega($x, $y){
        return $x**$y;
        
        
    }
    function minimum($x, $y){
        return min($x, $y);
    }
    if (isset($_POST['przycisk']) && !empty($_POST['x']) && (!empty($_POST['y']) || $_POST['y']==0)){
        $x = $_POST['x'];
        $y = $_POST['y'];
        
        echo "$x <sup>$y</sup> wynosi: ".potega($x,$y)."<br>";
        echo "namiejsza wartosc: ".minimum($x,$y)."<br>";
    }
    ?>
</body>
</html>