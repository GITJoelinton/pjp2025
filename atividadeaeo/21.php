<?php
$a = 0; $b = 1;
for ($i = 0; $i < 20; $i++) {
    echo $a . " ";
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
}