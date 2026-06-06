<?php
// Definir o tipo de conteúdo e charset
header('Content-Type: text/html; charset=UTF-8');

// Ativar exibição de erros (apenas para desenvolvimento, nunca em produção)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Função para sanitizar entradas
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Exemplo de uso com GET
$nome = isset($_GET['nome']) ? sanitize_input($_GET['nome']) : 'Visitante';

// Exemplo de uso com POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensagem = isset($_POST['mensagem']) ? sanitize_input($_POST['mensagem']) : '';
} else {
    $mensagem = '';
}

// Saída segura
echo "<h1>Olá, {$nome}!</h1>";
if (!empty($mensagem)) {
    echo "<p>Sua mensagem: {$mensagem}</p>";
}
?>

<!-- Formulário HTML -->
<form method="post" action="">
    <label for="mensagem">Digite uma mensagem:</label><br>
    <input type="text" name="mensagem" id="mensagem" required>
    <button type="submit">Enviar</button>
</form>