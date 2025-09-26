<?php 
  $nomes = array("a", "b", "c");
  foreach($nomes as $elemento) {
    echo "Nome: " . $elemento . "<br>";
  }

  //Inicializando valor em vetor a partir de sua posição
  
  $valores[0] = "UNI";
  $valores[1] = "DAVI";
  $valores[2] = true;

  //Matriz asssociativa

  $idade = array("João"=>"35", "Maria"=>"37", "José"=>"43");
  foreach($idade as $chave => $valor) {
    echo "Chave=" . $chave . ", Valor =" . $valor;
    echo "<br>";
  }
?>