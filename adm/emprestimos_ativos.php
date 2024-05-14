<?php
// Aqui você conecta ao banco de dados e consulta os empréstimos ativos
// Exemplo:

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_pimentel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM emprestimos WHERE data_hora_devolucao >= NOW()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir empréstimos ativos
    echo "<h2>Empréstimos Ativos</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome Completo</th><th>RA</th><th>Equipamento</th><th>Data e Hora do Empréstimo</th><th>Data e Hora de Devolução</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome_completo"]. "</td><td>" . $row["ra"]. "</td><td>" . $row["equipamento"]. "</td><td>" . $row["data_hora_emprestimo"]. "</td><td>" . $row["data_hora_devolucao"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Não há empréstimos ativos.";
}
$conn->close();
?>
