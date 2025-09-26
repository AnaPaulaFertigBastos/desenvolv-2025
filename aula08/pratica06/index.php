<?php 
  $boletim = array(array("Disciplina" => "Matemática", "Falta" => 5, "Média" => 8.5),
                  array("Disciplina" => "Português", "Falta" => 2, "Média" => 9),
                  array("Disciplina" => "Geografia", "Falta" => 10, "Média" => 6),
                  array("Disciplina" => "Educação Física", "Falta" => 2, "Média" => 8),
                  );

  echo "<table> 
          <thead style='background-color:blue; color:white'>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Média</th>
          </thead>
          <tbody>";

  foreach($boletim as $b) {
    echo"<tr>
          <td>" . $b['Disciplina'] . "</td>
          <td>" . $b['Falta'] . "</td>
          <td>" . $b['Média'] . "</td>
        </tr>";
  };

  echo "
        </tbody>
      </table>";
?>