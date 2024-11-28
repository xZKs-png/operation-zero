<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if (isset($_POST['criar_topico'])) {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    $sql = "INSERT INTO topics (titulo, conteudo, data_criacao) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $titulo, $conteudo);

    if ($stmt->execute()) {
        header("Location: topics.php?success=1");
        exit();
    } else {
        echo "Erro ao criar tópico!";
    }
    $stmt->close();
}

$sql = "SELECT * FROM topics ORDER BY data_criacao DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/css/styles.css">
    <title>Tópicos</title>
</head>
<body>
    <h1>Tópicos</h1>

    <?php if (isset($_GET['success'])): ?>
        <p class="mensagem-sucesso">Tópico criado com sucesso!</p>
    <?php endif; ?>

    <div class="lista-topicos">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="topico">
                <h3><?php echo htmlspecialchars($row['titulo']); ?></h3>
                <p><?php echo nl2br(htmlspecialchars($row['conteudo'])); ?></p>
                <p><small>Postado em: <?php echo $row['data_criacao']; ?></small></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
