<?php 

function processarDados (string $nome, string $sobrenome,
    string $email, string $dataNascimento, int $sexo, string $endereco,
    string $cep, string $cor, string $uf) : void
{

  echo "<h2>Cadastro Recebido:</h2>";
  echo "Nome: $nome<br>";
  echo "Sobrenome: $sobrenome<br>";
  echo "E-mail: $email<br>";
  echo "Data de Nascimento: $dataNascimento<br>";
  echo "Sexo: " . ($sexo === 1 ? "Masculino" : "Feminino") . "<br>";
  echo "Endereço: $endereco<br>";
  echo "CEP: $cep<br>";
  echo "Cor favorita: $cor<br>";
  echo "UF: $uf<br>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  processarDados(
    $_POST['nome'],
    $_POST['sobrenome'],
    $_POST['email'],
    $_POST['data_nascimento'],
    intval($_POST['email']),
    $_POST['endereco'],
    $_POST['cep'],
    $_POST['cor'],
    $_POST['uf'],
  );
}

?>