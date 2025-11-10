<?php
// Script estático simples que cria uma sessão, um usuário e salva os dados.
require_once __DIR__ . '/model/session.php';
require_once __DIR__ . '/model/usuario.php';

use Model\Session;
use Model\Usuario;

// Cria objeto de sessão
$s = new Session();

// Cria instância de Usuario e popula dados
$u = new Usuario();
$u->setUserName('Ana Paula');
$u->setUserLogin('ana');
$u->setUserPass('senha123');

// Inicia sessão usando o objeto Usuario
$s->iniciaSessao($u);

// Salva os dados na superglobal $_SESSION
$s->salvarSessao();

// Mostra mensagem simples (exibe o nome do usuário)
echo "Sessão iniciada. Usuário: " . htmlspecialchars($u->getUserName()) . "<br>";
// Mostra também o valor salvo na superglobal (apenas para confirmar)
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
// $_SESSION['user'] pode ser um objeto Usuario
if (isset($_SESSION['user']) && is_object($_SESSION['user']) && method_exists($_SESSION['user'], 'getUserName')) {
	echo '(confirmado em $_SESSION[\'user\']: ' . htmlspecialchars($_SESSION['user']->getUserName()) . ')';
} else {
	echo '(confirmado em $_SESSION[\'user\']: ' . htmlspecialchars((string)($_SESSION['user'] ?? 'não definido')) . ')';
}
?>