<?php 

function calcularArea($base, $altura) : void {
  try {

    
    if (!is_numeric($base) || !is_numeric($altura)) {
      throw new Exception("Os valores devem ser numéricos!");
    }

    if ($base == null || $altura == null ) {
      throw new Exception("Valor nulo!");
    }

    $base = (float) $base;

    $altura = (float) $altura;

    $area = $base * $altura;

    echo "Área: <br>";

    if ($area > 10) {
      echo "<h1>A área do retângulo de lados $base e $altura metros é $area metros quadrados.</h1>";
    }
    else {
      echo "<h3>A área do retângulo de lados $base e $altura metros é $area metros quadrados.</h3>";
    }
    

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  calcularArea(
    $_POST['base'] ?? null,
    $_POST['altura'] ?? null,
  );
};
?>