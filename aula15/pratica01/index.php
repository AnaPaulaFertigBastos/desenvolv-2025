<?php
require_once 'lib/time.php';
require_once 'lib/jogador.php';
require_once 'lib/jogo.php';
require_once 'lib/gol.php';

// Criação estática do time Flamengo e alguns jogadores
$flamengo = new Time('Flamengo', 1895);
$flamengo->addJogador(new Jogador('Gabriel Barbosa', 'Atacante', '1996-08-30'));
$flamengo->addJogador(new Jogador('Arrascaeta', 'Meia', '1994-03-01'));
$flamengo->addJogador(new Jogador('Bruno Henrique', 'Atacante', '1990-06-30'));
$flamengo->addJogador(new Jogador('Everton Ribeiro', 'Meia', '1989-04-10'));

$vasco = new Time('Vasco', 1898);
$vasco->addJogador(new Jogador('Ribamar', 'Atacante', '1996-08-30'));

$jogo = new Jogo($flamengo, $vasco); 
$jogo->addGol($flamengo, $flamengo->getJogadores()[0]);
$jogo->addGol($flamengo, $flamengo->getJogadores()[1]);
$jogo->addGol($vasco, $vasco->getJogadores()[0]);
// Saída simples em PHP (sem bloco HTML estático)
echo "<h1>" . htmlspecialchars($flamengo->getNome()) . "</h1>\n";
echo "Ano de fundação: " . htmlspecialchars($flamengo->getAnoFundacao()) . "\n";
echo "<h2>Jogadores</h2>\n";
foreach ($flamengo->getJogadores() as $j) {
    echo "" . htmlspecialchars($j->getNome()) . " - " . htmlspecialchars($j->getPosicao()) . " - " . htmlspecialchars($j->getDataNascimento()) . "<br>";
}

echo "<h1>" . htmlspecialchars($vasco->getNome()) . "</h1>\n";
echo "Ano de fundação: " . htmlspecialchars($vasco->getAnoFundacao()) . "\n";
echo "<h2>Jogadores</h2>\n";
foreach ($vasco->getJogadores() as $j) {
    echo "" . htmlspecialchars($j->getNome()) . " - " . htmlspecialchars($j->getPosicao()) . " - " . htmlspecialchars($j->getDataNascimento()) . "<br>";
}
echo "<h2>Vencedor da Partida:</h2>";
echo "<strong>" . $jogo->getNomeTimeVencedor() . "</strong>";

?>
