<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados (substitua com suas próprias credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema_pimentel";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        header("Location: area_restrita.php");
        exit;
    } else {
        $_SESSION["login_error"] = "Email ou senha inválidos.";
        header("Location: login.php");
        exit;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: login.php");
    exit;
}
?>
