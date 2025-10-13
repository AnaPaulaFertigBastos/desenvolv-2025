<?php 

function somaValores($numero1, $numero2, $numero3) : void {
  try {

    
    if (!is_numeric($numero1) || !is_numeric($numero2) || !is_numeric($numero3)) {
      throw new Exception("Todos os valores devem ser numéricos!");
    }

    $numero1 = (float) $numero1;
    $numero2 = (float) $numero2;
    $numero3 = (float) $numero3;

    if ($numero1 == null || $numero2 == null || $numero3 == null) {
      throw new Exception("Valor nulo!");
    }
    $resultado = $numero1 + $numero2 + $numero3;

    echo "Resultado: <br>";

    if ($numero1 > 10) {
      echo "<span style='color:blue; font-weight:400'>$resultado</span>";
    } 
    elseif ($numero2 < $numero3) {
      echo "<span style='color:green; font-weight:400'>$resultado</span>";
    }
    elseif ($numero3 < $numero1 && $numero3 < $numero2) {
      echo "<span style='color:red; font-weight:400'>$resultado</span>";
    }
    else {
      echo "<span>$resultado</span>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  somaValores(
    $_POST['numero1'] ?? null,
    $_POST['numero2'] ?? null,
    $_POST['numero3'] ?? null
  );
};
?>