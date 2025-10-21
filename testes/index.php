<
<?php
require __DIR__ . '/config.php';

$busca = trim($_GET['q'] ?? '');
$sql = "SELECT * FROM alunos WHERE (:q = '' OR nome LIKE :like) ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute([':q' => "$busca", ':like' => "%$busca%"]);
$alunos = $stmt->fetchAll();
?>



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo</title>
</head>
<body>
   <h1> NOVO ALUNO </h1>

    
   <table border="1" cellpadding="7">
<thead>
       <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>  
        <th>Criado em</th>
        <th>Ações</th>
       </tr>

         <?php foreach($alunos as $aluno): ?>
         <tr>
            <td><?= (int)$aluno['id'] ?></td>
            <td><?= h($aluno['nome']) ?></td>
            <td><?= (int)$aluno['idade'] ?></td>
            <td><?= h($aluno['email']) ?></td>
            <td><?= (int)$aluno['criado_em']?></td>
            <td><a href="5edit.php?id=<?= (int)$aluno['id'] ?>">Editar</a> |
                
 </thead>

</body>
</html>