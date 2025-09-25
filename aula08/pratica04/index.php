<?php 
  $SALARIO1 = 1000;
  $SALARIO2 = 2000;

  $SALARIO2 = $SALARIO1;

  $SALARIO2++;

  $SALARIO1 = $SALARIO1 * 1.10;

  echo("Valor salário 1:" . $SALARIO1 . "<br>" . "Valor salário 2: " . $SALARIO2 . "<br>");

  if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2";
  }
  else if ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 2 é maior que o valor da variável 1";
  }
  else {
    echo "O Valor da variável 2 é igual a variável 1";
  }

  $i = 1;

  echo "<br>Início do loop<br>";

  while($i <= 100) {
    $SALARIO1++;
    if ($i == 50) {
      break;
    };
    $i++;
  };
  
  if ($SALARIO1 < $SALARIO2) {
    echo "$SALARIO1";
  }
?>