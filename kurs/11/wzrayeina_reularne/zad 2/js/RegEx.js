elHaslo = document.getElementById("haslo");
elSprawdz = document.getElementById("sprawdz");
elKomunikat = document.getElementById("komunikat");

function sprawdzHaslo(){
   var pass = elHaslo.value;
    var cyfra;
    var regCyfra = /\d/;
    var regDuzaLitera = /[A-Z]/;
    var regMalaLitera = /[a-z]/;
    var regSpecjalny = /\W|_/;
    cyfra = regCyfra.test(pass);
    malaLitera = regMalaLitera.test(pass);
    specjalny = regSpecjalny.test(pass);
    duzaLitera = regDuzaLitera.test(pass);
    var dlugosc = pass.length;
    
    if(dlugosc >=8 && cyfra && malaLitera && specjalny && duzaLitera){
        elKomunikat.innerHTML = "Haslo poprawne";}
        else{
              elKomunikat.innerHTML = "Bledne haslo";
        }
    
}

 
elHaslo.addEventListener("keyup",sprawdzHaslo);