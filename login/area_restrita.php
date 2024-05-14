<?php
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
    <title>Área Restrita</title>
    <style>
        /* Estilo dos botões */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Estilo do container */
        .container {
            margin-top: 20px;
            text-align: left;
        }

        header {
            background-color: #09a9f3;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 50px; /* Ajuste conforme necessário */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .main-content {
            padding: 20px;
        }

        .school-info {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .school-info h2 {
            font-size: 24px;
        }

        .school-info p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        /* Estilos para o menu responsivo */
        .menu-icon {
            display: none;
            cursor: pointer;
        }

        @media screen and (max-width: 768px) {
            nav ul {
                display: none;
                flex-direction: column;
                align-items: left;
            }

            nav ul.active {
                display: flex;
            }

            .menu-icon {
                display: block;
            }
        }
    </style>
</head>
<body>
<header>
        <div class="logo">
            <a href="index.html"><img src="../img/logoPimentel.enc" alt="Logo da Escola"></a>
        </div>
        <nav>
            <div class="menu-icon">&#9776;</div>
            <ul>
            <li><a href="../adm/admin.html">Admin</a></li>
                <li><a href="../devolucao/devolucao.html">Devolução</a></li>
                <li><a href="../emprestimo_aluno/emprestimo_aluno.html">Emprestimo Aluno</a></li>
                <li><a href="../emprestimo_professor/emprestimo_professor.html">Emprestimo Professor</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <h2>Bem-vindo à Área Restrita</h2>
    <p>Seu email: <?php echo $_SESSION["email"]; ?></p>

    <div class="container">
        <a href="../emprestimo_aluno/emprestimo_aluno.html" class="button">Emprestimo para Aluno</a><br><br>
        <a href="../emprestimo_professor/emprestimo_professor.html" class="button">Emprestimo para Professor</a><br><br>
        <a href="../devolucao/devolucao.html" class="button">Devolução</a><br><br>
        <a href="../adm/admin.html" class="button">Empréstimos Ativos</a>
    </div>

</body>
</html>
