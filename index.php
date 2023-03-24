<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  function kostka(){
      return rand(1, 6);
  }

  function promien($num){
      return 2 * pi() * $num;
  }

  function cenzura($tekst){
      $cenzura = array("bardzo", "brzydkie", "slowa");
      $wynik = $tekst;
      for ($i = 0; $i < count($cenzura); $i++) {
          $wynik = str_replace($cenzura[$i], "***", $wynik);
      }
      return $wynik;
  }

  function zadanie14($srt_pesel){
      $year = intval(substr($srt_pesel, 0, 2));
      $month = intval(substr($srt_pesel, 2, 2));
      $day = intval(substr($srt_pesel, 4, 2));
      if ($month > 12) {
          $month -= 20;
          $year += 2000;
      } else {
          $year += 1900;
      }

      if ($month < 10) {
          $month = "0" . strval($month);
      }
      return strval($day) . "-" . $month . "-" . strval($year);
  }

  function triangle(){
      echo "Podaj a: ";
      $a = intval(readline());
      echo "Podaj h: ";
      $h = intval(readline());
      return 0.5 * $h * $a;
  }

  function rectangle(){
      echo "Podaj a: ";
      $a = intval(readline());
      echo "Podaj b: ";
      $b = intval(readline());
      return $a * $b;
  }

  function trapeze(){
      echo "Podaj a: ";
      $a = intval(readline());
      echo "Podaj b: ";
      $b = intval(readline());
      echo "Podaj h: ";
      $h = intval(readline());
      return ($a + $b) * $h * 0.5;
  }

  function zadanie15(){
      echo "1. Trójkąt \n";
      echo "2. Prostokąt \n";
      echo "3. Trapez \n";
      echo "Wybór: ";
      switch (readline()) {
          case "1":
              echo "Pole trójkąta = " . triangle();
              break;
          case "2":
              echo "Pole prostokąta = " . rectangle();
              break;
          case "3":
              echo "Pole trapezu = " . trapeze();
              break;
          default:
              echo "Błędny wybór!";
      }
  }

  function zadanie21($index){
      $array = array();
      for ($i = 0; $i < $index + 1; $i++) $array[] = rand(0, 100);
      return $array[$index];
  }

  function zadanie22(){
      echo "Podaj nazwę kraju: ";
      $a = strtolower(readline());
      $nationality = array("polska" => "polska", "niemcy" => "niemiecka", "wlochy" => "wloch");
      foreach ($nationality as $kraj => $nar) {
          if ($kraj == $a) return $nar;
      }
      return "nie znam takiego kraju";
  }
  function zadanie31(){
      $tab = array();
      for($i = 0; $i < 100 + 1; $i++) $tab[] = rand(0, 1000);
      $wynikfor = 0;
      for($i = 0; $i < 100 + 1; $i++){
          if($wynikfor<$tab[$i]) $wynikfor = $tab[$i];
      }
      echo "Wynki dla for: ".$wynikfor."\n";
      $wynikforeach = 0;
      foreach($tab as $item => $x) {
          if($x > $wynikforeach) $wynikforeach = $x;
      }
      echo "Wynki dla foreach: ".$wynikforeach."\n";
      $wynikwhile = 0;
      $iterator=0;
      while($iterator<100){
          if($wynikwhile < $tab[$iterator]) $wynikwhile = $tab[$iterator];
          $iterator++;
      }
      echo "Wynki dla while: ".$wynikwhile."\n";
      $wynikdowhile=0;
      $iterator=0;
      do{
          if($wynikdowhile < $tab[$iterator]) $wynikdowhile = $tab[$iterator];
          $iterator++;
      }while($iterator<100);
      echo "Wynki dla do..while: ".$wynikdowhile."\n";
  }

  function zadanie32($number){
      $tab = array();
      for($i = 0; $i < $number + 1; $i++) $tab[] = rand(1, 6);
      echo "Wersja for: "."\n";
      for($i = 0; $i < $number + 1; $i++){
          echo "Tab[".$i."]=".$tab[$i]."\n";
      }
      echo "Wersja foreach"."\n";
      foreach($tab as $item => $x) {
          echo "Tab[".$item."]=".$x."\n";
      }
      echo "Wersja while"."\n";
      $iterator=0;
      while($iterator<$number){
          echo "Tab[".$iterator."]=".$tab[$iterator]."\n";
          $iterator++;
      }
      echo "Wersja do..while"."\n";
      $iterator=0;
      do{
          echo "Tab[".$iterator."]=".$tab[$iterator]."\n";
          $iterator++;
      }while($iterator<$number);
    }

    function zadanie33($x){
        for($i=1;$i<$x;$i++){
            for($j=1;$j<$x;$j++) echo $i*$j." ";
            echo "\n";
        }
    }

    function zadanie34($number){
        if ($number == 1)
            return false;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return false;
        }
        return true;
    }
  ?>
</body>
</html>