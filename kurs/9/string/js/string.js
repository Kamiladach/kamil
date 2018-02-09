var text = "Kurs programowania - JS i PHP";
console.log(text);
console.log(text.length); //29

var pierwszyZnak = text.charAt(0);
console.log(pierwszyZnak); //duza litera K

var ostatniZnak = text.charAt(text.length-1);
console.log(ostatniZnak); //p

var kod = text.charCodeAt(0);
console.log(kod); //75

// ***************** zamiana na duze litery ******************************************

var duza = text.toUpperCase();
console.log(duza);


// ***************** zamiana na male litery ******************************************

var mala = text.toLowerCase();
console.log(mala);

//zad 1. zamien imie wprowadzone w formularzu na :
//pierwsza litera duza
//pozostale litery male

var elImie = document.getElementById("imie");
var elPrzycisk = document.getElementById("przycisk");
var elKomunikat = document.getElementById("komunikat");
var elNazwisko = document.getElementById("nazwisko");
var elKomNazwisko = document.getElementById("komNazwisko");
var elSuwak = document.getElementById("suwak");
var elPrzycisk1 =document.getElementById("przycisk1");
var elKomunikat2 = document.getElementById("komunikat2");
var imie;
var nazwisko;
var minimum;
var poprawneImie;
var poprawneNazwisko;


function zamienImie(){
    imie=elImie.value;
    poprawneImie = imie.charAt(0).toUpperCase() + imie.slice(1).toLowerCase();
    nazwisko=elNazwisko.value;
    poprawneNazwisko = nazwisko.charAt(0).toUpperCase() + nazwisko.slice(1).toLowerCase();
    elKomunikat.innerHTML = "Twoje imie: " + poprawneImie;
    elKomNazwisko.innerHTML ="Twoje nazwisko: " + poprawneNazwisko;
    elKomunikat.style.color = "aqua";
    elKomNazwisko.style.color = "red";
}

function wycinanie(){
    minimum = elSuwak.value;

    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.substr(minimum, nazwisko.length);
    elKomunikat2.innerHTML = nazwisko;
}
elPrzycisk.addEventListener("click", zamienImie);
elPrzycisk1.addEventListener("click", wycinanie);


//**************************************** substr ***********************************************

var zdanie = "Programowanie jest super";
var wycinanie = zdanie.substr(1,2);
console.log(wycinanie); //ro
var wycinanie1 = zdanie.substr(5, zdanie.length -1);
console.log(wycinanie1); //amowanie jest super








