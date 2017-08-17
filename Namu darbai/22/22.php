<?php
  $autos = array("BMW", "Volvo", "Volkswagen", "Toyota", "Lexus", "Ford");
  function GetAutoDescriptionsWithWhile($x){
    $i = 0;
      while($i<6){
          switch($x[$i]){
            case "BMW":
              echo $x[$i]." - automobilių, motociklų ir jų variklių gamintojas Vokietijoje. <br>";
              break;

            case "Volvo":
              echo $x[$i]." - didžiausia Švedijos įmonė gaminanti komercines transporto priemones: lengvuosius automobilius, sunkvežimius, autobusus. <br>";
              break;

            case "Volkswagen":
              echo $x[$i]." - Volkswagen yra automobilio markė, priklausanti <q>Volkswagen AG</q> koncernui. <br>";
              break;

            case "Toyota":
              echo $x[$i]." - įmonė kurianti ir gaminanti automobilius. Didžiausi automobilių gamintojai yra Prancūzijoje, Vokietijoje, Italijoje, Japonijoje, Pietų Korėjoje ir JAV. <br>";
              break;

            case "Lexus":
              echo $x[$i]." - japonų tarptautinės korporacijos - Toyota Motor Corporation - prabangių automobilių padalinys. <br>";
              break;

            case "Ford":
              echo $x[$i]." - yra trečia pagal dydį pasaulyje automobilių gamintoja. <br>";
              break;
          }
        $i++;
      }
    }

  function GetAutoDescriptionsWithFor($y){
    for($i=0; $i<6; $i++){
        switch($y[$i]){
          case "BMW":
            echo $y[$i]." - automobilių, motociklų ir jų variklių gamintojas Vokietijoje. <br>";
            break;

          case "Volvo":
            echo $y[$i]." - didžiausia Švedijos įmonė gaminanti komercines transporto priemones: lengvuosius automobilius, sunkvežimius, autobusus. <br>";
            break;

          case "Volkswagen":
            echo $y[$i]." - Volkswagen yra automobilio markė, priklausanti <q>Volkswagen AG</q> koncernui. <br>";
            break;

          case "Toyota":
            echo $y[$i]." - įmonė kurianti ir gaminanti automobilius. Didžiausi automobilių gamintojai yra Prancūzijoje, Vokietijoje, Italijoje, Japonijoje, Pietų Korėjoje ir JAV. <br>";
            break;

          case "Lexus":
            echo $y[$i]." - japonų tarptautinės korporacijos - Toyota Motor Corporation - prabangių automobilių padalinys. <br>";
            break;

          case "Ford":
            echo $y[$i]." - yra trečia pagal dydį pasaulyje automobilių gamintoja. <br>";
        }
      }
    }
?>
