<?php
require_once 'educacao_feminina.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $educacao = new EducacaoFeminina();
    $registro = $educacao->find($id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $quantidade_alunas = $_POST['quantidade_alunas'];
        $quantidade_alunos = $_POST['quantidade_alunos'];
        $curso = $_POST['curso'];

        $educacao->update($id, $nome, $quantidade_alunas, $quantidade_alunos, $curso);

        header("Location: index.php");
    }
}
?>

<style>
    /* Reset básico */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    padding: 40px 20px;
    color: #333;
}

/* Título da página */
h1 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 2.2rem;
    color: #4a4a4a;
}

/* Caixa do formulário */
form {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

/* Rótulos e campos */
label {
    display: block;
    margin-top: 20px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 10px 12px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border-color 0.3s;
    font-size: 1rem;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

/* Botão de envio */
button[type="submit"] {
    margin-top: 30px;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

</style>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Curso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Lista de Cursos</h1>
    <form action="update.php?id=<?= $registro['id'] ?>" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $registro['nome'] ?>" required><br>

        <label for="quantidade_alunas">Quantidade de Alunas:</label>
        <input type="number" id="quantidade_alunas" name="quantidade_alunas" value="<?= $registro['quantidade_alunas'] ?>" required><br>

        <label for="quantidade_alunos">Quantidade de Alunos:</label>
        <input type="number" id="quantidade_alunos" name="quantidade_alunos" value="<?= $registro['quantidade_alunos'] ?>" required><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" value="<?= $registro['curso'] ?>" required><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
