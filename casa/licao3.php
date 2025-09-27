<?php
function maiorquedois($n1, $n2) {
    if ($n1 > $n2) {
        echo "$n1 é maior que $n2";
    } elseif ($n1 < $n2) {
        echo "$n2 é maior que $n1";
    } else {
        echo "$n1 é igual a $n2";
    }
}

// aqui fora você chama para testar
maiorquedois(8, 3);