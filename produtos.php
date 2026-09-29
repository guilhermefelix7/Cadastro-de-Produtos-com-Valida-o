<?php

$servidor = "localhost";
$usuario = "root";
$senha = "Senai@118";
$banco = "exercicio";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome"]);
    $preco = $_POST["preco"];

    if ($nome == "") {

        echo "Erro: O nome do produto não pode estar vazio.";

    } elseif (!is_numeric($preco) || $preco <= 0) {

        echo "Erro: O preço deve ser um número positivo.";

    } else {

        $sql = "INSERT INTO produtos (nome, preco) VALUES (?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sd", $nome, $preco);

        if ($stmt->execute()) {

            echo "Produto cadastrado com sucesso!";

        } else {

            echo "Erro ao cadastrar o produto.";

        }

        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <h1>Cadastro de Produtos</h1>

    <form method="POST">

        <label>Nome do Produto:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01">

        <br><br>

        <button type="submit">Cadastrar Produto</button>

    </form>

</body>

</html>