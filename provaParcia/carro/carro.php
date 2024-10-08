<?php
// Definindo a classe Veiculo
class Veiculo {
    public $modelo;
    public $cor;

    // Construtor para inicializar o modelo e cor
    public function __construct($modelo, $cor) {
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    // Método para exibir as propriedades
    public function exibirDetalhes() {
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Cor: " . $this->cor . "<br>";
    }
}

// Definindo a classe Carro que herda de Veiculo
class Carro extends Veiculo {
    private $ligado = false;

    // Método para ligar o carro
    public function ligar() {
        $this->ligado = true;
    }

    // Método para desligar o carro
    public function desligar() {
        $this->ligado = false;
    }

    // Método para exibir se o carro está ligado ou desligado
    public function exibirStatus() {
        if ($this->ligado) {
            echo "O carro está ligado.<br>";
        } else {
            echo "O carro está desligado.<br>";
        }
    }
}

// Exemplo de uso
$meuCarro = new Carro("Civic", "Preto");
$meuCarro->exibirDetalhes();
$meuCarro->ligar();
$meuCarro->exibirStatus();
?>
