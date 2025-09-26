<?php
echo "calculadora /n";
function somar($a){
    for ($i=1; $i<=10; $i++){
        $resultado=$a+$i;
        echo "$a + $i = $resultado /n";
    }
}
function subtrair($a){
    for ($i=1; $i<=10; $i++){
        $resultado=$a-$i;
        echo "$a - $i = $resultado/n";
    }
}
function multiplicar($a){
    for ($i=1; $i<=10; $i++){
        $resultado=$a*$i;
        echo "$a x $i = $resultado /n";
    }
}
function dividir($a){
    for ($i=1; $i<=10; $i++){
        $resultado=$a/$i;
        echo "$a / $i = $resultado /n";
    }
}

