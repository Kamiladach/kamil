<?php
    $z1 = 10;
    echo "wartosc zmiennej \$z1 wynosi: $z1 <br>";
    echo "typ danych zmiennej \$z1 ";
    echo gettype($z1); //integer

    $z2 = 5.15;
    echo "<br><br>wartosc zmiennej \$z2 wynosi: $z2 <br>";
    echo "typ danych zmiennej \$z2: ";
    echo gettype($z2); //double
    
    $z3 = 'text';
    echo "<br><br>wartosc zmiennej \$z3 wynosi: $z3 <br>";
    echo "typ danych zmiennej \$z3 ";
    echo gettype($z3); //string

    $z4 = true;
    echo "<br><br>wartosc zmiennej \$z4 wynosi: $z4 <br>";
    echo "typ danych zmiennej \$z4 ";
    echo gettype($z4); //Boolean

    $z5 = array ('bialy', 'czerwony', 'zielony', 'zolty');
    echo "<br><br>wartosc zmiennej \$z5 wynosi:  <br>";
    echo print_r($z5);
    echo "<br>";
    echo "typ danych zmiennej \$z5 ";
    echo gettype($z5); //Boolean
    echo "<br><br>";

#################################################################################
if(is_float($z2)) 
    echo "zmienna \$z2 jest typu zmiennoprzecinkowa";
else
    echo "zmienna \$z2 nie jest typu zmiennoprzecinkowego";
echo "<br>";
if(is_bool($z4)) 
    echo "zmienna \$z4 jest typu boolean";
else
    echo "zmienna \$z4 nie jest typu boolean";
echo "<br>";
if(is_int($z1)) 
    echo "zmienna \$z1 jest typu intier";
else
    echo "zmienna \$z1 nie jest typu integer";
echo "<br>";
if(is_string($z3)) 
    echo "zmienna \$z3 jest typu string";
else
    echo "zmienna \$z3 nie jest typu string";
echo "<br>";
if(is_array($z5)) 
    echo "zmienna \$z5 jest typu tablicowego";
else
    echo "zmienna \$z5 nie jest typu tablicowego";
echo "<br><br>";


?>