<?php
$hostname = "localhost";
$bancodedados = "test";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar com o banco:(". $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Banco de dados conectado com sucesso";
}