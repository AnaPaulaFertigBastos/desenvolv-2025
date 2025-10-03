<?php 
  $pastas =
    array("bsn" =>
      array("3a Fase" =>
              array("desenvWeb", "bancoDados 1", "engSoft 1"),
            "4a Fase" =>
                array("Intro Web", "bancoDados 2", "engSoft 2")));

  // $traco = "-";
  // function listarPastas($pastas, $traco) {
    
  //   foreach($pastas as $elemento => $valor) {
  //     echo "$traco";
  //     echo " $elemento";
  //     echo "<br>";
  //     if (is_array($valor)) {
  //       $traco = $traco . "-";
  //       listarPastas($valor, $traco);
  //     }

  //   }
  // }

  // listarPastas($pastas, $traco);

  function listarPastas($pasta, $nivel = 1) {
    
    if (is_array($pasta)) {
      foreach($pasta as $elemento => $valor) {
        if (is_array($valor)) {
          echo str_repeat("-", $nivel) . $elemento . "<br>";
          listarPastas($valor, $nivel + 1);
        } 
        else {
          echo str_repeat("-", $nivel) . $valor . "<br>";
        }
      };
    }
    else {
      echo str_repeat("-", $nivel) . $pasta . "<br>";
    }

    
  }

  listarPastas($pastas);
?>