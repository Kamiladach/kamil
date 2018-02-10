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
var elPozycja = document.getElementById("pozycja");
var dlugoscNazwiska, pozycja, color;
var elKolor = document.getElementById("kolor");


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


function blokuj(){
    if(elNazwisko.value.length == 0){
        elSuwak.disabled = true;
        elSuwak.max = elNazwisko.value.length;
        elKomunikat2.innerHTML = elNazwisko.value;

    } else{
            elSuwak.disabled = false;
            elSuwak.max = elNazwisko.value.length;
            elKomunikat2.innerHTML = elNazwisko.value;
}
}

function pozycja(){
    pozycja = elSuwak.value;
    elPozycja.innerHTML = "pozycja suwaka: " + pozycja;
    dlugoscNazwiska = elNazwisko.value.length;
    elSuwak.max = dlugoscNazwiska;
    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.slice(pozycja - 1);
    if(pozycja == 0){
        elKomunikat2.innerHTML = "";
    }else{
        elKomunikat2.innerHTML = nazwisko;
    }

}

function zmienKolor(){
    kolor = elKolor.value;
    elKomunikat2.style.color = kolor;
}

elSuwak.disabled = true;
elSuwak.value = "0";
elPozycja.innerHTML = "pozycja suwaka: " + elSuwak.value;


function wycinanie(){
    minimum = elSuwak.value;

    nazwisko = elNazwisko.value;
    nazwisko = nazwisko.substr(minimum, nazwisko.length);
    elKomunikat2.innerHTML = nazwisko;
}


elSuwak.addEventListener("change", pozycja);
elPrzycisk.addEventListener("click", zamienImie);
elPrzycisk1.addEventListener("click", wycinanie);
elNazwisko.addEventListener("keyup", blokuj);
elKolor.addEventListener("change", zmienKolor);

//**************************************** substr ***********************************************



var zdanie = "Programowanie jest super";
var wycinanie = zdanie.substr(1,2);
console.log(wycinanie); //ro
var wycinanie1 = zdanie.substr(5, zdanie.length -1);
console.log(wycinanie1); //amowanie jest super








