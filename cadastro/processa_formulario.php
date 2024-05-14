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
$email = $_POST['email'];
$ra = $_POST['ra'];
$tipo_usuario = $_POST['tipo_usuario'];
$senha = $_POST['senha']; // Adicionando a senha

// Hash da senha
$hashed_password = password_hash($senha, PASSWORD_DEFAULT);

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome_completo, email, ra, tipo_usuario, senha) VALUES ('$nome_completo', '$email', '$ra', '$tipo_usuario', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";

} else {
    echo "Erro ao cadastrar usuário: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
  <div class="container">
        <p>Você pode fazer login agora.</p>
        <a href="../login/login.php" class="button">Fazer Login</a><br>
        <ul>
            <li><a href="../login/login.php">Logar</a></li>
        </ul>
    </div>
