<?php
include 'conexao.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cadastro de Animal</title>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body class="container mt-5">

    <h2 class="mb-4">Cadastro de Animal</h2>

    <form action="processa_animal.php" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="raca">Raça:</label>
            <input type="text" class="form-control" id="raca" name="raca">
        </div>
        <div class="form-group">
            <label for="sexo">Sexo:</label>
            <input type="text" class="form-control" id="sexo" name="sexo">
        </div>
        <div class="form-group">
            <label for="cor">Cor:</label>
            <input type="text" class="form-control" id="cor" name="cor">
        </div>
        <div class="form-group">
            <label for="nascimento">Nascimento:</label>
            <input type="date" class="form-control" id="nascimento" name="nascimento">
        </div>
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input type="text" class="form-control" id="peso" name="peso">
        </div>
        <div class="form-group">
            <label for="altura">Altura:</label>
            <input type="text" class="form-control" id="altura" name="altura">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <br>

    <a href="index.php" class="btn btn-secondary">Voltar para a Lista</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>