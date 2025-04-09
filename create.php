<?php
require_once 'educacao_feminina.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $quantidade_alunas = $_POST['quantidade_alunas'];
    $quantidade_alunos = $_POST['quantidade_alunos'];
    $curso = $_POST['curso'];

    $educacao = new EducacaoFeminina();
    $educacao->create($nome, $quantidade_alunas, $quantidade_alunos, $curso);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Curso</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <h1>Adicionar Novo Curso</h1>
    <form action="create.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="quantidade_alunas">Quantidade de Alunas:</label>
        <input type="number" id="quantidade_alunas" name="quantidade_alunas" required><br>

        <label for="quantidade_alunos">Quantidade de Alunos:</label>
        <input type="number" id="quantidade_alunos" name="quantidade_alunos" required><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br>

        <button type="submit">Adicionar</button>
    </form>
</body>
</html>
