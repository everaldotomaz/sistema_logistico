<?php
// Configurações do banco de dados
$servername = "localhost"; // endereço do servidor MySQL
$username = "root"; // seu nome de usuário do MySQL
$password = ""; // sua senha do MySQL
$dbname = "sistema_pimentel"; // nome do banco de dados

// Conectando ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Processar os dados do formulário
$ra = $_POST['ra'];
$numero_serie_notebook = $_POST['numero_serie_notebook'];
$data_devolucao = $_POST['data_devolucao'];

// Inserir os dados na tabela
$sql = "INSERT INTO devolucoes (ra, numero_serie_notebook, data_devolucao) VALUES ('$ra', '$numero_serie_notebook', '$data_devolucao')";

if ($conn->query($sql) === TRUE) {
    echo "Notebook devolvido com sucesso!";
} else {
    echo "Erro ao processar a devolução do notebook: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
