<?php
function media($lista, $tamanho)
{
    $soma = 0;
    for ($i = 0; $i < $tamanho; $i++)
        $soma += $lista[$i];
    return $soma / $tamanho;
}

$lista = array(1, 2, 3, 4);
$m = media($lista, count($lista));
echo $m . "\n";
