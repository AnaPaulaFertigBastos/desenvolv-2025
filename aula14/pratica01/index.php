<?php
// Página de teste para Calculadora e Computador
// Requer as classes antes de iniciar a sessão (para desserializar o objeto em sessão)
require_once __DIR__ . '/calculadora.php';
require_once __DIR__ . '/computador.php';

use Calculadora\Calculadora;
use Computador\Computador;

session_start();

// Inicializa objeto Computador na sessão se não existir
if (!isset($_SESSION['computador']) || !($_SESSION['computador'] instanceof Computador)) {
    $_SESSION['computador'] = new Computador();
}
$computador = $_SESSION['computador'];

$calc = new Calculadora();

$calcResult = null;
$calcError = null;
$compMessage = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if (in_array($action, ['somar','subtrair','multiplicar','dividir'])) {
        $a = $_POST['numero1'] ?? null;
        $b = $_POST['numero2'] ?? null;
        if (!$calc->validarNumero($a, $b)) {
            $calcError = 'Por favor informe dois números válidos.';
        } else {
            $a = (float)$a;
            $b = (float)$b;
            try {
                switch ($action) {
                    case 'somar': $calcResult = $calc->somar($a,$b); break;
                    case 'subtrair': $calcResult = $calc->subtrair($a,$b); break;
                    case 'multiplicar': $calcResult = $calc->multiplicar($a,$b); break;
                    case 'dividir': $calcResult = $calc->dividir($a,$b); break;
                }
            } catch (\Exception $e) {
                $calcError = $e->getMessage();
            }
        }
    }

    if (in_array($action, ['ligar','desligar','status'])) {
        // Chamadas ao objeto Computador (ele escreve via echo nas suas funções).
        // Capturamos qualquer saída para mostrar na página e atualizamos o objeto em sessão.
        ob_start();
        if ($action === 'ligar') {
            $computador->ligar();
        } elseif ($action === 'desligar') {
            $computador->desligar();
        } elseif ($action === 'status') {
            // status() retorna string; não faz echo
            $s = $computador->status();
            echo $s;
        }
        $compMessage = ob_get_clean();
        $_SESSION['computador'] = $computador; // atualiza sessão
    }
}

?>

<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Calculadora e Computador - Prática</title>
  <style>
    body { font-family: Arial, sans-serif; max-width:800px; margin:20px auto; }
    fieldset { margin-bottom:20px; }
    label { display:block; margin-top:8px; }
    input[type="number"] { width:120px; }
    .result { background:#f4f4f4; padding:10px; border-radius:4px; }
    button { margin-right:8px; }
  </style>
</head>
<body>
  <h1>Calculadora e Computador</h1>

  <form method="post">
    <fieldset>
      <legend>Calculadora</legend>
      <label>Número 1: <input type="number" step="any" name="numero1" required value="<?php echo htmlspecialchars($_POST['numero1'] ?? '') ?>"></label>
      <label>Número 2: <input type="number" step="any" name="numero2" required value="<?php echo htmlspecialchars($_POST['numero2'] ?? '') ?>"></label>

      <input type="hidden" name="action" id="action" value="">
      <button type="submit" onclick="document.getElementById('action').value='somar'">Somar</button>
      <button type="submit" onclick="document.getElementById('action').value='subtrair'">Subtrair</button>
      <button type="submit" onclick="document.getElementById('action').value='multiplicar'">Multiplicar</button>
      <button type="submit" onclick="document.getElementById('action').value='dividir'">Dividir</button>

      <div style="margin-top:12px">
        <?php if ($calcError): ?>
          <div class="result" style="color:#a00"><?php echo htmlspecialchars($calcError) ?></div>
        <?php elseif ($calcResult !== null): ?>
          <div class="result">Resultado: <strong><?php echo htmlspecialchars((string)$calcResult) ?></strong></div>
        <?php endif; ?>
      </div>
    </fieldset>

    <fieldset>
      <legend>Computador</legend>

      <p>Estado atual: <strong><?php echo htmlspecialchars($computador->status()) ?></strong></p>

      <button type="submit" onclick="document.getElementById('action').value='ligar'">Ligar</button>
      <button type="submit" onclick="document.getElementById('action').value='desligar'">Desligar</button>
      <button type="submit" onclick="document.getElementById('action').value='status'">Status</button>

      <?php if ($compMessage !== null): ?>
        <div class="result" style="margin-top:12px">Retorno: <strong><?php echo htmlspecialchars($compMessage) ?></strong></div>
      <?php endif; ?>
    </fieldset>

  </form>

</body>
</html>
