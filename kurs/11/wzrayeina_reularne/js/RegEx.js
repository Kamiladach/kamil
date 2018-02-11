//true or false
var tekst = "14-310";
var regula = /kod pocztowy/;
regula= /SZKOLA/;
regula= /SZKOLA/i; // wielkosc liter nie ma znaczenia
regula= /^szkola/i; //sprawdza od poczatku stringa
regula= /szkola$/i; //na koncu stringa ma byc szkola
regula= /^szkola$/i; //ma byc tylko slow szkola

regula = /[a]/; //czy w tekscie znajduje sie litera a
regula = /[A]/i; //czy w tekscie znajduje sie litera a i nie zwraca uwagi na wielkosc liter
regula = /[a-z]/; //przedzial od a do z
regula = /[a-z]/; //przedzial od a do z
regula = /[A-Z]/; //wyszukuje prznajmie jeden znaj z duzej litery z przedzialu od A do Z  !tablica aski
regula = /[A-Z]/; //wyszukuje prznajmie jeden znaj z duzej litery z przedzialu od A do Z
regula = /[A-z]/; //wyszukuje znaki z przedzialu od A do z tablica aski !!! uwaa na inne znaki
regula = /[a-z][A-Z]/;
regula = /[ążęćńółźś]|[a-z]/; //wyszukuje czy w danym ciau jest chociaz raz prawda | -oznacza lub
regula = /[ążęćńółźś]|[A-Z]/;
regula = /[ążęćńółźś]/;
regula = /[a-z]\s/; //szuka spacji \s - spacja, taublator, nowy wiersz
regula = /[a-z]\S/;//szuka niebedacy spacja, tabulacja lub znakiem nowego wiersza

//mail
regula = /[a-z]+@/; //  + - eden lub wiecje znakow
regula = /^mąk[a]?@/; // ? moze byc 1 lub nie musi byc
regula = /[a]{1}/; // {} minimalna liczba ile ma byc znakow
regula = /[a]{2}/; //
regula = /[a]{2,4}/; // od 2 do 4 znakow
regula = /[a]{2,}/; // , - 2 lub wiecej znakow a
regula = /\//;
regula = /\s/; // musi byc spacja
regula = /\S/; // nie moze byc spacja
regula = /./; // przynajmie 1 zak
regula = /../; // przynajmie 2 zak
regula = /\./; // czy uzytkowik podal kropke
regula = /\.[a-z]{2}$/; // czy uzytkowik podal kropke

// \w - znak bedacy litera, cyfra, znakiem podkreslenia __
// \W - znak nie bedacy litera, cyfra, znakiem podkreslenia __

regula = /\w/;
regula = /\W|[_]/;
// \d znak bedacy cyfra
// \D znak nie bedacy cyfra

regula = /\d/;
regula = /\D/;

// grupa

regula = /(test)/;
regula = /(test){2}/; //grupa musi byc obok siebie
regula = /^\d{2}-\d{3}$/; //- pod pocztowy 14-310

var sprawdz = regula.test(tekst);
console.log(sprawdz);


var muzyka = "plik@mp3 arkusz.csv szkola.mp3 tekst.mp3"
var mp3 = /\w+\.mp3/g;
sprawdz = mp3.test(muzyka);
var sprawdz1;
sprawdz1 = muzyka.match(mp3);
console.log(sprawdz);
console.log(sprawdz1);

var ilosUtworow = sprawdz1.length;
console.log("ilosc utworow: " + ilosUtworow);

document.write("<ol>")
for (var i = 0; i< ilosUtworow; i++){
    document.write("<li>" + sprawdz1[i]  + "</li>" + "<br>");
}
document.write("</ol>")











