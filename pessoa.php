<?php
class Pessoa {    
    function falar(){
        echo "Olá estou falando <br>";
    }

    function andar(){
        echo "Estou caminhando <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }
}

$thiago = new Pessoa;
$jose = new Pessoa;

$thiago -> falar();
$thiago -> andar();
$thiago -> somar(2, 2);


$jose -> falar();
$jose -> andar();
$jose -> somar(5, 5);