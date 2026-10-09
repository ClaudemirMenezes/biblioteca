<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alunos</title>
</head>
<body>
    <h1>Lista de alunos</h1>

    <?php if (empty($lista)) : ?>
        <p>Nenhum aluno encontrado.</p>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $aluno) : ?>
                    <tr>
                        <td><?= htmlspecialchars((string) $aluno->id, ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $aluno->nome, ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $aluno->ra, ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars((string) $aluno->curso, ENT_QUOTES, 'UTF-8') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>