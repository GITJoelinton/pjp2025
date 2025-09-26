<?php
if ($argc < 4) { "<br>";
    echo "Uso: php calculadora.php numero1 operador numero2\n" . "<br>";
    echo "Exemplo: php calculadora.php 10 + 5\n" . "<br>";
    exit; 
}

$a = (float)$argv[1];   
$op = $argv[2];
$b = (float)$argv[3];

switch ($op) {
    case '+': $resultado = $a + $b; break;
    case '-': $resultado = $a - $b; break;
    case '*': $resultado = $a * $b; break;
    case '/': 
        $resultado = $b != 0 ? $a / $b : "Erro: divisão por zero"; 
        break;
    default:
        $resultado = "Operador inválido";
}
echo "Resultado: $resultado\n";
?>