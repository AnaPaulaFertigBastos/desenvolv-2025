<?php 

function divisivelPorDois($valor) : void {
  try {

    if ($valor == null) {
      throw new Exception("Valor nulo!");
    }

    if (!is_numeric($valor)) {
      throw new Exception("O valor deve ser numérico!");
    }

    $numero1 = (int) $valor;

    if ($numero1 != $valor) {
      throw new Exception("O valor deve ser inteiro!");
    }
    
    $resto = $numero1 % 2;

    echo "Resultado: <br>";

    if ($resto == 0) {
      echo "<span>$resto Valor divisível por 2</span>";
    } 
    else {
      echo "<span>O valor não é divisível por 2</span>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  divisivelPorDois(
    $_POST['numero1'] ?? null,
  );
};
?>