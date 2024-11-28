<?php
session_start();

if (isset($_SESSION['registro_sucesso'])) {
    $mensagem_sucesso = $_SESSION['registro_sucesso'];
    
    unset($_SESSION['registro_sucesso']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="logo">
        <img src="admin/img/OZ_logo.png" alt="Logo">
        <a href="index.php">Operation Zero</a>
    </div>
    <div class="container">
        <div class="inscricao-selecao">
            <header>Inscrição</header>

            <div class="botao-social">
                <button id="google-login"><i class='bx bxl-google'></i>Google</button>
                <button id="apple-login"><i class='bx bxl-apple'></i>Apple</button>
            </div>
            <div class="separador">
                <div class="linha"></div>
                <p>Ou</p>
                <div class="linha"></div>
            </div>
            <form method="POST" action="auth.php">
                <input type="text" name="username" placeholder="Nome de usuário" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <a href="#">Esqueci a Senha</a>
                <button type="submit" name="register" class="btn">Inscrever-se</button>
            </form>
        </div>

        <div class="login-selecao">
            <header>Login</header>

            <div class="botao-social">
                <button id="google-login"><i class='bx bxl-google'></i>Google</button>
                <button id="apple-login"><i class='bx bxl-apple'></i>Apple</button>
            </div>
            <div class="separador">
                <div class="linha"></div>
                <p>Ou</p>
                <div class="linha"></div>
            </div>
            <form method="POST" action="auth.php">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <a href="#">Esqueci a Senha</a>
                <button type="submit" name="login" class="btn">Login</button>
            </form>
        </div>

        <?php if (isset($mensagem_sucesso)): ?>
            <div class="mensagem-sucesso">
                <p><?php echo $mensagem_sucesso; ?></p>
            </div>
        <?php endif; ?>

    </div>

    <script src="admin/js/script.js"></script>
</body>
</html>