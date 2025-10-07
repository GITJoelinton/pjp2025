<?php
echo"digite um mumero";
$a=(int)trim(fgets(STDIN));
echo "digite o segundo numero";
$b=(int)trim(fgets(STDIN));
$soma=$a+$b;
$subtracao=$a-$b;
$multiplicacao=$a*$b;
$divisao=$a/$b;
echo "a soma de $a + $b e $soma <br>";
echo "a subtraçao de $a - $b e $subtracao <br>";
echo "a multiplicacao de $a x $b e $multiplicacao <br>";
echo "a divisao de $a / $b e $divisao <br>";
