<?php
// Recebe os dados do formulário
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];

// Calcula a idade
$data_atual = new DateTime();
$data_nascimento = new DateTime($data_nascimento);
$intervalo = $data_atual->diff($data_nascimento);
$idade = $intervalo->y;

// Verifica se a pessoa é maior de 18 anos
if ($idade >= 18) {
    echo "Parabéns, $nome! Você pode entrar na festa.";
} else {
    echo "Desculpe, $nome. Você ainda não tem 18 anos e não pode entrar na festa.";
}
?>