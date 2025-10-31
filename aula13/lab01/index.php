<?php 

  require_once "pessoa.php";

  //Cria instância da classe Pessoa
  $pessoa = new Pessoa();

  $pessoa->setNome("João");
  $pessoa->setSobrenome("Pereira");

  echo $pessoa->getNomeCompleto()

  // $nome = "Maria";
  // $sobrenome = "Silva";

  // function getNomeCompleto($nome, $sobrenome) {
  //   return $nome . " " . $sobrenome;
  // };

  // echo getNomeCompleto($nome, $sobrenome);

?>