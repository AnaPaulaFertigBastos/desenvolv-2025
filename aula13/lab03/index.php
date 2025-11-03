<?php 

  use Model\Pessoa;
  use Model\Contato;
  require_once "./model/pessoa.php";
  require_once "./model/contato.php";

  

  //Cria instância da classe Pessoa
  $pessoa = new Pessoa();

  $pessoa->setNome("João");
  $pessoa->setSobrenome("Pereira");
  $dataNascimento = new DateTime("2005-11-25");
  $pessoa->setDataNascimento($dataNascimento);

  $contatoEmail = new Contato();
  $contatoEmail->setTipo(1); //1 - Email
  $contatoEmail->setNome("Email");
  $contatoEmail->setValor("cleber.nardelli@example.com");
  $pessoa->AddContato($contatoEmail);

  $contatoTelefone = new Contato();
  $contatoTelefone->setTipo(2); //2 - Telefone
  $contatoTelefone->setNome("Telefone");
  $contatoTelefone->setValor("+55 11 91234-5678");
  $pessoa->AddContato($contatoTelefone);

  echo "Pessoa: ".$pessoa->getNomeCompleto()."<br>";
  echo "Idade: ".$pessoa->getIdade()." anos<br>";

  var_dump($pessoa->getContatoPeloTipo(1)); //Contato do tipo Email

  // $nome = "Maria";
  // $sobrenome = "Silva";

  // function getNomeCompleto($nome, $sobrenome) {
  //   return $nome . " " . $sobrenome;
  // };

  // echo getNomeCompleto($nome, $sobrenome);

?>