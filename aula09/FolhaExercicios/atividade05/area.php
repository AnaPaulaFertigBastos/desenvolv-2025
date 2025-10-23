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

    $area = ($base * $altura)/2;

    echo "Área: <br>";
    echo "<span>A área do triângulo de base $base e altura $altura metros é $area metros quadrados.</span>";
    

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