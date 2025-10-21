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
$produto1->setNome("Notebook");
$produto1->setPreco(2500);
$produto1->setQuantidade(2);
$produto1->exibirDetalhes();
$total = calcularTotal($produto1);
echo "Total: " . $total . "\n";