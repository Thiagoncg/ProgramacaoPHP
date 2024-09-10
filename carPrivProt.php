<?php
Class Car{
    public $rodas = 4;//A propriedade ou método pode ser acessada de qualquer forma;
    private $vidro = "Sem Pelicula"; //a propriedade ou método pode ser acessada apenas pela classe
    protected $portas = 4;//A propriedade ou método pode ser acessada apenas pela    classe de origem


    public function getVidro(){
        return $this->vidro;
        
    }

    public function getPortas(){
        return $this->portas;
    }
} 

class Mecanico{
    public function alterarRodas($carro){
        $carro->rodas = 10;
    }

    public function  colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }

}

$carro = new Car;
echo $carro->rodas ."<br>";

$thiago = new Mecanico;
$thiago->alterarRodas($carro);

echo $carro->rodas . "<br>";

//$thiago->colocarPelicula($carro, "P20");

echo $carro->getVidro() . "<br>";

//$carro->vidro = "teste";

echo $carro->getPortas() . "<br>";

// cda campeonato é diferente.
20 times - duas chaves de 10; classifica os 8 melhores de cada chave.
