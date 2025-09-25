<?php 
  define("DATABASE_NAME", "banco");
  define("DATABASE_HOST", "localhost");

  echo DATABASE_NAME . " - " . DATABASE_HOST;
  $string = "Olá mundo";
  $num = 2;

  echo ("<br>");
  echo gettype($string);
  echo ("<br>");
  echo gettype($num);
?>