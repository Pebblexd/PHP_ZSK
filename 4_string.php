<?php
  $text = <<<T
  zsk - Zespół
  Szkół
  Komunikacji<br>
T;
  echo $text;
  echo nl2br($text);

  $name = "jaNUsZ";
  //zamiana na małe litery
  echo strtolower($name), "<br>";
  //zamiana na duże litery
  echo strtoupper($name), "<br>";

  $name = 'jaNUSz koWalskI<br>';
  //zamiana pierwszej litery na dużą

  echo ucfirst($name);

  //zamiana wszystkich pierwszych liter na duże
  echo ucwords($name);

  $name = <<<T
janusz
T;//nie może być spacji przed januszem żeby zadziałało
  echo ucfirst($name),'<br>';
  //lorem ipsum
  $lorem = <<<LOREM
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;
  echo $lorem, "<br>";
  echo wordwrap($lorem, 40, '<br>'),'<br>';
  echo wordwrap($lorem, 40, '<hr>');

  //czyszczenie zawartości bufora
  ob_clean();

  //usuwanie białych znaków
 ?>
