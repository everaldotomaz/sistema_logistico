<?php
// Verificar se o usuário está logado
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Equipamentos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="equipment-management">
        <h2>Gerenciamento de Equipamentos</h2>
        <ul>
            <li><a href="adicionar_equipamento.php">Adicionar Equipamento</a></li>
            <li><a href="editar_equipamento.php">Editar Equipamento</a></li>
            <li><a href="remover_equipamento.php">Remover Equipamento</a></li>
        </ul>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
