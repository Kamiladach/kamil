var elPrzycisk=document.getElementById("przycisk");
var elCzerwony=document.getElementById("czerwony");
var elZielony=document.getElementById("zielony");
var elPomaranczowy=document.getElementById("pomaranczowy");
var elInny=document.getElementById("inny");
var elWynik=document.getElementById("wynik");
var elWybierzKolor=document.getElementById("wybierzKolor");
elWybierzKolor.style.visibility= "hidden";
var innyKolor;

elPrzycisk.onclick=function () {
   // alert("test");
    if (elCzerwony.checked){
       elWynik.innerHTML="Twoj ulubiony kolor: czerwony";


        }else if(elZielony.checked){
        elWynik.innerHTML="Twoj ulubiony kolor: zielony";
            }

     else if(elPomaranczowy.checked){
        elWynik.innerHTML="Twoj ulubiony kolor: Pomaranczowy";
            }
        else  { //console.log(elWybierzKolor.value);
               innyKolor = elWybierzKolor.value;
            elWynik.innerHTML="Twoj ulubiony kolor: " + innyKolor;
              }
    }
elInny.onclick=function(){
    elWynik.innerHTML="Wybierz kolor";
    elWybierzKolor.style.visibility= "visible";

}
