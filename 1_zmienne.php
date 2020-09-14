<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
      $name = 'Krystyna';
      echo 'Imię: $name<br>';
      echo "Imię: $name<br>";
      echo 'tekst<br>';

// typy danych
// boolean
  // zapisuj zmienne bez polskich znaków w języku angielskim
  $prawda = true;
  $fałsz = false;
  echo $prawda; //1
  echo $fałsz,'<br>'; //nie wypisuje 0

// integer
  $bin = 0b1010; //10
  $dec = 10; //10
  $oct = 010; //8
  $hex = 0x10; //16
  echo "$bin $dec $oct $hex <br>";

// składnia heredoc
  $name="Anna";
  $surname="Nowak";

  $text = <<<LABEL
  Heredoc<br>
  Imię: $name,
  Nazwisko: $surname
  <hr>
LABEL;
  echo $text;

  echo <<<LABEL
  Heredoc2<br>
  Imię: $name<hr>
LABEL;

// składnia nowdoc (zamienia wszystko na tekst)
  echo <<<'LABEL'
  Nowdoc2<br>
  Imię: $name<hr>
LABEL;

  $city="Poznań";
  echo "Nazwa zmiennej: \$city, wartość: $city";

     ?>
  </body>
</html>
