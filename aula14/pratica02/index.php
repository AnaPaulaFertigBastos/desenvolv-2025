<?php
require_once __DIR__ . '/model/time.php';
require_once __DIR__ . '/model/jogador.php';

use Campeonato\Time;
use Campeonato\Jogador;

// Criação estática do time Flamengo e alguns jogadores
$flamengo = new Time('Flamengo', 1895);
$flamengo->addJogador(new Jogador('Gabriel Barbosa', 'Atacante', '1996-08-30'));
$flamengo->addJogador(new Jogador('Arrascaeta', 'Meia', '1994-03-01'));
$flamengo->addJogador(new Jogador('Bruno Henrique', 'Atacante', '1990-06-30'));
$flamengo->addJogador(new Jogador('Everton Ribeiro', 'Meia', '1989-04-10'));

// Saída simples em PHP (sem bloco HTML estático)
echo "<h1>" . htmlspecialchars($flamengo->getNome()) . "</h1>\n";
echo "Ano de fundação: " . htmlspecialchars($flamengo->getAnoFundacao()) . "\n";
echo "<h2>Jogadores</h2>\n";
foreach ($flamengo->getJogadores() as $j) {
    echo "" . htmlspecialchars($j->getNome()) . " - " . htmlspecialchars($j->getPosicao()) . " - " . htmlspecialchars($j->getDataNascimento()) . "<br>";
}

?>
