<?php
class Veiculo{
    public $modelo;
    public $cor;

    public function __construct($modelo, $cor){
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    public function exibirDados(){
        echo "Modelo: $this->modelo, cor: $this->cor";
    }

}

class Carro extends Veiculo{
    public $ligado = false;

    public function ligar(){
        $this->ligado = true;
    }

    public function exibirEstado(){
        echo $this->ligado ? "Carro esta ligado" : "Carro desligado";

    }
}
$meuCarro = new Carro("Bmw", "Ferrari");
$meuCarro->exibirDados();
$meuCarro->ligar();
$meuCarro->exibirEstado();