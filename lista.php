<?php 
require_once 'educacao_feminina.php';
$educacao = new EducacaoFeminina();
$registros = $educacao->read();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Igualdade de Gênero</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="lista.php">Lista de Cursos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <h2 class="mb-4">Lista de Cursos por Igualdade de Gênero</h2>
    <a href="create.php" class="btn btn-success mb-3">Adicionar Novo Curso</a>
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Alunas</th>
                    <th>Alunos</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro): ?>
                    <tr>
                        <td><?= htmlspecialchars($registro['id']) ?></td>
                        <td><?= htmlspecialchars($registro['nome']) ?></td>
                        <td><?= htmlspecialchars($registro['quantidade_alunas']) ?></td>
                        <td><?= htmlspecialchars($registro['quantidade_alunos']) ?></td>
                        <td><?= htmlspecialchars($registro['curso']) ?></td>
                        <td class="text-center">
                            <a href="update.php?id=<?= $registro['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                            <a href="delete.php?id=<?= $registro['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($registros)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum curso encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="text-center text-muted py-4 bg-light mt-5">
    <p>© 2025 Igualdade de Gênero. Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
