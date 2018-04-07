<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>skladnia_alternatywna</title>
</head>
<body>
    <?php
    //instrukca if
    
    $x = 2;
    $y = 2;
    
    if ($x < $y){
        echo "zmienna x jest mniesza od zmiennej y<br>";
    }
    if ($x < $y):
    echo "zmienna x jest mniesza od zmienne y<br>";
    endif;
    
    
    //instrucja i... else
    
    if ($x < $y){
        echo "zmienna x jest mniesza od zmiennej y<br>";
    }else{
        echo "zmienna x nie jest mniesza od zmiennej y<br>";
    }
    if ($x < $y):
        echo "zmienna x jest mniesza od zmiennej y<br>";
    else:
        echo "zmienna x nie jest mniesza od zmiennej y<br>";
    endif;
    
    //instrukcja i....else..if
    
    
    if ($x < $y){
        echo "zmienna x jest mniesza od zmiennej y<br>";
    }else if ($x == $y) {
        echo "zmienna x jest rowna od zmiennej y<br>";
    }else {
        echo "zmienna x nie jest mniesza od zmiennej y<br>";
    }
  //elsif zapisac laczenie !!!!! 
    if ($x < $y):
        echo "zmienna x jest mniesza od zmiennej y<br>";
    elseif ($x == $y):
        echo "zmienna x jest rowna od zmiennej y<br>";
    else: 
        echo "zmienna x nie jest mniesza od zmiennej y<br>";
    endif;
    //instrukcja switch
    
    
    $a = 5;
    switch($a){
        case 0:
            echo "zmienna a==0";
            break;
        case 5:
            echo "zmienna a==5";
            break;
        case 10:
            echo "zmienna a==10";
            break;
         }
    
     switch($a):
        case 0:
            echo "zmienna a==0";
            break;
        case 5:
            echo "zmienna a==5";
            break;
        case 10:
            echo "zmienna a==10";
            break;
     endswitch;
    echo "<br>";
    //petla for
    
    
    for ($i=0; $i<=5; $i++){
        echo "$i ";
    }
    for ($i=0; $i<=5; $i++):
        echo "$i ";
    endfor;
    
    
    //while
    
    $i = 2;
    
    while($i <= 5){
        echo "$i ";
        $i++;
    }
    
     while($i <= 15):
        echo "$i ";
        $i++;
    endwhile;
    
    echo "<br>";
    //break, if, for
    
    for ($i=1; $i <10; $i++){
        echo "zmienna i wynosi: $i <br>";
        if($i == 5){
            break;
        }
    }
    
     for ($i=1; $i <10; $i++):
        echo "zmienna i wynosi: $i <br>";
        if($i == 5):
            break;
        endif;
    endfor;
    
    echo "<br>";
    //continue, if, for
    
     for ($i=1; $i <10; $i++){
           if($i == 5)
            continue;
            echo "$i ";
    }
    echo "<br>";
       for ($i=1; $i <10; $i++):
           if($i == 5):
            continue;
            endif;
            echo "$i ";
       endfor;
    
    
    
    ?>
</body>
</html>