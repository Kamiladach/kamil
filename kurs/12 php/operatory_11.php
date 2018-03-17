<?php
    //operatory arytmetyczne
    $x = 2;
    $y = 3;
    $mnozenie = $x * $y; //6
    $potegowanie = $x ** $y; //8
    $potegowanie = 2 ** 10; //1024
    $dzielenie = $x / $y; //0.66666666
    $dzielenie = round($dzielenie,2); //0.6
    $dodawanie = $x + $y; //5
    $odemowanie = $x- $y; //-1
    $modulo = $x % $y;


################ inkrementaca / dekrementacja #####################
    $x = 2;
    
    echo $x++; //2
    echo "<br>";
    echo ++$x; //4
    echo "<br>";
    echo $x; //4
    echo "<br>";
    $y = $x++;
    echo $y;//4
    echo "<br>";
    $y = ++$x;
    echo $y; //6
    echo "<br>";
    echo ++$y; //7
    echo "<br>";
########################## operatory logiczne ######################

//and or xor ! && ||

######    zad. 1  #####
//sprawdz czy w slepie kupisz rower

$sklep = false;
$pieniadze = 1300;
$rower = true;
$hulajnoga = true;

/*if($sklep == 'otwarte' && $pieniadze > 1000 && $rower){
    echo 'Kupiles rower';
}else{
    echo 'idz z buta';
}
*/
####### zad 2 ######
//uzytkownik chce kupic rower lub hulajnoge



if($sklep && $pieniadze > 1400 && ($rower && $hulajnoga)){
    echo 'Kupiles rower i hulajnoge';
}else if($rower && $sklep && $pieniadze > 900)
    echo 'kupiles rower';
else if($hulajnoga && $sklep && $pieniadze > 500)
    echo 'kupiles hulajnoge';

else{ 
    echo 'idz z buta';
}
echo "<br><br>";
######### operatory relacyne ########

// ==, ===, <> !=, !==, >, <,  >=, <=, <=>
$a = 1;
$b = 2;
$c = '1';
$d = 1;

$wynik = $a == $c; //1 , 1 oznacza true
$wynik = $a === $c; //nic nie wyswietla est false
$wynik = $a === $d; //1
$wynik = $a <> $d; //false
$wynik = $a <> $c; //false nie zwraca uwai na typ
$wynik = $a <> $b; //1 czyli prawda
$wynik = $a != $b; //1 czyli prawda
$wynik = $a !== $d; //false
$wynik = $a !== $c; //1
$wynik = $a > $b; //fals
$wynik = $a >= $b; //fals
$wynik = $a < $b; //1
$wynik = $a <= $b; //1
$wynik = $a <= $b; //1





//== rowne
//=== identyczne
// <> rozne
// != rozne
//<=> od php 7 spaceship operator
// -1 oznacza ze pierwsza wartosc jest mniejsza od drugiej
// 0 wartosci sa rowne
// 1 pierwsza wartosc est wieksza od drugie
$a = 10;
$b = 10;
$wynik = $a <=> $b; //-1
echo $wynik;
echo "<br><br>";

########################

$x = 10;
$y = 7;
$z = 5;

$wynik = $x ?? $y ?? $z;
echo $wynik;
echo "<br><br>";
############### operator lancuchowy

$tekst1 = 'jan';
$tekst2 = 'kolwal';
echo $tekst1.' '.$tekst2.'<br>';
echo $tekst1,'jan';
echo "<br><br>";
########### operatory przypisania #######
// =, +=, -=, *=, /=, %=, .=

######### istniea rowniez operatory bitowe #################

$a = 5;
$b = 10;
$a += $b; // $a = $s + $b
$b .= $a; // $b = 10 + 15 = 1015


echo $b;
echo gettype($b);

echo "<br><br>";

########## operator warunkowy #############

$x = 5;
$wynik = ($x > 2)? 'x wieksze od 2':'x nie jest wieksze od 2';

echo $wynik;

echo "<br><br>";
#####################################################################


//operatorzy rzutowania (konwersji typow)
// int integer, float double real, bool boolean, string, array, object, unset

$x = '2';
//$zmienna = (int)$zmienna;
echo gettype($x);//string
echo "<br><br>";
$x = (int)$x;
echo gettype($x); //integer

echo "<br><br>";
$x = (float)$x;
echo gettype($x); //double

echo "<br><br>";
$x = (bool)$x;
echo gettype($x); //boolean

echo "<br><br>";
$x = (array)$x;
echo gettype($x); //array

echo "<br><br>";
$x = (unset)$x;
echo gettype($x); //NULL
echo "<br><br>";
######## priorytet operatorow #######
// && ma wiekszy priorytet niz AND
// || ma wiekszy priorytet niz OR

#################################   konwersja typow ####################################################

//konwersja typow

$napis = 'Janusz';
echo gettype($napis);
$napis = 10; // nieawna zmiana typu danych
echo gettype($napis);
echo "<br><br>";
##################### funkce konwersi ################

//intval(), floatval(), doubleval(), strval(), boolval()


$liczba = 2.5;
//$liczba = (int)$liczba;
$liczba = intval($liczba);
echo gettype($liczba).' '.$liczba;;
echo "<br><br>";
//settype()

$liczba1 = 10.5;
settype($liczba1,"int");
//echo $liczba.gettype($liczba);
echo gettype($liczba1);
echo "<br><br>";
$liczba2 = 5;
settype($liczba2, 'double');
echo gettype($liczba2);
echo "<br><br>";
$liczba3 = 0;
$wynik = settype($liczba3, 'bool');
echo $liczba3; //false










?>