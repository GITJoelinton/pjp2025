<?php
// Array com os nomes dos meses do segundo semestre (índices 7-12 correspondem a julho-dezembro)
$mesesSegundoSemestre = [
    7 => "Julho",
    8 => "Agosto", 
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

// Função para verificar se o mês está no segundo semestre
function verificarSegundoSemestre($numeroMes, $arrayMeses) {
    // Verifica se o número do mês é válido (1-12)
    if ($numeroMes < 1 || $numeroMes > 12) {
        return "Erro: Digite um número válido de 1 a 12.";
    }
    
    // Verifica se o mês está no segundo semestre (julho a dezembro = 7 a 12)
    if ($numeroMes >= 7 && $numeroMes <= 12) {
        return "O mês " . $arrayMeses[$numeroMes] . " está no segundo semestre.";
    } else {
        return "O mês não está no segundo semestre.";
    }
}

// Programa principal
echo "=== VERIFICADOR DE SEGUNDO SEMESTRE ===\n";
echo "Digite o número do mês (1-12): ";

// Lê a entrada do usuário
$numeroMes = (int)trim(fgets(STDIN));

// Verifica e exibe o resultado
$resultado = verificarSegundoSemestre($numeroMes, $mesesSegundoSemestre);
echo "\n" . $resultado . "\n";
// Versão alternativa mais compacta:
/*
echo "\n=== VERSÃO ALTERNATIVA ===\n";
echo "Digite o número do mês (1-12): ";
$mes = (int)trim(fgets(STDIN));

$nomes = ["", "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", 
          "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

if ($mes >= 1 && $mes <= 12) {
    if ($mes >= 7) {
        echo "O mês " . $nomes[$mes] . " está no segundo semestre.\n";
    } else {
        echo "O mês não está no segundo semestre.\n";
    }
} else {
    echo "Número inválido! Digite um valor de 1 a 12.\n";
}
*/
?>