<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturando os dados do formulário
    $nome_produto = $_POST['nome_produto'];
    $preco = $_POST['preco'];
    $quantidade_estoque = $_POST['quantidade_estoque'];
    $score_produto = $_POST['score_produto'];

    // Exibindo os dados
    echo "Nome do Produto: " . htmlspecialchars($nome_produto) . "<br>";
    echo "Preço: R$ " . number_format((float)$preco, 2, ',', '.') . "<br>";
    echo "Quantidade em Estoque: " . (int)$quantidade_estoque . "<br>";
    echo "Score do Produto: " . number_format((float)$score_produto, 1, '.', '') . "/10<br>";
}
?>