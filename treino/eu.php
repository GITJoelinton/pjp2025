<?php
function tabuada($a) {
    return 4 * $a;
}

for ($i = 1; $i <= 10; $i++) {
    $resultado = tabuada($i);
    echo "4 x $i = $resultado\n";
}
?>
