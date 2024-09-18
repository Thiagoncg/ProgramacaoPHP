<?php
session_start(); // Iniciando a sessão para armazenar os dados dos funcionários

// Verifica se a sessão 'funcionarios' já existe, se não existir, cria um array vazio
if (!isset($_SESSION['funcionarios'])) {
    $_SESSION['funcionarios'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebendo os dados via POST
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];

    // Variável para armazenar erros
    $erros = [];

    // Validação dos campos
    if (strlen($nome) > 100) {
        $erros[] = "O nome deve ter no máximo 100 caracteres.";
    }

    if (empty($cargo)) {
        $erros[] = "O campo Cargo é obrigatório.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O e-mail fornecido é inválido.";
    }

    // Exibindo erros, se houver
    if (!empty($erros)) {
        echo "<h3>Erros encontrados:</h3>";
        echo "<ul>";
        foreach ($erros as $erro) {
            echo "<li>$erro</li>";
        }
        echo "</ul>";
    } else {
        // Dados válidos, criando array associativo do funcionário
        $funcionario = [
            'nome' => $nome,
            'cargo' => $cargo,
            'email' => $email
        ];

        // Armazenando o funcionário na sessão
        $_SESSION['funcionarios'][] = $funcionario;

        // Mensagem de sucesso
        echo "<p>Funcionário cadastrado com sucesso!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    <h2>Cadastro de Funcionário</h2>

    <!-- Formulário HTML para enviar dados via POST -->
    <form action="" method="POST">
        <label for="nome">Nome (máx 100 caracteres):</label><br>
        <input type="text" id="nome" name="nome" maxlength="100" required><br><br>

        <label for="cargo">Cargo:</label><br>
        <input type="text" id="cargo" name="cargo" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>

    <h3>Funcionários Cadastrados:</h3>

    <?php if (!empty($_SESSION['funcionarios'])): ?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>E-mail</th>
            </tr>
            <?php foreach ($_SESSION['funcionarios'] as $funcionario): ?>
                <tr>
                    <td><?php echo htmlspecialchars($funcionario['nome']); ?></td>
                    <td><?php echo htmlspecialchars($funcionario['cargo']); ?></td>
                    <td><?php echo htmlspecialchars($funcionario['email']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum funcionário cadastrado ainda.</p>
    <?php endif; ?>

</body>
</html>
