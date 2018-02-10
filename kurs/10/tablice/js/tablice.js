var tablica = []; //tablica pusta
var zielony = ["zielony", "czerwony", "niebieski"]; //tablica z trzeba elementami
var cyfry1 = [1, 2, 3, 4, 5, 6];
var a = "Janusu";
var b = "Agata";
var c = "Jonasz";
var tab = [a, b, c, "tekst"];
var tab1 = [a, "tekst", 1, "a", 10]

//**********************************

var owoce = ["pomelo", "kiwi", "jablko", "arbuz"];
console.log(owoce);
//document.write(owoce);
var dlugosc = owoce.length;
console.log(dlugosc);

//*********************************** wyswietlenie elementow tablicy   ******************************

var pilkarze = ["Carlos", "Lewandowski", "Messi", "Dudek", "Zidane"];
/*for (var i=0; i< pilkarze.length; i++){
    document.write(pilkarze[i] + " ");
} */

/*
console.log(pilkarze[2]); //Messi
//pierwszy
console.log(pilkarze[0]); //Carlos
//ostatni
console.log(pilkarze[pilkarze.length -1]); //zidane */
for (var i = 0; i < pilkarze.length; i++){
    document.write("pilkasz" + " "  + (i+ 1) + " - " + pilkarze[i] + "<br>");
}

document.write("<li id='kwadrat'>" + " Pierwszy pilkarz w tablicy: " + pilkarze[0] + "</li>");
document.write("<li id='okrag'>" + " Ostatni pilkarz w tablicy: " + pilkarze[pilkarze.length -1] + "</li>" + "<br>");

document.write("<li id='kwadrat'>" + " Pierwszy pilkarz w tablicy: " + pilkarze[0] + "</li>");
document.write("<li id='pilka'>" + " Ostatni pilkarz w tablicy: " + pilkarze[pilkarze.length -1] + "</li>" +"<br><br>");


//****************************************** dodawanie elementow ************************************************

var tabCyfry = [1, 2, 3, 4];
tabCyfry.push(5);
console.log(tabCyfry);


//****************************************** odejmowanie elementow *********************************+
tabCyfry.pop(); // usuniecie 5
tabCyfry.pop(); // usuniecie 4
console.log(tabCyfry); // wyswietli  [1, 2, 3]


//****************************************** sortowanie **********************************************************

var imiona = ["Janusz", "Agata", "Zenon", "Ula", "Andzej"];
console.log(imiona);
var sortImiona = imiona.sort();
console.log(sortImiona);
var reverseImiona = sortImiona.reverse();
console.log(reverseImiona);
//dodanie do tablicy na koncu
reverseImiona.push("Marta");
console.log(reverseImiona);

//dodanie do tablicy na poczatku
reverseImiona.unshift("Monika");
console.log(reverseImiona);


//***** sprawdzenie czy elemet istnieje w tablicy
console.log(reverseImiona.indexOf("Monika")); //0
console.log(reverseImiona.indexOf("Marta")); //6
console.log(reverseImiona.indexOf("xyz")); //-1

var liczba = [2, 10, 1000, 23, 9];
console.log(liczba);
//*****************  sortowanie liczb ********************
var sortLiczby = liczba.sort();
console.log(sortLiczby);

var prawidloweSortLiczby = liczba.sort(function(a,b){  // sortowanie liczb od namnieeszej do najwiekszej
    return a - b;
});
console.log(prawidloweSortLiczby);

///****************************** tablice wielowymiarowe ***********************************

var  dane = [];
dane[0] = ["Jan", "Nowak", "Poznan", "Polska"];
dane[1] = ["Anna", "Nowak", "Gniezno", "Polska"];
dane[2] = ["Pawel", "Kowal", "Poznan"];
console.log(dane[1],[2]);//gniezno

var k, j;
/*for (k=0; k <= dane.length; k++){
    for (j=0; j <= dane[k].length; j++){

        document.write(dane[k][j] + " ");
    }
    document.write("<br>");
}
*/


var elKolor = document.getElementById("kolor");
elKolor.focus();
var elPrzycisk = document.getElementById("przycisk");
var elWyswietl = document.getElementById("wyswietl");
var elWynik = document.getElementById("wynik");

var tabKolory = [];
var daneU = [];
var elImie = document.getElementById("imie");
var elMiasto = document.getElementById("miasto");
var elDodajU = document.getElementById("dodajU");
var elWyswietlU = document.getElementById("wyswietlU");
var elNazwisko = document.getElementById("nazwisko");
var elDivU = document.getElementById("divU");
var elPrzyciskWybor = document.getElementById("przyciskWybor");
var elDivWybor = document.getElementById("divWybor");



console.clear();
function dodajKolor(){
    if(elKolor.value.length != 0){
        tabKolory.push(elKolor.value);
        }
    console.log(tabKolory);

   // elWynik.innerHTML = tabKolory;

   elKolor.value = "";
   // alert("sdsdf");


}
function wyswietlKolory(){
    var kol = "";
    for (var i = 0; i < tabKolory.length; i++){
       kol+="<li>" + tabKolory[i] + "</li>";
 }
    elWynik.innerHTML = kol;
}

function wyswietlUzytkownika (){
   // document.write(daneU.forEach());
    var nazwisko = "";
    for (var i=0; i < daneU.length; i++){
        nazwisko += daneU[i][1] + "<br>"

    }
   elDivU.innerHTML = nazwisko;
}

function wyswietlUzytkownika1 (){
   // document.write(daneU.forEach());
    var nazwisko = "";
    for (var i=0; i < daneU.length; i++){
        nazwisko += daneU[i][1] + '<input type="radio" name="wybor" value="' + i + '">' + "<br>";
    }
    elDivU.innerHTML = '<form name="form1">' + nazwisko + '</form>';
  }
function dodajUzytkownia (){
    daneU[daneU.length] = [elImie.value, elNazwisko.value, elMiasto.value];
    elImie.value = "";
    elMiasto.value = "";
    elNazwisko.value = "";
    elImie.focus();
    console.log(daneU);

}
function wyborU(){
    var k;
    var id;
    id = form1.elements["wybor"].value;
    ///console.log(id);
    k="Imie: " +  daneU[id][0] + "<br>";
    k +="Nazwisko: " +  daneU[id][1] + "<br>";
    k +="Miasto: " +  daneU[id][2] + "<br>";
    divWybor.innerHTML = k;

}

elPrzycisk.addEventListener("click", dodajKolor);
elWyswietl.addEventListener("click", wyswietlKolory);
elDodajU.addEventListener("click", dodajUzytkownia);
elWyswietlU.addEventListener("click", wyswietlUzytkownika1);
elPrzyciskWybor.addEventListener("click", wyborU);

