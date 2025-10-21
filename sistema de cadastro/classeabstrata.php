<?php
abstract class Formageometrica {
    abstract public function calcularArea();
    abstract public function calcularPerimetro();
}
class Quadrado extends Formageometrica {
    public $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}
class Trianguloequilatero extends Formageometrica {
    public $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return (sqrt(3) / 4) * ($this->lado * $this->lado);
    }
    public function calcularPerimetro() {
        return 3 * $this->lado;
    }
}
class trianguloisoceles extends Formageometrica {
    public $base;
    public $lado;
    public function __construct($base, $lado) {
        $this->base = $base;
        $this->lado = $lado;
    }
    public function calcularArea() {
        $altura = sqrt(($this->lado * $this->lado) - (($this->base / 2) * ($this->base / 2)));
        return ($this->base * $altura) / 2;
    }
    public function calcularPerimetro() {
        return 2 * $this->lado + $this->base;
    }
}
class Trianguloescaleno extends Formageometrica {
    public $ladoA;
    public $ladoB;
    public $ladoC;
    public function __construct($ladoA, $ladoB, $ladoC) {
        $this->ladoA = $ladoA;
        $this->ladoB = $ladoB;
        $this->ladoC = $ladoC;
    }
    public function calcularArea() {
        $s = ($this->ladoA + $this->ladoB + $this->ladoC) / 2;
        return sqrt($s * ($s - $this->ladoA) * ($s - $this->ladoB) * ($s - $this->ladoC));
    }
    public function calcularPerimetro() {
        return $this->ladoA + $this->ladoB + $this->ladoC;
    }
}
class Retangulo extends Formageometrica {
    public $largura;
    public $altura;
    public function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->largura * $this->altura;
    }
    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}
class Pentagono extends Formageometrica {
    public $lado;
    public function __construct($lado) {
        $this->lado = $lado;
    }
    public function calcularArea() {
        return (1/4) * sqrt(5 * (5 + 2 * sqrt(5))) * ($this->lado * $this->lado);
    }
    public function calcularPerimetro() {
        return 5 * $this->lado;
    }
}
class Trapezio extends Formageometrica {
    public $baseMaior;
    public $baseMenor;
    public $altura;
    public function __construct($baseMaior, $baseMenor, $altura) {
        $this->baseMaior = $baseMaior;
        $this->baseMenor = $baseMenor;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return (($this->baseMaior + $this->baseMenor) / 2) * $this->altura;
    }
    public function calcularPerimetro() {
    
        return null;
    }
}
class Diamante extends Formageometrica {
    public $diagonalMaior;
    public $diagonalMenor;
    public function __construct($diagonalMaior, $diagonalMenor) {
        $this->diagonalMaior = $diagonalMaior;
        $this->diagonalMenor = $diagonalMenor;
    }
    public function calcularArea() {
        return ($this->diagonalMaior * $this->diagonalMenor) / 2;
    }
    public function calcularPerimetro() {
        return null;
    }
}
class paralelogramo extends Formageometrica {
    public $base;
    public $altura;
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea() {
        return $this->base * $this->altura;
    }
    public function calcularPerimetro() {
        return null;
    }
}
class Circulo extends Formageometrica {
    public $raio;
    public function __construct($raio) {
        $this->raio = $raio;
    }
    public function calcularArea() {
        return pi() * ($this->raio * $this->raio);
    }
    public function calcularPerimetro() {
        return 2 * pi() * $this->raio;
    }
}
$Quadrado = new Quadrado(4);
echo "Área do Quadrado: " . $Quadrado->calcularArea() . "\n";
echo "Perímetro do Quadrado: " . $Quadrado->calcularPerimetro() . "\n";
$Trianguloequilatero = new Trianguloequilatero(3);
echo "Área do Triângulo Equilátero: " . $Trianguloequilatero->calcularArea() . "\n";
echo "Perímetro do Triângulo Equilátero: " . $Trianguloequilatero->calcularPerimetro() . "\n";
$trianguloisoceles = new trianguloisoceles(4, 5);
echo "Área do Triângulo Isósceles: " . $trianguloisoceles->calcularArea() . "\n";
echo "Perímetro do Triângulo Isósceles: " . $trianguloisoceles->calcularPerimetro() . "\n";
$Trianguloescaleno = new Trianguloescaleno(3, 4, 5);
echo "Área do Triângulo Escaleno: " . $Trianguloescaleno->calcularArea() . "\n";
echo "Perímetro do Triângulo Escaleno: " . $Trianguloescaleno->calcularPerimetro() . "\n";
$Retangulo = new Retangulo(4, 5);
echo "Área do Retângulo: " . $Retangulo->calcularArea() . "\n";
echo "Perímetro do Retângulo: " . $Retangulo->calcularPerimetro() . "\n";
$Pentagono = new Pentagono(6);
echo "Área do Pentágono: " . $Pentagono->calcularArea() . "\n";
echo "Perímetro do Pentágono: " . $Pentagono->calcularPerimetro() . "\n";
$Trapezio = new Trapezio(6, 4, 5);
echo "Área do Trapézio: " . $Trapezio->calcularArea() . "\n";
echo "Perímetro do Trapézio: " . $Trapezio->calcularPerimetro() . "\n";
$Diamante = new Diamante(6, 4);
echo "Área do Diamante: " . $Diamante->calcularArea() . "\n";
echo "Perímetro do Diamante: " . $Diamante->calcularPerimetro() . "\n";
$paralelogramo = new paralelogramo(5, 4);
echo "Área do Paralelogramo: " . $paralelogramo->calcularArea() . "\n";
echo "Perímetro do Paralelogramo: " . $paralelogramo->calcularPerimetro() . "\n";
$Circulo = new Circulo(3);
echo "Área do Círculo: " . $Circulo->calcularArea() . "\n";
echo "Perímetro do Círculo: " . $Circulo->calcularPerimetro() . "\n";
?>