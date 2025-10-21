<?php
class Funcionario {
    public $nome;
    public $salarioBase;
    function calcularSalario() {
        return $this->salarioBase;
    }
}
    class Gerente extends Funcionario {
        public $bonus;
        function calcularSalario() {
            return $this->salarioBase + $this->bonus;
        }
    }
$funcionario1 = new Funcionario();
$funcionario1->nome = "joelinton";
$funcionario1->salarioBase = 5000;
$salarioTotal = $funcionario1->calcularSalario();
echo "O salário total do funcionário " . $funcionario1->nome . " é: " . $salarioTotal . "\n";
   
$gerente1 = new gerente();
$gerente1->salarioBase = 8000;
$gerente1->bonus = 2000;
$gerente1->nome="carlos";
$salarioTotalGerente = $gerente1->calcularSalario();
echo "O salário total do gerente " . $gerente1->nome . " é: " . $salarioTotalGerente . "\n";
?>
