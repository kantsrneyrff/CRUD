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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Editar Animal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body class="container mt-5">

    <h2>Editar Animal</h2>

    <form action="processa_animal.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
        </div>
        <div class="form-group">
            <label for="raca">Raça:</label>
            <input type="text" class="form-control" id="raca" name="raca" value="<?php echo $raca; ?>">
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <input type="text" class="form-control" id="sexo" name="sexo" value="<?php echo $sexo; ?>">
        </div>
        <div class="form-group">
            <label for="cor">Cor:</label>
            <input type="text" class="form-control" id="cor" name="cor" value="<?php echo $cor; ?>">
        </div>
        <div class="form-group">
            <label for="nascimento">Nascimento:</label>
            <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $nascimento; ?>">
        </div>
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $peso; ?>">
        </div>
        <div class="form-group">
            <label for="altura">Altura:</label>
            <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $altura; ?>">
        </div>
        <button type="submit" value="salvar" class="btn btn-primary">Salvar</button>
    </form>

    <br>

    <a href="index.php" class="btn btn-secondary">Voltar para a Lista</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
