<?php 
  function exibirTabela(?string $nomePesquisa) : void {
    try {

      $connection = conexaoBanco();

      if ($connection) {
        if ($nomePesquisa != null)  {
          $resultTable = pg_query_params($connection, "SELECT * FROM tbpessoa WHERE pesnome ILIKE $1", ['%' . $nomePesquisa . '%']); 
        } else {
          $resultTable = pg_query($connection, "SELECT * FROM tbpessoa");
        }
        echo "<table border='1'>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Cidade</th>
            <th>Estado</th>
          </tr>
        ";
        if ($resultTable) {
          while($row = pg_fetch_assoc($resultTable)) {
            echo "<tr>
              <td>" . $row['pescodigo'] . "</td>
              <td>" . $row['pesnome'] . "</td>
              <td>" . $row['pessobrenome'] . "</td>
              <td>" . $row['pesemail'] . "</td>
              <td>" . $row['pescidade'] . "</td>
              <td>" . $row['pesestado'] . "</td>
            </tr>";
          }
        }

        echo "</table>";
      } else {
        throw new Exception("Falha na conexão com o banco de dados.");
      }
    }
    catch (Exception $e) {
      echo "Erro: " . $e->getMessage();
    }
  }

?>