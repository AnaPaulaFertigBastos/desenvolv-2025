<?php 
  $materias = array("Estrutura de Dados II", "Engenharia de Software II", "Administração e Sistemas", "Programação Web", "Banco de Dados II");

  $professores = array("Fernando", "Jullian", "Marciel", "Cleber", "Marco");
  for ($i = 0; $i < count($materias); $i++) {
    echo "Disciplina: " . $materias[$i] . ", Professor: " . $professores[$i] . "<br>";
  };

  echo "<br>Com associativa:";
  $materiasEProfe = array("Estrutura de Dados II"=>"Fernando", "Engenharia de Software II"=>"Jullian", "Administração e Sistemas"=>"Marciel", "Programação Web"=>"Cleber", "Banco de Dados II"=>"Marco");

  foreach($materiasEProfe as $materia => $professor) {
    echo "$materia - $professor <br>";
  };
?>