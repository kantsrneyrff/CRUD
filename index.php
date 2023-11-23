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
    <title>Lista de Animais</title>
    <script>
        function confirmDelete(id) {
            return confirm("Tem certeza que deseja excluir este animal?");
        }
    </script>
</head>
<body>
    <h2>Lista de Animais</h2>
    <table border="1">
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
                echo "<td><a href='editar_animal.php?id=" . $row['id'] . "'>Editar</a> | ";
                echo "<a href='excluir_animal.php?id=" . $row['id'] . "' onclick='return confirmDelete(" . $row['id'] . ")'>Excluir</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Nenhum animal cadastrado.</td></tr>";
        }
        ?>
    </table>

    <br>

    <button onclick="window.location.href='cadastro_animal.php'">Cadastrar Novo Animal</button>
</body>
</html>