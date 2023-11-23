<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];

    $sql = "SELECT * FROM animal WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nome = $row['nome'];
        $raca = $row['raca'];
        $sexo = $row['sexo'];
        $cor = $row['cor'];
        $nascimento = $row['nascimento'];
        $peso = $row['peso'];
        $altura = $row['altura'];
    } else {
        echo "Animal não encontrado.";
        exit();
    }
} else {
    echo "Requisição inválida.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Animal</title>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <h2>Editar Animal</h2>

    <form action="processa_animal.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Nome: <input type="text" name="nome" value="<?php echo $nome; ?>" required><br>
        Raça: <input type="text" name="raca" value="<?php echo $raca; ?>"><br>
        Sexo: <input type="text" name="sexo" value="<?php echo $sexo; ?>"><br>
        Cor: <input type="text" name="cor" value="<?php echo $cor; ?>"><br>
        Nascimento: <input type="date" name="nascimento" value="<?php echo $nascimento; ?>"><br>
        Peso: <input type="text" name="peso" value="<?php echo $peso; ?>"><br>
        Altura: <input type="text" name="altura" value="<?php echo $altura; ?>"><br>
        <input type="submit" value="Salvar">
    </form>

    <br>

    <button onclick="window.location.href='index.php'">Voltar para a Lista</button>
</body>
</html>