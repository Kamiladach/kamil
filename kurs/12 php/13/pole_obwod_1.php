 <?php 
if(isset($_GET['przycisk']) && !empty($_GET['wysokosc']) && !empty($_GET['dluosc']) && 0 < ($_GET['wysokosc']) && 0 < ($_GET['dluosc'])){
        $wysokosc= $_GET['wysokosc'];
        $dlzgosc = $_GET['dluosc'];
        $pole = $wysokosc * $dlzgosc;
        $obwod = 2* $wysokosc + 2* $dlzgosc;
      if (isset($_GET['cos'])){
          $wynik = $_GET['cos'];
          switch ($wynik){
              case 'x':
                  $wynik= "Pole wynosi: $pole cm<sup>2</sup>";
                  break;
              case 'y':
                  $wynik = "Obwod wynosi $obwod cm";
                  break;
              
          }
          echo "<br> $wynik";
      }
    }

    ?>