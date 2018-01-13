/**alert("CO ty robisz!!!");
var r = 5;
var pi = Math.PI; //objekt, . - operator elemetu sladowego, PI - wlasciwosc objektu
var poleKola = pi * r * r;

document.write(poleKola);

var x=prompt("podaj wartosc");
console.log(Math.sqrt(x));  // sqer () - metoda obiekt Math, x - arument
var a=13.2;
var b=28.5;
var c=1;
var d=1.123456789
var e=1.123456789
var minimalna = Math.min(a, b, c);
console.log("Min:" + minimalna);  // + konkatenacja
var maksymalna =Math.max(a, b, c);
console.log("max" + maksymalna);
var zaokraglenie = Math.round(b);
console.log(zaokraglenie); // 29
// zaokraglenie do dwoch miejsc po przecinku
var d= d.toFixed(2); // 1.12
console.log("zmienna d:" +d);
//liczba cakowita cyfr przed i po przecink
var e= e.toPrecision(4);
console.log("Zmienna d:" +e); */

//abs, round, floor
/*var x = -56;
var y = -13.1;
var z = 14.9;
document.write("<br>ABS<br>");
document.write("<br>" + Math.abs(x)+ "<br>"); //56
document.write("<br>" + Math.abs(y)+ "<br>"); //13.1
document.write("<br>" + Math.abs(z)+ "<br>"); //14.6

document.write("<br>round<br>");
document.write("<br>" + Math.round(x)+ "<br>"); //-56
document.write("<br>" + Math.round(y)+ "<br>"); //-13
document.write("<br>" + Math.round(z)+ "<br>"); //15

document.write("<br>floor<br>");
document.write("<br>" + Math.floor(x)+ "<br>"); //-56
document.write("<br>" + Math.floor(y)+ "<br>"); //-14
document.write("<br>" + Math.floor(z)+ "<br>"); //14

//combo
document.write("<br>" + Math.abs(Math.round(x))+ "<br>"); //-56

//potegowanie

var p= Math.pow(2,10);
console.log(p);

//losowanie
//0-10
var losuj = Math.floor(Math.random()*11);

//var losjPrzedzial = losuj *
console.log(losuj);
//osuj z przedzialu od 10  do 100

var losuj1 = Math.floor(Math.random() * 91 + 10);
console.log(losuj1); */

//zad.dom.
//wylosuj liczby z przedzialu 15-25

var losuj2 = Math.floor(Math.random() * 11 + 15);
console.log(losuj2);
//*******************************************************************


var elPi=document.getElementById("pi");
var elNic=document.getElementById("nic");
var elPrzycisk=document.getElementById("przycisk");
var elWynik=document.getElementById("wynik");

elPrzycisk.onclick=function() {
    if(elPi.checked) {
        elWynik.innerHTML=Math.PI;
    }else if(elNic.checked){
        elWynik.innerHTML="Wybrales nic"
            }
    else{
        elWynik.innerHTML="wybierz jedno pole radio!";
        }
     }
