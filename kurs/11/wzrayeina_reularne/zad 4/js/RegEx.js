elHaslo = document.getElementById("haslo");
elSprawdz = document.getElementById("sprawdz");
elCyfra = document.getElementById("cyfra");
elDuzaLitera = document.getElementById("duzaLitera");
elSpecjalna = document.getElementById("specjalna");
elMalaLitera = document.getElementById("malaLitera");
elKomunikat = document.getElementById("komunikat");
elDlugosc = document.getElementById("dlugosc");
elHaslo2 = document.getElementById("haslo2");
elPotwierdz = document.getElementById("przycisk");


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
        elKomunikat.innerHTML = "Haslo poprawne";
        elHaslo2.disabled = false;
    }else{
            elKomunikat.innerHTML = "Bledne haslo";
        }
    
    if(dlugosc>=8){
        elDlugosc.innerHTML = "<del>Dlugosc</del>";
    }else{
        elDlugosc.innerHTML = "Dlugosc";
}
    
    if(cyfra){
        elCyfra.innerHTML = "<del>Cyfra</del>";
    }else{
        elCyfra.innerHTML = "Cyfra";
}

      if(duzaLitera){
        elDuzaLitera.innerHTML = "<del>Duza Litera</del>";
    }else{
        elDuzaLitera.innerHTML = "Duza LItera";
}

      if(malaLitera){
        elMalaLitera.innerHTML = "<del>Mala Litera</del>";
    }else{
        elMalaLitera.innerHTML = "Mala Litera";
}
      if(specjalny){
        elSpecjalna.innerHTML = "<del>Specjalny</del>";
    }else{
        elSpecjalna.innerHTML = "Specjalny";
    }
    
}

function SprawdzHaslo2(){
    var pass1 = elHaslo2.value;
    if(elHaslo.value == pass1){
     elPotwierdz.disabled = false;   
    }else{
        elPotwierdz.disabled=true;  
    }
}

function zatwierdzHaslo(){
   
      if(elHaslo.value == elHaslo2.value){
     elKomunikat.innerHTML = "Haslo zostalo zatwierzone";  
        elKomunikat.className = "poprawne";
      elHaslo.disabled=true;    
      elHaslo2.disabled=true;
      
    }else{
      elHaslo.value = "";   
      elHaslo2.value = "";   
      elHaslo.focus(); 
     elKomunikat.innerHTML = "Hasla nie sa indentyczne";
      elKomunikat.className = "niepoprawne";
    }
}
 
elHaslo.addEventListener("keyup",sprawdzHaslo);
elHaslo2.addEventListener("keyup",SprawdzHaslo2);
elPotwierdz.addEventListener("click",zatwierdzHaslo);