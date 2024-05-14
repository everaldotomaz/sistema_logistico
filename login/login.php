<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            background-color: #f0f0f0;
        }

        form {
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            color: white;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        input[type="datetime-local"],
        select,
        button {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #2980b9;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #1f6da0;
        }
    </style>
</head>
<body>
      <?php
    session_start();
    if (isset($_SESSION["login_error"])) {
        echo "<p>{$_SESSION["login_error"]}</p>";
        unset($_SESSION["login_error"]);
    }
    ?>
     
    <form action="processa_login.php" method="post">
    <h2>Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
