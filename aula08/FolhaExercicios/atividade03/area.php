<?php 

function calcularArea($lado) : void {
  try {

    
    if (!is_numeric($lado)) {
      throw new Exception("O valor deve ser numérico!");
    }

    

    if ($lado == null) {
      throw new Exception("Valor nulo!");
    }

    $lado = (float) $lado;

    $area = $lado * $lado;

    echo "Área: <br>";


    echo "<span>A área do quadrado de lado de $lado metros é $area metros quadrados</span>";

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  calcularArea(
    $_POST['lado'] ?? null,
  );
};
?>