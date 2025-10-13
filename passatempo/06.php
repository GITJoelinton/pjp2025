<?php
$notas = [7, 8.5, 6, 9, 10];

$soma = array_sum($notas); // Soma todos os valores do array
$media = $soma / count($notas); // Divide pela quantidade de notas

echo "Média da turma: " . $media;
