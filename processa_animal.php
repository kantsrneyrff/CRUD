<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : null; // Use isset() para verificar se 'id' está definido
    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $cor = $_POST['cor'];
    $nascimento = $_POST['nascimento'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    if (empty($id)) {
        // Inserir novo animal
        $sql = "INSERT INTO animal (nome, raca, sexo, cor, nascimento, peso, altura)
                VALUES ('$nome', '$raca', '$sexo', '$cor', '$nascimento', '$peso', '$altura')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Animal cadastrado com sucesso!'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar o animal: " . $conn->error . "'); window.location.href = 'index.php';</script>";
        }
    } else {
        // Atualizar animal existente
        $sql = "UPDATE animal
                SET nome='$nome', raca='$raca', sexo='$sexo', cor='$cor', nascimento='$nascimento', peso='$peso', altura='$altura'
                WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Animal atualizado com sucesso!'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o animal: " . $conn->error . "'); window.location.href = 'index.php';</script>";
        }
    }
}

$conn->close();
?>