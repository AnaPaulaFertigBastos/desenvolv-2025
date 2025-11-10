<?php 

  use Model\Pessoa;
  use Model\Contato;
  use Model\Endereco;
  require_once "./model/pessoa.php";
  require_once "./model/contato.php";
  require_once "./model/endereco.php";
  

  //Cria instância da classe Pessoa
  $voce = new Pessoa();

  $voce->setNome("Ana Paula");
  $voce->setSobrenome("Fertig Bastos");
  $dataNascimento = new DateTime("2005-11-25");
  $voce->setDataNascimento($dataNascimento);

  $contatoEmail = new Contato();
  $contatoEmail->setTipo(1); //1 - Email
  $contatoEmail->setNome("Email");
  $contatoEmail->setValor("ana.bastos@unidavi.edu.br");
  $voce->addContato($contatoEmail);

  $contatoTelefone = new Contato();
  $contatoTelefone->setTipo(2); //2 - Telefone
  $contatoTelefone->setNome("Telefone");
  $contatoTelefone->setValor("+55 11 91234-5678");
  $voce->addContato($contatoTelefone);

  echo "Pessoa: ".$voce->getNomeCompleto()."<br>";
  echo "Idade: ".$voce->getIdade()." anos<br>";

  $endereco = new Endereco();
  $endereco->setLogradouro("Rua das Flores, 123");
  $endereco->setBairro("Jardim Primavera");
  $endereco->setCidade("São Paulo");
  $endereco->setEstado("SP");
  $endereco->setCep("01234-567");
  $voce->addEndereco($endereco);

  echo "<h1>Contatos de E-mail</h1>";
  echo "<br>";
  var_dump($voce->getContatoPeloTipo(1)); //Contato do tipo Email
  echo "<h1>Endereços</h1>";
  echo "<br>";
  var_dump($voce->getEnderecoArray()); //Lista de Endereços

  // $nome = "Maria";
  // $sobrenome = "Silva";

  // function getNomeCompleto($nome, $sobrenome) {
  //   return $nome . " " . $sobrenome;
  // };

  // echo getNomeCompleto($nome, $sobrenome);

?>