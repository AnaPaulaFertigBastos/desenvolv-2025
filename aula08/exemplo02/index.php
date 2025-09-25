<?php 
  $t = date("H");
  echo(date_default_timezone_get());
  if ($t < 20) {
    echo "<br>Hora menor que 20 - $t";
  }
  else {
    echo "<br>Hora maior ou igual a 20 - $t";
  }
?>