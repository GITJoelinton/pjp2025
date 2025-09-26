<?php
// Cadastro de alunos
$alunos = [
    ["nome" => "Maria", "nota" => 8.5],
    ["nome" => "João", "nota" => 6.0],
    ["nome" => "Ana", "nota" => 9.2],
    ["nome" => "Pedro", "nota" => 7.3],
    ["nome" => "Lucas", "nota" => 5.8],
];

// 1. Listar todos os alunos
echo "<h3>Lista de Alunos</h3>";
foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
}

// 2. Calcular média da turma
$soma = 0;
foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];
}
$media = $soma / count($alunos);
echo "<br><b>Média da turma:</b> $media <br>";

// 3. Descobrir aluno com maior nota
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}
echo "<b>Maior nota:</b> $melhorAluno com $maiorNota pontos<br>";
?>
