<?php
function maiorValor($array) {
    $maior = $array[0];
    foreach ($array as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }
    return $maior;
}
$valores = [15, 8, 23, 42, 16, 4];
echo "Maior valor do array: " . maiorValor($valores) . "\n";

?>
