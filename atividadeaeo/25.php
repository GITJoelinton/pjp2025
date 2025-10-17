<?php
$produto = [
    "nome" => "Notebook",
    "preco" => 2500.00,
    "quantidade" => 10
];
echo "Produto novo:\n";
var_dump($produto);
echo "\n";
echo "Dados do produto:\n";
foreach ($produto as $chave => $valor) {
    echo "$chave: $valor\n";
}
echo "\n";