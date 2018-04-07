<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania z Tablicami</title>
</head>
<body>
     <h3> Zadanie 1.</h3>
    <form>
        <input type="text"  name="kolor1" placeholder="Podaj kolor" pattern="([a-z]){3,30}">
        <input type="text" name="kolor2" placeholder="Podaj kolor" pattern="([a-z]){3,30}">
        <input type="text"  name="kolor3" placeholder="Podaj kolor" pattern="([a-z]){3,30}">
        
        <input type="submit" name="wyswietl">
    </form>
    <?php
    
    
   if (isset($_GET['wyswietl']) && (($_GET['kolor1']) || ($_GET['kolor2'])|| ($_GET['kolor3']))){
   
       $t = [];
       
   }
    $l = !empty($_GET['kolor1']) ? 1:0;
        if(!empty($_GET['kolor1']))
           $t[] = $_GET['kolor1'];
    $l += !empty($_GET['kolor2']) ? 1:0;
        if(!empty($_GET['kolor2']))
           $t[] = $_GET['kolor2'];
    $l += !empty($_GET['kolor3']) ? 1:0;
        if(!empty($_GET['kolor3']))
           $t[] = $_GET['kolor3'];
    
    if ($l >=2)
        echo "Wprowadziles $l kolory";
    else
        echo "Wprowadziles $l kolorow";
    foreach ($t as $k =>w){
        $x= ++$k;
        echo "$x kolor: $w <br>";
    }
  
    ?>
</body>
</html>