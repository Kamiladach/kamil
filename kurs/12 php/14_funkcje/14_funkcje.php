<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>funkce</title>
</head>
<body>
    <?php
    // scisla kontrola typow
    //declare(strict_types=1);
    function f(){
            echo "Janusz<br>";
        
    }
    f();
    
    function wyswietl($x){
        echo "zmienna wynosi: $x<br>";
    }
    $test=12;
    wyswietl(3);
    wyswietl($test);
    
    
    function suma($x, $y){
        $wynik = $x+$y;
        echo"suma $x i $y wynosi: $wynik<br>";
    }
    
    suma(2,5);
    function suma1($x, $y){
        return $x+ $y;
    }
    echo "suma: ".suma1(3,4)."<br>";
    echo "Srednia: ".suma1(13,7)/2;
    
    function f1(){
        echo "<br>test<br>";
        return;
        echo "Janusz";
    }
    f1();
    
    function calkowita($a){
        return $a;
       
    } 
     echo calkowita(15.5)."<br>";
     $one = calkowita(20.5);
        echo $one;
        echo gettype($one); 
        echo "<br>";
    
    function calkowita1($a):int{
        return $a;
    }
   
    echo calkowita1(15.5)."<br>";
     $two = calkowita1(20.5);
        echo $two;
        echo gettype($two); 
        echo "<br>";
    
    function rzeczywista($x):float{
        return $x;
    }
    echo "<br>";
    echo rzeczywista(3.5);
    $z = rzeczywista(5.55);
    echo gettype($z);
    echo "<br>";
    function nowa(){
        return 1.25;
    }
    echo nowa();
    echo "<br>";
    
    
    ?>

    
</body>
</html>