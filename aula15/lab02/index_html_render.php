<?php

    require_once 'lib/htmltable.php';
    require_once 'lib/htmlinput.php';

    $oTabela = new htmlTable();
    $oTabela->setDados(array(
                         0 => array(
                            0 => 'Cleber Nardelli',
                            1 => 'cleber@unidavi.edu.br'
                        ),
                        1 => array(
                            0 => 'João',
                            1 => 'joao@unidavi.edu.br'
                        ))
                       );

    echo $oTabela->renderHtml();
    
    echo "<br><br>";

    $oInput = new htmlinput();
    $oInput->setTitulo("Campo");
    echo $oInput->renderHtml();

?>