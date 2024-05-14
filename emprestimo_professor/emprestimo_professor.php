<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_pimentel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_completo = $_POST['nome_completo'];
    $ra = $_POST['ra'];
    $equipamento = $_POST['equipamento'];
    $quantidade = $_POST['quantidade'];
    $data_hora_emprestimo = $_POST['data_hora_emprestimo'];
    $data_hora_devolucao = $_POST['data_hora_devolucao'];

    // Inserção no banco de dados
    $sql = "INSERT INTO emprestimo_professor (nome_completo, ra, equipamento, quantidade, data_hora_emprestimo, data_hora_devolucao)
    VALUES ('$nome_completo', '$ra', '$equipamento', $quantidade, '$data_hora_emprestimo', '$data_hora_devolucao')";

    if ($conn->query($sql) === TRUE) {
        echo "Solicitação de empréstimo registrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
