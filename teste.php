<?php
$nome = $_POST['inome'] ?? 'Visitante';
echo "Olá, " . htmlspecialchars($nome);
?>