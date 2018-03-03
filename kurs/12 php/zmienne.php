<?php
$a = 1;
$_liczba =15;
$liczba2 =10;
$imie_ = "janusz";
$Imie_ = "anna";
$Imię_ = "Tomek"; // dozwolone, ale nie tolerowane przez spoleczenstwo programistow, polskie znaki
echo "Twoje Imie<br>";
echo "Twoje Imie: $imie_<br>";
echo 'Twoje imie: $imie_<br>';

//typ skalarny
//typ boolean

$prawda = true;
$falsz = false;

//typ integer

$calkowita = 50;
$szesnastkowa = 0xA;
$osemkowa = 016;
$binarny = 0b1010;
// echo $binarny; 

//typ float

$zmienna =10.7;
echo "$zmienna<br>";

//skladnia heredoc
$imie = "Filip";
$napis = <<<TEKST
    Mam na imie $imie<br>
TEKST;
echo $napis;


//skladnia nowdoc

$nazwisko ="kowal";
$tekst = <<<'ETYKIETA'
moje nazwisko: $nazwsko

ETYKIETA;

echo $tekst;







?>