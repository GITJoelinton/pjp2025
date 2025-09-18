<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    if ($nome !== '') {
        $_SESSION['alunos'][] = [
            'nome' => htmlspecialchars($nome),
            'hora' => date('d/m/Y H:i:s')
        ];
        $msg = "Aluno $nome cadastrado.";
    } else {
        $msg = "Informe o nome.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Alunos</title>
</head>
<body>

<h1>Cadastro de Alunos</h1>

<?php if ($msg): ?>
    <p><?= $msg ?></p>
<?php endif; ?>

<form method="post">
    Nome: <input type="text" name="nome" required />
    <button type="submit">Cadastrar</button>
</form>

<p><a href="listar.php">Ver lista de alunos</a></p>

</body>
</html>
