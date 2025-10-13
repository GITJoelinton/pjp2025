<?php
$pessoa = [
    "nome" => "Joelinto",
    "cidade" => "São Paulo",
    "idade" => 18
];

foreach ($pessoa as $chave => $valor) {
    echo $chave . ": " . $valor . "\n";
}
