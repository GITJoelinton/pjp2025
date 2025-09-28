<?php
/*
EXERCÍCIOS PHP - LISTA DE TAREFAS

1. Crie um script que mostre "Olá, Mundo!" na tela.

2. Declare três variáveis (nome, idade, cidade) e imprima uma frase usando elas.

3. Receba um número e diga se é par ou ímpar.

4. Receba três notas, calcule a média e mostre se o aluno está aprovado (≥ 7) ou reprovado.

5. Use um for para imprimir os números de 1 a 20.

6. Use um while para somar todos os números de 1 a 100.

7. Crie um array com 5 nomes e use foreach para imprimir "Olá, Fulano" para cada um.

8. Crie uma função que calcule o fatorial de um número.

9. Crie uma função que receba um array de números e retorne a soma deles.

10. Crie uma função que receba dois números e retorne o maior.
*/
/*
$nome = "jota";
$cidade = "natal";
$idade = 17;

echo "Moro na cidade de " . $cidade . "<br>";
echo "Meu nome é " . $nome . "<br>";
echo "Minha idade é " . $idade . "<br>";
?>
echo "Digite o número inicial: ";
$inicio = (int)trim(fgets(STDIN));

echo "Digite o número final: ";
$fim = (int)trim(fgets(STDIN));

echo "\n=== NÚMEROS DE $inicio ATÉ $fim ===\n";

$pares = [];
$impares = [];

for ($i = $inicio; $i <= $fim; $i++) {
    if ($i % 2 == 0) {
        $pares[] = $i;
    } else {
        $impares[] = $i;
    }
}

echo "\n🟢 NÚMEROS PARES:\n";
echo implode(", ", $pares) . "\n";

echo "\n🔴 NÚMEROS ÍMPARES:\n";
echo implode(", ", $impares) . "\n";

echo "\nTotal de pares: " . count($pares) . "\n";
echo "Total de ímpares: " . count($impares) . "\n";
?>*/
/*
echo"digite a primeira nota";
$nota1=(int)trim(fgets(STDIN));
echo"digite a segunda nota";
$nota2=(int)trim(fgets(STDIN));
echo"digite a terceira nota";
$nota3=(int)trim(fgets(STDIN));
$total=($nota1+$nota2+$nota3)/3;
echo"sua media e " . $total;*/


