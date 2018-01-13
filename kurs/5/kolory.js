var elPrzycisk=document.getElementById("przycisk");
var elCzerwony=document.getElementById("czerwony");
var elZielony=document.getElementById("zielony");
var elPomaranczowy=document.getElementById("pomaranczowy");
var elInny=document.getElementById("Inny");
var elWynik=document.getElementById("wynik");
var elWybierzKolor=document.getElementById("wybierzKolor");


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
        else  { elWynik.innerHTML="Wybierz kolor";
               elWybierzKolor.style.visibility= "visible";
              }
    }
