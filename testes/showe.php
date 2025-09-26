<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $idade = trim($_POST['idade'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if ($nome && $idade && $email) {
        $_SESSION['alunos'][] = [
            'nome' => htmlspecialchars($nome),
            'idade' => (int)$idade,
            'email' => htmlspecialchars($email),
            'criado_em' => date('d/m/Y H:i:s'),
        ];
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>
<body>

<h1>Cadastrar Novo Aluno</h1>

<form method="post">
    Nome: <input type="text" name="nome" required><br><br>
    Idade: <input type="number" name="idade" required><br><br>
    E-mail: <input type="email" name="email" required><br><br>
    <button type="submit">Salvar</button>
</form>

<p><a href="index.php">Voltar à lista</a></p>

</body>
</html>
