<?php
include 'conexao.php';

function formatarData($data) {
    return date('d/m/Y', strtotime($data));
}

$sql = "SELECT * FROM animal";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de Animais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function confirmDelete(id) {
            return confirm("Tem certeza que deseja excluir este animal?");
        }
    </script>
</head>
<body class="container mt-5">

    <h2>Lista de Animais</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Sexo</th>
                <th>Cor</th>
                <th>Nascimento</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['raca'] . "</td>";
                    echo "<td>" . $row['sexo'] . "</td>";
                    echo "<td>" . $row['cor'] . "</td>";
                    echo "<td>" . formatarData($row['nascimento']) . "</td>";
                    echo "<td>" . $row['peso'] . "</td>";
                    echo "<td>" . $row['altura'] . "</td>";
                    echo "<td><a href='editar_animal.php?id=" . $row['id'] . "' class='btn btn-primary'>Editar</a> | ";
                    echo "<a href='excluir_animal.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirmDelete(" . $row['id'] . ")'>Excluir</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Nenhum animal cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>

    <a href="cadastro_animal.php" class="btn btn-success">Cadastrar Novo Animal</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
