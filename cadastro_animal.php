<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <h2>Cadastro de Animal</h2>

    <form action="processa_animal.php" method="post">
        <!-- Não incluímos o campo 'id' aqui, pois será um novo cadastro -->
        Nome: <input type="text" name="nome" required><br>
        Raça: <input type="text" name="raca"><br>
        Sexo: <input type="text" name="sexo"><br>
        Cor: <input type="text" name="cor"><br>
        Nascimento: <input type="date" name="nascimento"><br>
        Peso: <input type="text" name="peso"><br>
        Altura: <input type="text" name="altura"><br>
        <input type="submit" value="Cadastrar">
    </form>

    <br>

    <button onclick="window.location.href='index.php'">Voltar para a Lista</button>
</body>
</html>
