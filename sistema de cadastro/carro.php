<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;
   function ligar () {}
}
    class Eletrico extends Carro {
        public $autonomia;
        function carregar() {
            echo "O carro elétrico " . $this->marca . " " . $this->modelo . " está ligado.\n";
        }
    }
$carro1 = new eletrico();
$carro1->marca = "Tesla";
$carro1->modelo = "Model S";
$carro1->ano = 2022;
$carro1->autonomia = 600;
$carro1->ligar();
$carro1->carregar();
?>
