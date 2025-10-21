<?php
class produto {
    public $nome;
  public $preco;
    public $quantidade;
    function exibirDetalhes() {
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: " . $this->preco . "\n";
        echo "Quantidade: " . $this->quantidade . "\n";
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setPreco($preco) {
        $this->preco = $preco;
    }
    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}
function calcularTotal
(produto $produto) {
    return $produto->preco * $produto->quantidade;
}
$produto1 = new produto();
echo "digite o nome do produto: ";
$produto1->setNome(trim(fgets(STDIN)));
echo "digite o preço do produto: ";
$produto1->setPreco(trim(fgets(STDIN)));
echo "digite a quantidade do produto: ";
$produto1->setQuantidade(trim(fgets(STDIN)));
$produto1->exibirDetalhes();
$total = calcularTotal($produto1);
echo "Total: " . $total . "\n";