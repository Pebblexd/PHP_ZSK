<?php
  echo PHP_VERSION, '<br>';
  // echo phpinfo();
  // interpolacja
  echo 'a', 'b', '<br>'; //wyświetli a wyświetli b
  echo 'a'.'b'.'<br>'; //dodaj a i b => wyświetl ab

  $pow = 2 ** 10; // potęga
  echo "$pow <br>";

  //operatory bitowe
  //and &, or |, xor ^, not ~, <<, >>
  $x = 0b1010;
  echo "$x<br>";

  $x = $x << 2; //101000(2) => 40
  echo "$x<br>";

  $x = $x >> 3; //101(2) => 5
  echo "$x<br>";

  // porównanie
  $x = 1.0;
  $y = 1;
  echo $x <=> $y, "<br>"; // sprawdza czy zmienna po lewej jest mniejsza, rowna, wieksza

  if ($x === $y){
    echo '$x jest identyczna $y <br>';
  }
  else{
    echo '$x nie jest identyczna $y <br>';
  }

  echo gettype($x), "<br>";
  echo gettype($y), "<hr>";

  $x = 1;
  $x = $x++;
  echo $x;//1
  $x=++$x;
  echo $x;//2
  $y = $x++;
  echo $x;//3
  echo $y;//2
  $y=++$x*2-1;
  echo $y, '<hr>';//7

  // operatory rzutowania
  //bool, int, float, string, array, object, unset

  $test1 = '1234abc5';
  $test2 = 0;
  $test3 = 10;
  echo 'Typ danych $test1: ',gettype($test1);
  $test1 = (int)$test1;
  echo "<br>$test1<br>";
  echo 'Typ danych $test1: ',gettype($test1),"<br>";

  echo 'Typ danych $test2: ',gettype($test2);
  $test2 = (bool)$test2;
  echo "<br>$test2<br>"; //false nie zostanie wyswietlony
  echo 'Typ danych $test2: ',gettype($test2),"<br>";

  echo 'Typ danych $test3: ',gettype($test3);
  $test3 = (unset)$test3; //czyści zmienne
  echo "<br>$test3<br>";
  echo 'Typ danych $test3: ',gettype($test3),"<br>";

  // rozmiar typu integer
  echo PHP_INT_SIZE, "<br>"; //w bajtach

  //kontrola typu zmiennych
  //is_int(), is_string(),is_float(), is_bool(), is_null(), is_numeric()
  $x = 1;
  echo is_int($x),"<br>";
  echo is_numeric($x), "<br>";
  $x = null;
  echo is_null($x),"<hr>";

  $w;
  // echo $w;
  echo @gettype($w),"<br>";
  echo @is_null($w); //@ignoruje błędy
?>
