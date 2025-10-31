<?php 

  require_once "pessoa.php";

  //Cria instância da classe Pessoa
  $pessoa = new Pessoa();

  $pessoa->setNome("João");
  $pessoa->setSobrenome("Pereira");
  $dataNascimento = new DateTime("2005-11-25");
  $pessoa->setDataNascimento($dataNascimento);

  echo $pessoa->getNomeCompleto();
  echo "<br>";
  echo $pessoa->getIdade() . " anos";

  // $nome = "Maria";
  // $sobrenome = "Silva";

  // function getNomeCompleto($nome, $sobrenome) {
  //   return $nome . " " . $sobrenome;
  // };

  // echo getNomeCompleto($nome, $sobrenome);

?>