<?php 

  define("arquivo", "./arquivo/pessoas.json");
  
  function inserirPessoa($nome, $sobrenome, $email, $senha, $cidade, $estado) : void {
    try {
    
      if (!file_exists(arquivo)) {
        file_put_contents(arquivo, json_encode([]));
      }

      $conteudo = file_get_contents(arquivo);
      $dados = json_decode($conteudo, true);

      if (!is_array($dados)) {
        $dados = [];
      }


      // cria o novo registro
      $novaPessoa = [
        'pescodigo' => count($dados) + 1,
        'pesnome' => $nome,
        'pessobrenome' => $sobrenome,
        'pesemail' => $email,
        'pespassword' => password_hash($senha, PASSWORD_DEFAULT),
        'pescidade' => $cidade,
        'pesestado' => $estado
      ];

      // adiciona no array existente
      $dados[] = $novaPessoa;

      // salva novamente no arquivo JSON
      file_put_contents(arquivo, json_encode($dados, JSON_PRETTY_PRINT));

      echo "Registro salvo com sucesso no arquivo JSON!<br>";
      echo '<a href="index.html">Voltar</a>';
    }
    catch (Exception $e) {
      echo "Erro: " . $e->getMessage();
    }
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    inserirPessoa(
      $_POST['nome'] ?? null,
      $_POST['sobrenome'] ?? null,
      $_POST['email'] ?? null,
      $_POST['senha'] ?? null,
      $_POST['cidade'] ?? null,
      $_POST['estado'] ?? null
    );
  };
?>

