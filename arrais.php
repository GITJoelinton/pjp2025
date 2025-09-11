<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$reset = "\033[0m";

echo $amarelo . $preto . " numeros " . $reset . "\n";
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$reset = "\033[0m";
echo $amarelo . $preto . " pares e impares " . $reset . "\n";
echo "Digite o primeiro número: ";
$a = (float)trim(fgets(STDIN));
echo "Digite o segundo número: ";
$b = (float)trim(fgets(STDIN));
echo "Digite o terceiro o número: ";
$c = (float)trim(fgets(STDIN));
echo "Digite o terceiro número: ";
$d = (float)trim(fgets(STDIN));
echo "Digite o quarto número: ";
$e = (float)trim(fgets(STDIN));
echo "Digite o quinto número: ";
$f = (float)trim(fgets(STDIN));
echo "Digite o sexto do número: ";
$g = (float)trim(fgets(STDIN));
echo "Digite o setimo número: ";
$h = (float)trim(fgets(STDIN));
echo "Digite o oitavo número: ";
$i = (float)trim(fgets(STDIN));
echo "Digite nono número: ";
$j = (float)trim(fgets(STDIN));
echo "Digite o decimo número: ";
array($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
echo "Os números digitados foram: $a, $b, $c, $d, $e, $f, $g, $h, $i, $j\n";
$inpares = 0;
$pares = 0 ;
if ($a % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($b % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($c % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($d % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($e % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($f % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($g % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($h % 2 == 0) {
    $pares++;
} else {
    $inpares++;
} 
if ($i % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
if ($j % 2 == 0) {
    $pares++;
} else {
    $inpares++;
}
echo "Total de números pares: $pares\n";
echo "Total de números ímpares: $inpares\n";