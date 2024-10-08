<!DOCTYPE html>
<html>

<body>
    <form method="post" action="processa.php">
        Nome do produto: <input type="text" name="nome_produto"><br>
        Preço: <input type="number" step="0.01" name="preco"><br>
        Quantidade em estoque: <input type="number" name="quantidade_estoque"><br>
        Score do produto: <input type="number" step="0.1" name="score_produto" min="0" max="10"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
<!-- //010 Variaveis externas GET e POST. -->