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

  echo "<h2>Contatos de E-mail</h2>";
  echo "<br>";
  var_dump($voce->getContatoPeloTipo(1)); //Contato do tipo Email
  echo "<h2>Endereços</h2>";
  echo "<br>";
  var_dump($voce->getEnderecoArray()); //Lista de Endereços

  $irmao = new Pessoa();

  $irmao->setNome("Eduardo");
  $irmao->setSobrenome("Fertig Bastos");
  $dataNascimento = new DateTime("2001-06-09");
  $irmao->setDataNascimento($dataNascimento);

  $contatoEmail = new Contato();
  $contatoEmail->setTipo(1); //1 - Email
  $contatoEmail->setNome("Email");
  $contatoEmail->setValor("eduardo@unidavi.edu.br");
  $irmao->addContato($contatoEmail);

  $contatoTelefone = new Contato();
  $contatoTelefone->setTipo(2); //2 - Telefone
  $contatoTelefone->setNome("Telefone");
  $contatoTelefone->setValor("+55 11 91234-5678");
  $irmao->addContato($contatoTelefone);

  echo "<br><br>Pessoa: ".$irmao->getNomeCompleto()."<br>";
  echo "Idade: ".$irmao->getIdade()." anos<br>";

  $endereco = new Endereco();
  $endereco->setLogradouro("Rua das Flores, 123");
  $endereco->setBairro("Jardim Primavera");
  $endereco->setCidade("São Paulo");
  $endereco->setEstado("SP");
  $endereco->setCep("01234-567");
  $irmao->addEndereco($endereco);

  echo "<h2>Contatos de E-mail</h2>";
  echo "<br>";
  var_dump($irmao->getContatoPeloTipo(1)); //Contato do tipo Email
  echo "<h2>Endereços</h2>";
  echo "<br>";
  var_dump($irmao->getEnderecoArray()); //Lista de Endereços


  $pai = new Pessoa();

  $pai->setNome("Fernando");
  $pai->setSobrenome("Bastos");
  $dataNascimento = new DateTime("1969-01-26");
  $pai->setDataNascimento($dataNascimento);

  $contatoEmail = new Contato();
  $contatoEmail->setTipo(1); //1 - Email
  $contatoEmail->setNome("Email");
  $contatoEmail->setValor("fernando@unidavi.edu.br");
  $pai->addContato($contatoEmail);

  echo "<br><br>Pessoa: ".$pai->getNomeCompleto()."<br>";
  echo "Idade: ".$pai->getIdade()." anos<br>";

  $endereco = new Endereco();
  $endereco->setLogradouro("Rua das Flores, 123");
  $endereco->setBairro("Jardim Primavera");
  $endereco->setCidade("São Paulo");
  $endereco->setEstado("SP");
  $endereco->setCep("01234-567");
  $pai->addEndereco($endereco);

  echo "<h2>Contatos de E-mail</h2>";
  echo "<br>";
  var_dump($pai->getContatoPeloTipo(1)); //Contato do tipo Email
  echo "<h2>Endereços</h2>";
  echo "<br>";
  var_dump($pai->getEnderecoArray()); //Lista de Endereços



  $mae = new Pessoa();

  $mae->setNome("Maridiani");
  $mae->setSobrenome("Fertig");
  $dataNascimento = new DateTime("1973-01-06");
  $mae->setDataNascimento($dataNascimento);

  $contatoEmail = new Contato();
  $contatoEmail->setTipo(1); //1 - Email
  $contatoEmail->setNome("Email");
  $contatoEmail->setValor("maridiani@unidavi.edu.br");
  $mae->addContato($contatoEmail);

  echo "<br><br>Pessoa: ".$mae->getNomeCompleto()."<br>";
  echo "Idade: ".$mae->getIdade()." anos<br>";

  $endereco = new Endereco();
  $endereco->setLogradouro("Rua das Flores, 123");
  $endereco->setBairro("Jardim Primavera");
  $endereco->setCidade("São Paulo");
  $endereco->setEstado("SP");
  $endereco->setCep("01234-567");
  $mae->addEndereco($endereco);

  echo "<h2>Contatos de E-mail</h2>";
  echo "<br>";
  var_dump($mae->getContatoPeloTipo(1)); //Contato do tipo Email
  echo "<h2>Endereços</h2>";
  echo "<br>";
  var_dump($mae->getEnderecoArray()); //Lista de Endereços

  $pessoas = [$voce, $irmao, $pai, $mae];
  $arquivo = __DIR__ . '/pessoas.txt';
  file_put_contents($arquivo, serialize($pessoas));

?>