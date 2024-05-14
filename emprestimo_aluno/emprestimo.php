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
$nome_completo = $_POST['nome_completo'];
$ra = $_POST['ra'];
$equipamento = $_POST['equipamento'];
$quantidade = $_POST['quantidade'];
$numero_equipamento = $_POST['numero_equipamento'];
$data_hora_emprestimo = $_POST['data_hora_emprestimo'];
$data_hora_devolucao = $_POST['data_hora_devolucao'];

// Inserir os dados na tabela
$sql = "INSERT INTO emprestimos (nome_completo, ra, equipamento, quantidade, numero_equipamento, data_hora_emprestimo, data_hora_devolucao) VALUES ('$nome_completo', '$ra', '$equipamento', '$quantidade', '$numero_equipamento', '$data_hora_emprestimo', '$data_hora_devolucao')";

if ($conn->query($sql) === TRUE) {
    echo "Solicitação de empréstimo realizada com sucesso!";
} else {
    echo "Erro ao processar a solicitação de empréstimo: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
