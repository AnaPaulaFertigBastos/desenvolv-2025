<?php 
  $salarioBruto = 0;
  $impostos = 0;
  $salarioLiquido = 0;

  function calculaFolhaPagto(&$bruto, &$imposto, &$liquido) {
    $bruto = 10000;
    $imposto = 1000;
    $liquido = $bruto - $imposto;
  }

  calculaFolhaPagto($salarioBruto, $impostos, $salarioLiquido);

  echo"Salário bruto: $salarioBruto";
  echo"Impostos: $impostos";
  echo"Salário liqueido: $salarioLiquido";
?>