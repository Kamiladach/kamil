<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>data i czas</title>
</head>
<body>
   <?php
    
    ###################### funkcja date #######################
    echo 'rok - miesiac -dzien: '.date("Y-m-d")."<br>"; //rok - miesiac -dzien: 18-03-17
    echo date("d-m-Y")."<br>"; //17-03-2018
    echo date("j M Y")."<br>";//17 Mar 2018
    echo date("jS ,M Y")."<br>";//17th ,Mar 2018
    echo date("G:i:s")."<br>";//14:23:51
    echo date("h:i:sa")."<br>";//02:24:23pm
    echo date("Y-m-d G:i:s")."<br>";//2018-03-17 14:25:18
    echo date("w")."<br>";//6
    
    ###################### funkcja get date ##################
    
    $data = getdate();
    $dzien = $data['mday'];
    if ($dzien <10){
        $dzien = "0".$dzien;
    }
    $miesiac = $data['mon'];
    if ($miesiac <10){
        $miesiac = "0".$miesiac;
    }
    $rok = $data['year'];

    $dzienTygodnia =$data["wday"];
    
    
    
    echo $dzien." ".$miesiac." ".$rok." ".$dzienTygodnia." ";
    echo "<br>";
    //Zad. 1
  /*  wyswietl date w nastepuacym formacie:
    17 marzec 2018 | sobota; */
    
    switch ($miesiac){
        case 1: $miesiac = 'styczen';
            break;
        case 2: $miesiac = 'luty';
            break;
        case 3: $miesiac = 'marzec';
            break;
        case 4: $miesiac = 'kwiecien';
            break;
        case 5: $miesiac = 'maj';
            break;
        case 6: $miesiac = 'czerwiec';
            break;
        case 7: $miesiac = 'lipiec';
            break;
        case 8: $miesiac = 'sieprien';
            break;
        case 9: $miesiac = 'wrzesien';
            break;
        case 10: $miesiac = 'pazdziernik';
            break;
        case 11: $miesiac = 'listopad';
            break;
        case 12: $miesiac = 'grudzien';
            break;
      }      
    switch ($dzienTygodnia){
        case 1: $dzienTygodnia ='poniedzialek';
            break;
        case 2: $dzienTygodnia ='wtorek';
            break;
        case 3: $dzienTygodnia ='sroda';
            break;
        case 4: $dzienTygodnia ='czwartek';
            break;
        case 5: $dzienTygodnia ='piatek';
            break;
        case 6: $dzienTygodnia ='sobota';
            break;
        case 7: $dzienTygodnia ='niedziela';
            break;
       
    }      
            
    echo $dzien." ".$miesiac." ".$rok." | ".$dzienTygodnia;
    
    echo "<br>";
    
    ################################### mktime ############################
    
    $rok1 = 2018;
    $miesiac1 = 3;
    $dzien1 = 17;
    
    $rok2 = 1990;
    $miesiac2 = 3;
    $dzien2 = 17;
    
    $time1 = mktime(0,0,0,$miesiac1, $dzien1, $rok1);
    $time2 = mktime(0,0,0,$miesiac2, $dzien2, $rok2);
    $time = abs(ceil(($time1 - $time2)/86400));
    
    echo $time1."<br>";
    echo $time2."<br>";
    echo $time."dni pomiedzy time 1 a time 2<br>";
 #################################### microtime ############################
    
    $t1 = microtime(true);
    
   // for ($i = 0; $i <20000; $i++)
     //   for ($j = 0; $j < 1000; $j++)
    
    
    $t2 = microtime(true);
    
    $t = round($t2 - $t1,4);
    
    echo "srypt wykonywal sie: ".$t."sekundy";
    ################################
    echo "<br>";
    echo strtotime("now")."<br>"; //1521296374
    
    
    echo strtotime("28 january 1995")."<br>";
    echo strtotime("-1 day")."<br>";
    echo strtotime("+3 day 5 hours 14 minutes 10 seconds")."<br>";
    echo strtotime("next saturday")."<br>";
    
    ?>
    <form>
        <input type="date" name="dataF">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['dataF'])){
        echo $_GET['dataF']."<br>";
        echo strtotime($_GET['dataF'])."<br>";
    }
     // zad 
//napisz skrypt ktory bedzie wyswietlal strone w zaleznosci od pory dnia.
//    wykokrzysta instrucje include. od 6 do 18 dzien dobry-plik 16_dzien.php od 18 od 6 dobry wieczor 16_2wieczor.php.
    ?>
    
</body>
</html>