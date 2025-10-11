<?php
$nota1 = 8;

if ($nota1 >= 7) {
    echo "Aprovado";
} elseif ($nota1 == 5 || $nota1 == 6) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>
