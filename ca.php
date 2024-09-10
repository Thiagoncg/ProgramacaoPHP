<?php

class Carro{

    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
        $this ->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade deste carro é $this->velocidadeMaxima km\h <br>";
    }
}
$bmw = new Carro;

$bmw -> cor = "Branco";
$bmw -> tetoSolar = true;
$bmw -> setVelocidadeMaxima(290);
$bmw -> getVelocidadeMaxima();