<?php
    $x = 2;
if($x == 1){
    echo 'Jeden';
}else if ($x == 2){
    echo 'Dwa';
}else if (x ==3){
    echo 'czy';
}else{
    echo 'inne liczba';
}

// SWITCH
echo '<br>';
switch($x){
    case 1:
        echo 'jeden';
        break;
    case 2:
        echo 'dwa';
        break;
    case 3:
        echo 'czy';
        break;
    default:
        echo 'inna liczba';
}
echo '<br>';
$tekst = 'Janusz';
switch($tekst){
    case 'Anna':
        echo 'Witaj anna';
        break;
    case 'Janusz';
        echo 'Witaj Januszu';
        break;
    default:
        echo 'Witaj inny uzytkowniku';
}


?>